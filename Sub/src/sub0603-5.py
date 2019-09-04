
def sub06035(answer) :
    '''
    '비결' 대신 들어갈 수 있는 단어?
    2점: 노하우, 비법, 특별한 방법, 비밀 등 (유사한 맥락의 의미인 경우)
    0점: 오답
    '''
    
    from pip._vendor.distlib import database
    text = ['노하우','비법','특별한 방법',' 비밀','비방','비전','묘방','묘책','묘법','묘계','묘방','묘안','고안','생각','']
    
    grade = 0
    for ans in text : 
        if answer == ans :
            grade = 2
            print("correct")
            return None
        else:
            print("incosrrect")
    return None
    '''
    put grade into database
    '''

sub06035('비법')