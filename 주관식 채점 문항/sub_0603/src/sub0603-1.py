from sklearn.feature_extraction.text import TfidfVectorizer
import numpy as np
import time
import multiprocessing


def sub06031(name) :
    #조건: 길이가 1 이고 숯이면 1점.
    #조건: 길이가 1 초과이고 숯이 포함되있고 
    #조건: 부정이면? 
    for i in range(1,4096):
        mydoclist = np.array(['숯의 장점','숯의 단점.', '숯의 작용.','숯의 쓰임새','숯의 성질']) 
        mydoclist = np.append(mydoclist,'숯의 장점')
        tfidf_vectorizer = TfidfVectorizer(min_df=1)
        tfidf_matrix = tfidf_vectorizer.fit_transform(mydoclist)
        document_distances = (tfidf_matrix*tfidf_matrix.T)

    '''
    print('유사도 분석을 위한 ' + str(document_distances.get_shape()[0]) + 'x' + str(document_distances.get_shape()[1]) + ' matrix를 만들었습니다.')
    print(document_distances.toarray())
    '''
    return None
num_list = ['p1','p2','p3','p4']
        
if __name__ == '__main__':
   
    pool= multiprocessing.Pool(processes=2)
    start = time.time()
    pool.map(sub06031,num_list)
    pool.close()
    pool.join()
    print("time :", time.time() - start)
    
    
    '''
    2점: 숯의 기능, 숯의 작용, 숯의 성질, 숯의 쓰임새
    1점: 숯
    0점: 본문과 관련 x
    '''