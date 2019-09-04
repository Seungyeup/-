"""""""""""""""""""""""""""""""""""""""""""""""""""
청각 집중력2 , 문제2-4 (사용안내서 38~39pg)

<형태소 분석 및 빈출단어에 의한 채점방식>

1.형태소 분석 및 품사태깅 (twitter class 사용)
2.NLTK 로 빈출단어 중 불용어 수집
3.NLTK tokenizer로 불용어 제거 및 빈출단어 재수집
4.핵심 형태소 선택

# warning 무시하고, konlpy, twitter형태소 분석기 사용
import warnings
warnings.filterwarnings('ignore')
from konlpy.tag import Twitter
twitter = Twitter()
text = '''먹지 않는게 좋다.'''

#twitter 형태소 분석기로 품사 태깅
example_pos = twitter.pos(text, norm=True, stem=True)
example_pos[:10]
#nltk사용기능중, 가장 많이 사용된 단어를 추린다.
import nltk
nltk_text = nltk.Text(example_pos, name='text')
nltk_text.vocab().most_common(30)
import nltk
from nltk.corpus import stopwords 
from nltk.tokenize import word_tokenize 

stop_words = "있다 , 이 . 을 하다 에는 에 것 으로 로 되다 의 건 않다 있는 있으며 하지만 때문에 것으로 될 수"
stop_words=stop_words.split(' ')

word_tokens = word_tokenize(text)   
result = [] 

for w in word_tokens: 
    if w not in stop_words: 
        result.append(w) 
print(result)
nltk_text = nltk.Text(result, name='text')
nltk_result=nltk_text.vocab().most_common(30)
print(nltk_result)

TF-IDF 유사도 측정방식과의 비교
from math import log10

# =======================================
# -- TF-IDF function
# =======================================
def f(t, d):
    # d is document == tokens
    return d.count(t)

def tf(t, d):
    # d is document == tokens
    return 0.5 + 0.5*f(t,d)/max([f(w,d) for w in d])

def idf(t, D):
    # D is documents == document list
    numerator = len(D)
    denominator = 1 + len([ True for d in D if t in d])
    return log10(numerator/denominator)

def tfidf(t, d, D):
    return tf(t,d)*idf(t, D)

def tokenizer(d):
    # return [ t for t in d.split() if len(t) > 1 ]
    return d.split()

def tfidfScorer(D):
    tokenized_D = [tokenizer(d) for d in D]
    result = []
    for d in tokenized_D:
        result.append([(t, tfidf(t, d, tokenized_D)) for t in d])
    return result


if __name__ == '__main__':
    corpus = ['과일 껍질에는 몸에 좋은 성분이 많은 것으로 알려져 있다.',
              '대표적인 예로 사과 껍질에는 만성질병을 예방할 수 있는 성분이 있으며,',
              ' 포도 껍질에는 치매 예방 성분이, 감껍질에는 암을 예방하는 성분이 들어 있는 것으로 보고되고 있다',
              ' 하지만 그동한 농약 걱정 때문에 과일 껍질을 깎아내고 먹는 경우가 많았다.',
              ' 식약청의 발표에 의하면 이제부터 과일 껍질을 안심하고 먹어도 될 것으로 보인다.',
              ' 식약청은 사과,배,감,포도 등 과일류 4,776건을 분석한 결과, 99.8%인 4,767건의 과일에서 농약이 나오지 않았거나,',
              ' 나왔다하더라도 씻지 않고 섭취해도 될 정도로 아주 적은 양만이 남아 있었다고 밝혔다.',
              ' 농약 기준치를 넘은 과일이 9건 있었지만, 먹기 전에 물이나 과일용 세척제로 닦으면 쉽게 제거할 수 있는 수준이었다.',
              ' 따라서 과일 껍질의 많은 영양 성분을 고려한다면 가능한 과일을 껍질째 섭취하는 것이 좋다.']

    for i, doc in enumerate(tfidfScorer(corpus)):
        print('====== document[%d] ======' % i)
        print(doc)

+2 TF-IDF 유사도 측정을 활용한 채점방식 결과, 그 이후

1. 수치가 일정하게 분포되어 있지 않으며, 중요도를 판별하고는 있으나 조사테그를 지워내면 수치적인 보완이 가능해 보인다.
2. TF-IDF은 유사어에 취약한 근본적인 원인을 가지고 있다. 따라서 LSA(잠재의미분석),Word-embedding을 추가할 예정
3. 속도문제가 남아 있기 때문에 sklearn, keras를 적용했을때와 실행속도비교.
"""""""""""""""""""""""""""""""""""""""""""""""""""

import warnings
import nltk
import DB_info
from konlpy.tag import Twitter
warnings.filterwarnings('ignore')

total_score = 0      #전체 점수
idx_0507=2           #0507 테이블 idx

#쿼리문 호툴
query = "SELECT c1,c2,c3,c4,sno FROM sub0507 where idx = %s"
result = DB_info.db_select(query,idx_0507)

sno = result[0][4];  #학생 이메일(or 학번)

#C1
if result[0][0]=='99.8%':
    total_score = total_score+1
#C2
if result[0][1]=='포도':
    total_score = total_score+1
#C3
if result[0][2]=='감':
    total_score = total_score+1
#C4
twitter = Twitter()
example_pos = twitter.pos(result[0][3], norm=True, stem=True)
nltk_text = nltk.Text(example_pos, name='text')
nltk_result = nltk_text.vocab().most_common(30)

answer = [(('과일', 'Noun'), 1), (('껍질', 'Noun'), 1), (('은', 'Josa'), 1), (('먹다', 'Verb'), 1), (('좋다', 'Adjective'), 1)]
n_answer = [(('안', 'VerbPrefix'), 1), (('않다', 'Verb'), 1), ]
score = 0

for w in nltk_result:
    if w in answer:
        score = score + 1
    if w in n_answer:
        score = score - 2
if score >= 4:
    total_score = total_score + 2   # 2점부여
elif score >= 2:
    total_score = total_score + 1  # 1점부여
else:
    total_score = total_score + 0  # 0점부여

# 최종점수 업데이트
query = "UPDATE result SET ans0507 = %s where sno = %s"
DB_info.db_update(query,total_score,sno)
