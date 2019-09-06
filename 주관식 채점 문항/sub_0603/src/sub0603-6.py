'''
2점: 기계나 부품이 어떤 일을 해내는 능력, 어떤 역할을 해내는 것 등(유사한 맥락의 의미인 경우)
0점: 오답
'''
import pandas as pd
import numpy as np
from konlpy.tag import Twitter
from sklearn.feature_extraction.text import TfidfVectorizer, CountVectorizer
from sklearn.metrics.pairwise import linear_kernel, cosine_similarity


def sub06036(answer) :
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
    
    # 테스트 문장
    rawdata = [
        '기계나 부품이 어떤 일을 해내는 능력',
        '어떤 역할을 해내는 것',
        
        '하는 구실이나 작용을 함',
        '권한이나 직책, 능력 따위에 따라 일정한 분야에서 하는 역할과 작용',
        
        '육체적, 정신적 작업을 정확하고 손쉽게 해 주는 기술상의 재능.',
        '기량과 재능을 아울러 이르는 말','어떤 실체의 존재 목적 또는 특징적인 동작'
        
        '생물체의 기관, 조직, 세포의 생활 활동이나 작용. 또는 그 능력',
        '어떤 기관이나 단체가 가지는 고유하고 특수한 역할.',
        '기계나 부품 따위가 어떤 일을 해내는 능력.'
        '기술적인 측면에서의 성능이나 재능',
        '어떤 실체의 존재 목적 또는 특징적인 동작',
        '계층 실체들의 동작의 일부',
    ]
    
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
            
            
sub06036("뭔가를 할수 있는 것")