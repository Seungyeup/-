import sub_0513
import sub_0507
import sub_0603
import sys
# 정수만 받도록하는 함수
def is_number(s):
    try:
        int(s)
        return True
    except ValueError:
        return False

if len(sys.argv) == 1:          # 옵션 없으면 출력하고 종료
    print ("숫자로 된 옵션을 입력해 주세요")
    exit(1)
elif not is_number(sys.argv[1]): # 옵션이 숫자인지 검사
    print ("에러! 정수를 입력해 주세요")
    exit(2)

idx1 = int(sys.argv[1])

sub_0507.sub0507(idx1)
print("\n")
print("---------------------다음 문제-----------------------")
sub_0513.sub0513(idx1)
print("---------------------다음 문제-----------------------")
sub_0603.sub0603(idx1)