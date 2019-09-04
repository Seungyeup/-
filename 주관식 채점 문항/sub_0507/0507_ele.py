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
