import konlpy
import torch
import torch.nn as nn
from torch.autograd import Variable
import torch.optim as optim
import torch.nn.functional as F
from konlpy.tag import Kkma    
    
kor_tagger = Kkma()

train_data = [["기계나 부품이 어떤 일을 해내는 능력","DEFINE"],
                    ["어떤 역할을 해내는 것","DEFINE"],
                    ["하는 구실이나 작용을 함","DEFINE"],
                    ["권한이나 직책, 능력 따위에 따라 일정한 분야에서 하는 역할과 작용","DEFINE"],
                    ["육체적, 정신적 작업을 정확하고 손쉽게 해 주는 기술상의 재","DEFINE"],
                    ["기량과 재능을 아울러 이르는 말','어떤 실체의 존재 목적 또는 특징적인 동작","DEFINE"],
                    ["물체의 기관, 조직, 세포의 생활 활동이나 작용. 또는 그 능력","DEFINE"],
                    ["어떤 기관이나 단체가 가지는 고유하고 특수한 역할","DEFINE"],
                    ["기계나 부품 따위가 어떤 일을 해내는 능력","DEFINE"],
                    ["기술적인 측면에서의 성능이나 재능","DEFINE"],
                    ["어떤 실체의 존재 목적 또는 특징적인 동작","DEFINE"],
                    ["계층 실체들의 동작의 일부","DEFINE"],
                  ]

test_data = [["기계나 부품이 할수 있는것","DEFINE"],
                   ["뭔가를 할 수 있는 것","DEFINE"],
                   ]


# 0. Preprocessing
train_X,train_y = list(zip(*train_data))

# 1. Tokenize
train_X = [kor_tagger.morphs(x) for x in train_X]

# 2. Build Vocab
word2index={'<unk>' : 0}
for x in train_X:
    for token in x:
        if word2index.get(token)==None:
            word2index[token]=len(word2index)
            
class2index = {'FOOD' : 0, 'MEDIA' : 1}
print(word2index)
print(class2index)

# 3. Prepare Tensor
def make_BoW(seq,word2index):
    tensor = torch.zeros(len(word2index))
    for w in seq:
        index = word2index.get(w)
        if index!=None:
            tensor[index]+=1.
        else:
            index = word2index['<unk>']
            tensor[index]+=1.
    
    return tensor
    
train_X = torch.cat([Variable(make_BoW(x,word2index)).view(1,-1) for x in train_X])
train_y = torch.cat([Variable(torch.LongTensor([class2index[y]])) for y in train_y])

# 4. Modeling
class BoWClassifier(nn.Module):
    def __init__(self,vocab_size,output_size):
        super(BoWClassifier,self).__init__()
        
        self.linear = nn.Linear(vocab_size,output_size)
    
    def forward(self,inputs):
        return self.linear(inputs)
        
# 5. Train
STEP = 100
LR = 0.1
model = BoWClassifier(len(word2index),2)
loss_function = nn.CrossEntropyLoss()
optimizer = optim.SGD(model.parameters(),lr=LR)

for step in range(STEP):
    model.zero_grad()
    preds = model(train_X)
    loss = loss_function(preds,train_y)
    if step % 10 == 0:
        print(loss.item())
    loss.backward()
    optimizer.step()
    
# 6. Test
index2class = {v:k for k,v in class2index.items()}

for test in test_data:
    X = kor_tagger.morphs(test[0])
    X = Variable(make_BoW(X,word2index)).view(1,-1)
    
    pred = model(X)
    pred = pred.max(1)[1].data[0]
    print("Input : %s" % test[0])
    print("Prediction : %s" % index2class[pred])
    print("Truth : %s" % test[1])
    print("\n")           