import DB_info
import warnings
import nltk
import json
import time
import sys
import logging
import os
import numpy as np
import tensorflow as tf
from konlpy.tag import Okt
from tensorflow.keras import models
from tensorflow.keras import layers
from tensorflow.keras import optimizers
from tensorflow.keras import losses
from tensorflow.keras import metrics
from keras.models import load_model
from keras.models import model_from_json

# Warning 제거
logging.disable(logging.WARNING)
os.environ["TF_CPP_MIN_LOG_LEVEL"] = "3"
warnings.filterwarnings('ignore')

start = time.time()
okt = Okt()

# 정수만 받도록하는 함수
def is_number(s):
    try:
        int(s)
        return True
    except ValueError:
        return False

if len(sys.argv) == 1:          # 옵션 없으면 출력하고 종료
    print ("숫자로 된 옵션을 입력해 주세요")
    exit(1)
elif not is_number(sys.argv[1]): # 옵션이 숫자인지 검사
    print ("에러! 정수를 입력해 주세요")
    exit(2)

idx = int(sys.argv[1])

# 데이터 저장 폴더 만드는 함수 ( 폴더명 : raw)
def create_folder(directory):
    try:
        if not os.path.exists(directory):
            os.makedirs(directory)
    except OSError:
        print('Error: Creating directory. ' + directory)

abspath = os.path.abspath("./raw")
create_folder(abspath)

# 데이터 읽어오는 함수
def read_data(filename):
    with open(filename, 'rt', encoding='UTF8') as f:
        data = [line.split('\t') for line in f.read().splitlines()]
        # txt 파일의 헤더(id document label)는 제외하기
        data = data[1:]
    return data

abspath_1 = os.path.abspath("./ratings_train.txt")
abspath_2 = os.path.abspath("./ratings_test.txt")
train_data = read_data(abspath_1)
test_data = read_data(abspath_2)

# 토큰화 시키는 함수
def tokenize(doc):
    # norm은 정규화, stem은 근어로 표시하기를 나타냄
    return ['/'.join(t) for t in okt.pos(doc, norm=True, stem=True)]

# 토큰화한 데이터들을 JSON파일로 저장
abspath_3 = os.path.abspath("./raw/train_docs.json")
abspath_4 = os.path.abspath("./raw/test_docs.json")
def file_save():
    if os.path.isfile(abspath_3):
        train_docs = [(tokenize(row[1]), row[2]) for row in train_data]
        test_docs = [(tokenize(row[1]), row[2]) for row in test_data]
        with open(abspath_3, 'w', encoding='utf-8') as f:
            json.dump(train_docs, f, ensure_ascii=False, indent="\t")
        with open(abspath_4, 'w', encoding='utf-8') as f:
            json.dump(test_docs, f, ensure_ascii=False, indent="\t")
    return train_docs, test_docs

train_docs,test_docs = file_save()
tokens = [t for d in train_docs for t in d[0]]
text = nltk.Text(tokens, name='NMSC')

selected_words = [f[0] for f in text.vocab().most_common(1000)]

def term_frequency(doc):
    return [doc.count(word) for word in selected_words]

# 데이터 전처리
train_x = [term_frequency(d) for d, _ in train_docs]
test_x = [term_frequency(d) for d, _ in test_docs]
train_y = [c for _, c in train_docs]
test_y = [c for _, c in test_docs]

x_train = np.asarray(train_x).astype('float32')
x_test = np.asarray(test_x).astype('float32')

y_train = np.asarray(train_y).astype('float32')
y_test = np.asarray(test_y).astype('float32')

abspath_5 = os.path.abspath("./raw/model.json")
# 모델 있으면 Load, 없으면 새로 모델 구축
def create_model():
    try:  # if os.path.isfile('../PymySQL/raw/model.json'):
        print("*************** Loading original model ***************")
        with open(abspath_5, "r") as fp:
            model = tf.keras.models.model_from_json(fp.read())

        model.compile(optimizer=optimizers.RMSprop(lr=0.001),
                      loss=losses.binary_crossentropy,
                      metrics=[metrics.binary_accuracy])
        model.fit(x_train, y_train, epochs=1, batch_size=1)
        results = model.evaluate(x_test, y_test)
    except:  # else:
        print("******** There is no Model! Making new model ********")
        model = models.Sequential()
        model.add(layers.Dense(64, activation='relu', input_shape=(22,)))
        model.add(layers.Dense(64, activation='relu'))
        model.add(layers.Dense(1, activation='sigmoid'))

        model.compile(optimizer=optimizers.RMSprop(lr=0.001),
                      loss=losses.binary_crossentropy,
                      metrics=[metrics.binary_accuracy])
        model.fit(x_train, y_train, epochs=10, batch_size=512)
        results = model.evaluate(x_test, y_test)
        # 모델만 JSON 파일 형식으로 만들어 저장하기
        model_json = model.to_json()
        with open(abspath_5, "w") as json_file:
            json_file.write(model_json)
    return results,model

results,model = create_model()
print("loss : {:.5f} \nbinary_accuracy : {:.5f}".format(results[0],results[1]))  # 정확도 출력

# 답안과 이메일 받아오는 쿼리문
query_1 = "SELECT c1,sno FROM sub0513 where idx = %s"

result = DB_info.db_select(query_1,idx)

answer = result[0][0]
sno = result[0][1]
# 점수 출력 함수
def predict_pos_neg(review):
    token = tokenize(review)
    tf = term_frequency(token)
    data = np.expand_dims(np.asarray(tf).astype('float32'), axis=0)
    score = float(model.predict(data))
    if (score > 0.5):
        print("[{}]는 {:.2f}% 확률로 정답으로 추측합니다.\n 그리고 {}의 점수는 {:.2f} / 10.00 \n".format(review, score * 100, sno, score * 10))
    else:
        print(
            "[{}]는 {:.2f}% 확률로 오답으로 추측합니다. \n 그리고 {}의점수는 {:.2f} / 10.00 \n".format(review, (1 - score) * 100, sno, score * 10))
    return score * 10

score = predict_pos_neg(answer)

# DB에 sno가 같은것에 대해서 업데이트
query_2 = "UPDATE result SET ans0513 = %s where sno = %s"
DB_info.db_update(query_2,score,sno)
print("time :", (time.time() - start))


