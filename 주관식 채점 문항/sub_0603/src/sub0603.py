# -*- coding: utf-8 -*-
import sys

import pandas as pd
import numpy as np
import DB_info
from konlpy.tag import Twitter
from sklearn.feature_extraction.text import TfidfVectorizer, CountVectorizer
from sklearn.metrics.pairwise import linear_kernel, cosine_similarity








def sub0603_1(answer):
    '''
       2점: 숯의 기능, 숯의 작용, 숯의 성질, 숯의 쓰임새
       1점: 숯
       0점: 본문과 관련 x
       '''

    grade = 0
    if answer == u'숯':
        grade = 1

        return grade
    else:

        pd.options.mode.chained_assignment = None

        np.random.seed(0)

        twitter = Twitter()

        # tokenizer : 문장에서 색인어 추출을 위해 명사,동사,알파벳,숫자 정도의 단어만 뽑아서 normalization, stemming 처리하도록 함
        def tokenizer(raw, pos=["Noun", "Alpha", "Verb", "Number"], stopword=[]):
            return [
                word for word, tag in twitter.pos(
                    raw,
                    norm=True,  # normalize 그랰ㅋㅋ -> 그래ㅋㅋ
                    stem=True  # stemming 바뀌나->바뀌다
                )
                if len(word) > 1 and tag in pos and word not in stopword
            ]

        # 테스트 문장
        rawdata = [
            '숯의 장점','숯의 단점.', '숯의 작용.','숯의 쓰임새','숯의 성질', '숯의 성질','숯의 활용','숯의 강점', '숯의 장점과 그 쓰임새','숯의 작용과 성질','숯의 활용과 강점','숯의 이용과 장점',' 숯의 사용과 선용','숯의 운영과 이용','숯의 작용과 쓰임새','숯의 기능','숯의 기능과 쓰임새','숯의 기능과 장점','숯의 사용과 기능','숯의 활용과 기능'
        ]

        vectorize = TfidfVectorizer(
            tokenizer=tokenizer,
            min_df=2,

            sublinear_tf=True  # tf값에 1+log(tf)를 적용하여 tf값이 무한정 커지는 것을 막음
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
        srch = [t for t in tokenizer(answer) if t in features]
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
                grade = 2
        return grade

def sub0603_2(answer):
    grade = 0
    pd.options.mode.chained_assignment = None

    np.random.seed(0)

    twitter = Twitter()

    # tokenizer : 문장에서 색인어 추출을 위해 명사,동사,알파벳,숫자 정도의 단어만 뽑아서 normalization, stemming 처리하도록 함
    def tokenizer(raw, pos=["Noun", "Alpha", "Verb", "Number"], stopword=[]):
        return [
            word for word, tag in twitter.pos(
                raw,
                norm=True,  # normalize 그랰ㅋㅋ -> 그래ㅋㅋ
                stem=True  # stemming 바뀌나->바뀌다
            )
            if len(word) > 1 and tag in pos and word not in stopword
        ]

    # 테스트 문장
    rawdata = [
        '숯의 성분 때문에','숯의 작은 구멍들이 더러운 물질을 빨아들여 물이 깨끗해졌기 때문','숯이 물을 썩지 않게 하였다는 점','숯이 해로운 균을 없애준다'
    ]

    vectorize = TfidfVectorizer(
        tokenizer=tokenizer,
        min_df=2,

        sublinear_tf=True  # tf값에 1+log(tf)를 적용하여 tf값이 무한정 커지는 것을 막음
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
    srch = [t for t in tokenizer(answer) if t in features]
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
            grade = 2
    return grade


def sub0603_3(answer):
    grade = 0
    pd.options.mode.chained_assignment = None

    np.random.seed(0)

    twitter = Twitter()

    # tokenizer : 문장에서 색인어 추출을 위해 명사,동사,알파벳,숫자 정도의 단어만 뽑아서 normalization, stemming 처리하도록 함
    def tokenizer(raw, pos=["Noun", "Alpha", "Verb", "Number"], stopword=[]):
        return [
            word for word, tag in twitter.pos(
                raw,
                norm=True,  # normalize 그랰ㅋㅋ -> 그래ㅋㅋ
                stem=True  # stemming 바뀌나->바뀌다
            )
            if len(word) > 1 and tag in pos and word not in stopword
        ]

    # 테스트 문장
    rawdata = [
        '숯과 소금','습기 제거','습기를 제거한다','습기를 없애는 기능','소금 덕분',' 숯과 소금 덕분','솣의 놀라운 효능','습기를 제거하기 때문'
    ]

    vectorize = TfidfVectorizer(
        tokenizer=tokenizer,
        min_df=2,

        sublinear_tf=True  # tf값에 1+log(tf)를 적용하여 tf값이 무한정 커지는 것을 막음
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
    srch = [t for t in tokenizer(answer) if t in features]
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
            grade = 2
    return grade



def sub0603_4(count, answer):
    grade = 0
    count = int(count)
    if count == 1 or count == 0:
        grade = 0
    elif count == 2:
        grade = 1

    elif count == 3:

        pd.options.mode.chained_assignment = None
        np.random.seed(0)
        twitter = Twitter()

        # tokenizer : 문장에서 색인어 추출을 위해 명사,동사,알파벳,숫자 정도의 단어만 뽑아서 normalization, stemming 처리하도록 함
        def tokenizer(raw, pos=["Noun", "Alpha", "Verb", "Number"], stopword=[]):
            return [
                word for word, tag in twitter.pos(
                    raw,
                    norm=True,  # normalize 그랰ㅋㅋ -> 그래ㅋㅋ
                    stem=True  # stemming 바뀌나->바뀌다
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

            sublinear_tf=True  # tf값에 1+log(tf)를 적용하여 tf값이 무한정 커지는 것을 막음
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
        srch = [t for t in tokenizer(answer) if t in features]
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
                grade = 2
    print("grade is " + str(grade))
    return grade

def sub0603_5(answer):
    '''
    '비결' 대신 들어갈 수 있는 단어?
    2점: 노하우, 비법, 특별한 방법, 비밀 등 (유사한 맥락의 의미인 경우)
    0점: 오답
    '''
    text = ['노하우', '비법', '특별한 방법', ' 비밀', '비방', '비전', '묘방', '묘책', '묘법', '묘계', '묘방', '묘안', '고안', '생각', '아이디어']
    grade = 0
    for ans in text:
        if answer == ans:
            grade = 2
            return grade
        else:
            print("incorrect")
    return grade


def sub0603_6(answer):
    grade = 0
    pd.options.mode.chained_assignment = None

    np.random.seed(0)

    twitter = Twitter()

    # tokenizer : 문장에서 색인어 추출을 위해 명사,동사,알파벳,숫자 정도의 단어만 뽑아서 normalization, stemming 처리하도록 함
    def tokenizer(raw, pos=["Noun", "Alpha", "Verb", "Number"], stopword=[]):
        return [
            word for word, tag in twitter.pos(
                raw,
                norm=True,  # normalize 그랰ㅋㅋ -> 그래ㅋㅋ
                stem=True  # stemming 바뀌나->바뀌다
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
        '기량과 재능을 아울러 이르는 말', '어떤 실체의 존재 목적 또는 특징적인 동작'

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

        sublinear_tf=True  # tf값에 1+log(tf)를 적용하여 tf값이 무한정 커지는 것을 막음
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
    srch = [t for t in tokenizer(answer) if t in features]
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
            grade = 2
    return grade





def sub0603_7(answer):
    '''
    2점: 이처럼, 위와 같이, 그러므로 등 (이전에 제시된 내용을 정리하기 위한 접속어 인 경우)
    0점: 오답
    '''


    text = ['이처럼','위와 같이','그러므로','그래서','고로','따라서','그러모로','고래서','이래서','따라서','고래서','저래서','그런고로','그런즉']
    grade = 0
    for ans in text :
        if answer == ans:
            grade = 2
            print("correct")
            return grade
        else:
            print("incorrect")
    return grade

if __name__ == '__main__':
    idx_0603 = sys.argv[1]
    total_score = 0;
    query = "SELECT sno,c1,c2,c3,c4_1,c4_2,c5,c6,c7,c8 FROM sub0603 where idx = %s"
    result = DB_info.db_select(query, idx_0603)
    sno = result[0][0]
    answer1 = result[0][1]  # c1
    answer2 = result[0][2]  # c2
    answer3 = result[0][3]  # c3
    answer4_1 = result[0][4]  # c4_1
    answer4_2 = result[0][5]  # c4_2
    answer5 = result[0][6]  # c5
    answer6 = result[0][7]  # c6
    answer7 = result[0][8]  # c7
    answer8 = result[0][9]  # c8

    ans1 = sub0603_1(answer1)
    ans2 = sub0603_2(answer2)
    ans3 = sub0603_3(answer3)
    ans4 = sub0603_4(answer4_1, answer4_2)
    ans5 = sub0603_5(answer5)
    ans6 = sub0603_6(answer6)
    ans7 = sub0603_7(answer7)
    # ans8 =  sub0603_8(answer8) 점수 목록에 안들어가있으므로 생략

    total_score = ans1 + ans2 + ans3 + ans4 + ans5 + ans6 + ans7
    print("total score: " + str(total_score))
    # 최종점수 업데이트
    query = "UPDATE result SET ans0603 = %s where sno = %s"
    DB_info.db_update(query, total_score, sno)





