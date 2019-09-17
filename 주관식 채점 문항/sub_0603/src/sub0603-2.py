'''
2점: 숯의 성분 떄문, 숯의 작은 구멍들이 더러운 물질을 빨아들여 물이 깨끗해졌기 때문 등 (유사한 맥락의 내용인 경우)
0점: 오답 
'''
import pandas as pd
import numpy as np
from konlpy.tag import Twitter
from sklearn.feature_extraction.text import TfidfVectorizer, CountVectorizer
from sklearn.metrics.pairwise import linear_kernel, cosine_similarity


def sub06032(answer) :
    pd.options.mode.chained_assignment = None
    
    np.random.seed(0)
    
    twitter = Twitter()
    
    # tokenizer : 문장에서 색인어 추출을 위해 명사,동사,알파벳,숫자 정도의 단어만 뽑아서 normalization, stemming 처리하도록 함
    def tokenizer(raw, pos=["Noun","Alpha","Verb","Number"], stopword=[]):
        return [
            word for word, tag in twitter.pos(
                raw, 
                norm=True,   # normalize 그랰ㅋㅋ -> 그래ㅋㅋ
                stem=True    # stemming 바뀌나->바뀌다
                )
                if len(word) > 1 and tag in pos and word not in stopword
            ]
    rawdata = ['숯의 성분 떄문','숯의 작은 구멍들이 더러운 물질을 빨아들여 물이 깨끗해졌기 때문',
                 '숯이 우물물을 썩지 않게 하였다는 점','성분이 간장이나 된장의 영양분을 풍부하게 했기 때문이다','좋은 미생물을 번식',
                 '해로운 균을 없애주다']
    vectorize = TfidfVectorizer(
        tokenizer=tokenizer,
        min_df=2,
        
        sublinear_tf=True    # tf값에 1+log(tf)를 적용하여 tf값이 무한정 커지는 것을 막음
    )
    X = vectorize.fit_transform(rawdata)
    
    print(
        'fit_transform, (sentence {}, feature {})'.format(X.shape[0], X.shape[1])
    )
    # fit_transform, (sentence 5, feature 7)
    
    print(X.toarray())
    
    # 문장에서 뽑아낸 feature 들의 배열
    features = vectorize.get_feature_names()
    
    
    # 검색 문장에서 feature를 뽑아냄
    srch=[t for t in tokenizer(answer) if t in features]
    print(srch)
    
    # dtm 에서 검색하고자 하는 feature만 뽑아낸다.
    srch_dtm = np.asarray(X.toarray())[:, [
        # vectorize.vocabulary_.get 는 특정 feature 가 dtm 에서 가지고 있는 index값을 리턴한다
        vectorize.vocabulary_.get(i) for i in srch
    ]]
    
    score = srch_dtm.sum(axis=1)
    print(score)
    # array([0.         0.         1.10877443 1.40815765 0.8695635 ], dtype=int64) 문장별 feature 합계 점수
    
    for i in score.argsort()[::-1]:
        if score[i] > 0:
            print('{} / score : {}'.format(rawdata[i], score[i]))
            
            
sub06032("숯이 우물물을 썩게 하기 때문")