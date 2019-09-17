'''
2점: 숫자 3이라고 쓰고, 숯의 3가지 기능을 작성해야함 
1. 사람에게 해로운 균을 없애주고, 좋은 미생물을 번식
2. 썩는 것을 막는 성질
3. 습기를 없애는 기능
1점: 숯의 3가지 기능 중에서 2가지를 맞게 쓴 경우
'''

import pandas as pd
import numpy as np
from konlpy.tag import Twitter
from sklearn.feature_extraction.text import TfidfVectorizer, CountVectorizer
from sklearn.metrics.pairwise import linear_kernel, cosine_similarity



def sub06034(count, answer):
    grade = 0
    if (count != 3):
        return grade
    else:
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
            '사람에게 해로운 균을 없애주고, 좋은 미생물을 번식',
            '썩는 것을 막는 성질',
            '습기를 없애는 기능',
            '간장이나 된장의 영양분을 풍부하게 했기 때문이다'
            '신선하게 보관'
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

sub06034(3,"습기 없애다")
        
      