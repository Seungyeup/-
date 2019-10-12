#  

# &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; < 2019 전반기 정보컴퓨터공학 전공 졸업과제 > 

![alt tag](https://raw.githubusercontent.com/Seungyeup/graduation-project/master/home/share/img/sub/포스터.jpg)

## Motivation
&nbsp;&nbsp; 학습컨설팅에 있어 학생들의 독해, 작문능력은 핵심적인 요소이다. 그러나 학생들 개개인의 주관식 답안들을 일일이 교사들의 인력을 동원해 채점해야 한다는 점에서 현실적인 어려움에 부딪히게 된다. 따라서 본 졸업과제는 위의 문제점을 해결하고자, 머신러닝을 이용한 주관식 채점 시스템이 포함된 학습컨설팅 시스템 개발을 목표로 한다. 이는 시간과 비용을 절약하고, 학생들의 대략적인 학습능력을 빠르게 검진하는데 큰 도움이 될 것이다.<br><br>
본 졸업과제인 학습컨설팅시스템의 검사문항들 중 주관식 채점문항은 총 4개이며, 문항의 내용은 <br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1) 지문의 핵심내용 파악하기, 2) 핵심내용 요약하기, 3) 작문하기, 4) 구체도 파악하기 이다.<br><br>
각 문항의 채점자동화를 위해 사용할 기술은 1)머신러닝의 자연어처리(NLP)중 konlpy와 같은 파이썬 한글 라이브러리를 활용한 형태소 품사태깅, 2)NLTK를 활용한 불용어제거 및 형태소 수집, 3)Sentiment-Analysis(감성 분석)을 활용하여 텍스트에 대한 객관적인 정보 추출이다.

## Institution Requirement
- 장문의 문장들을 NLTK나 Konlpy 를 통하여 형태소 별로 분류하고 이를 품사 Tagging 할 수 있어야 한다. 그리고 한국어 형태소 분류를 할 때 이에 맞는 tag Package를 사용해야 한다. (한나눔, 꼬꼬마, 코모란, 메캅, 트위터 등등) 문장 구성에 최소한의 의미를 부여하는 단어나 필요 이상으로 쓰이는 불용어는 NLTK를 사용해 필터링 해야 한다.<br>

 - 사용자가 답 입력시 이를 리눅스에 있는 batch파일을 통해 자동으로 비교하고 서버 데이터베이스(Heidi SQL)에 저장해야 한다.<br>
 - 여러 번의 실험과 데이터 수집을 통해 정확도를 최대한 끌어올리고 최소한의 오차를 지향해야 한다. 학습 진단 검사의 답안 채점 기준을 참고하여 정답을 채점 할 수 있도록 한다.


## NLP Algorithms that we used
1. &nbsp;&nbsp;&nbsp;Bag of Words지문과 답안문장이 짧은 경우(딥러닝이 힘들 경우)
2. &nbsp;&nbsp;&nbsp;CBOW근처 단어를 통해 중심 단어 예측 문제 적용
3. &nbsp;&nbsp;&nbsp;Skip-gram중심 단어를 통해 근처 단어 예측 문제 적용
4. &nbsp;&nbsp;&nbsp;Kor2Vec한국어에 맞는 Word2Vec의 변형된 형태
5. &nbsp;&nbsp;&nbsp;RNNSimple-RNN으로 문장 구체도 판단여부에 적용
6. &nbsp;&nbsp;&nbsp;LSTM구체도 판단 여부에 관한 문제의 보충을 위해 사용

## Tech/framework used
  - OS : Windows10, Linux(Ubuntu-server)
  - PL : Python3, JavaScript, PHP, Ajax
  - DB : MySQL(Database) , Apmsetup(Test Database), HeidiSQL
  - WEB : cafe24(Web Services)
  - Module : Konlpy(Okt), Tensorflow Keras, Nltk, sklearn, Json
  
<b>Built with</b>
- [Python3.6 (anaconda 5.2)](https://www.anaconda.com/)
- [PyCharm](https://www.jetbrains.com/pycharm/)
- [tensorflow](https://www.tensorflow.org/)
- [konlpy](https://konlpy-ko.readthedocs.io/ko/v0.4.3/)
- [soynlp](https://github.com/lovit/soynlp)

## Development direction?
- 주관채점 시스템의 문제는 개발자가 질문을 본 후 그 유형에 따라 자체 알고리즘을 적용해야 한다는 수동적인 한계가 있다. 그러므로, 지문에 따라 주어진 질문을 자동 분류 한 후 이에 맞는 알고리즘을  자동 적용 하는 것이 효율적이다. 또한, 이는 질의응답 시스템의 기본적인 원리이기 때문에 현 프로젝트에서 쓰이는 알고리즘과 융합하여 향상된 채점 시스템을 개발 할 수 있을 것이다.<br><br>
- 돌발변수에 대응 할 수 있도록 예외사항이나 일상생활에서 벗어난 단어들을 처리하도록 프로그램을 향상해야 할 것이다. 예를 들어, “여유 시간 때 무엇을 하는가?”에 “저는 텐서플로우를 이용한 채점 시스템을 개발하고 있습니다.”라는 답을 줄 경우 “텐서플로우”라는 단어를 처음 접할 경우 의도와 다르게 채점 할 수 있기 때문에 이를 처리 할 수 있도록 수정해야 할 것이다.<br><br>
- 검사지 자체를 다각화 하여 다양한 유형의 사용자를 좀 더 객관적으로 통계화 할 수 있도록 할 것이다. 초등학교, 중학교 등 다양한 학년 별로 학습 진단 검사를 받을 수 있게 했지만 학습자의 성향에 따라 검사지가 달라지지 않으므로 추후에 검사지의 유형을 좀 더 다양화 할 필요가 있다.	

## License
소프트웨어 저작권 등록시, 관련 파일 업로드 예정

 © [이승엽](https://github.com/Seungyeup), [문혁준](https://github.com/mhj6972), [이찬영](https://github.com/cammm988)
