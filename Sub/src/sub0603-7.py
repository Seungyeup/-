'''
2점: 이처럼, 위와 같이, 그러므로 등 (이전에 제시된 내용을 정리하기 위한 접속어 인 경우)
0점: 오답
'''

def sub06037(answer):
    text = ['이처럼','위와 같이','그러므로','그래서','고로','따라서','그러모로','고래서','이래서','따라서','고래서','저래서','그런고로','그런즉']
    grade = 0
    for ans in text : 
        if answer == ans :
            grade = 2
            print("correct")
            return grade
        else:
            print("incorrect")
    return None
    '''
    put grade into database
    '''
sub06037('그런즉')