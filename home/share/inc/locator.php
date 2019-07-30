<?
$temp1 = $tm;
$temp2 = $sm;

if($temp1 == "1"){
	if($temp2 != ''){
		$temp1_str = "<a class=\"current\">학습컨설팅</a>";
	}else{
		$temp1_str = "<a class=\"current\">학습컨설팅</a>";
	}
		if($temp2 == '1'){
			$temp2_str = "<a class=\"current\">학습컨설팅소개</a>";
		}else if($temp2 == '2'){
			$temp2_str = "<a class=\"current\">컨설팅신청</a>";
		}else if($temp2 == '3'){
			$temp2_str = "<a class=\"current\">단체 캠프신청</a>";
		}
}

if($temp1 == "2"){
	if($temp2 != ''){
		$temp1_str = "<a class=\"current\">진로학습컨설팅</a>";
	}else{
		$temp1_str = "<a class=\"current\">진로학습컨설팅</a>";
	}
		if($temp2 == '1'){
			$temp2_str = "<a class=\"current\">진로학습컨설팅 소개</a>";
		}else if($temp2 == '2'){
			$temp2_str = "<a class=\"current\">진로학습컨설팅 신청</a>";
		}
}

if($temp1 == "3"){
	if($temp2 != ''){
		$temp1_str = "<a class=\"current\">진단검사</a>";
	}else{
		$temp1_str = "<a class=\"current\">진단검사</a>";
	}
		if($temp2 == '1'){
			$temp2_str = "<a class=\"current\">검사소개</a>";
		}else if($temp2 == '2'){
			$temp2_str = "<a class=\"current\">검사신청</a>";
		}else if($temp2 == '3'){
			$temp2_str = "<a class=\"current\">검사실시</a>";
		}
}

if($temp1 == "4"){
	if($temp2 != ''){
		$temp1_str = "<a class=\"current\">전문가연수</a>";
	}else{
		$temp1_str = "<a class=\"current\">전문가연수</a>";
	}
		if($temp2 == '1'){
			$temp2_str = "<a class=\"current\">전문가연수 소개</a>";
		}else if($temp2 == '2'){
			$temp2_str = "<a class=\"current\">연수신청</a>";
		}else if($temp2 == '3'){
			$temp2_str = "<a class=\"current\">자격증 발급안내</a>";
		}
}


 if($temp1 == "5"){
	if($temp2 != ''){
		$temp1_str = "<a class=\"current\">자료실</a>";
	}else{
		$temp1_str = "<a class=\"current\">자료실</a>";
	}
		 if($temp2 == '1'){
			 $temp2_str = "<a class=\"current\">교재소개</a>";
		 }else if($temp2 == '2'){
			 $temp2_str = "<a class=\"current\">자료실</a>";
		 }else if($temp2 == '3'){
			 $temp2_str = "<a class=\"current\">동영상자료실</a>";
		 }else if($temp2 == '4'){
			 $temp2_str = "<a class=\"current\">연구보고서</a>";
		 }
}

 if($temp1 == "6"){
	if($temp2 != ''){
		$temp1_str = "<a class=\"current\">커뮤니티</a>";
	}else{
		$temp1_str = "<a class=\"current\">커뮤니티</a>";
	}
		 if($temp2 == '1'){
			 $temp2_str = "<a class=\"current\">공지사항</a>";
		 }else if($temp2 == '2'){
			 $temp2_str = "<a class=\"current\">정보마당</a>";
		 }else if($temp2 == '3'){
			 $temp2_str = "<a class=\"current\">Q&A</a>";
		 }else if($temp2 == '4'){
			 $temp2_str = "<a class=\"current\">FAQ</a>";
		 }else if($temp2 == '5'){
			 $temp2_str = "<a class=\"current\">교사연구회</a>";
		 }else if($temp2 == '6'){
			 $temp2_str = "<a class=\"current\">교재구입</a>";
		 }
 }

 if($temp1 == "7"){
	if($temp2 != ''){
		$temp1_str = "<a class=\"current\">센터소개</a>";
	}else{
		$temp1_str = "<a class=\"current\">센터소개</a>";
	}
		 if($temp2 == '1'){
			 $temp2_str = "<a class=\"current\">인사말</a>";
		 }else if($temp2 == '2'){
			 $temp2_str = "<a class=\"current\">연구진소개</a>";
		 }else if($temp2 == '3'){
			 $temp2_str = "<a class=\"current\">센터 연혁</a>";
		 }else if($temp2 == '4'){
			 $temp2_str = "<a class=\"current\">찾아오시는길</a>";
		 }
}

if($temp1 == "8"){
	if($temp2 != ''){
		$temp1_str = "<a class=\"current\">회원서비스</a>";
	}else{
		$temp1_str = "<a class=\"current\">회원서비스</a>";
	}
	if($temp2 == '1'){
		$temp2_str = "<a class=\"current\">로그인</a>";
	}else if($temp2 == '2'){
		$temp2_str = "<a class=\"current\">회원가입</a>";
	}else if($temp2 == '3'){
		$temp2_str = "<a class=\"current\">아이디/비번찾기</a>";
	}else if($temp2 == '4'){
		$temp2_str = "<a class=\"current\">개인정보처리방침</a>";
	}else if($temp2 == '5'){
		$temp2_str = "<a class=\"current\">이메일무단수집거부</a>";
	}
}

if($temp1 == "9"){
	if($temp2 != ''){
		$temp1_str = "<a class=\"current\">마이페이지</a>";
	}else{
		$temp1_str = "<a class=\"current\">마이페이지</a>";
	}
	if($temp2 == '1'){
		$temp2_str = "<a class=\"current\">장바구니</a>";
	}else if($temp2 == '2'){
		$temp2_str = "<a class=\"current\">구매하기</a>";
	}else if($temp2 == '3'){
		$temp2_str = "<a class=\"current\">구매내역</a>";
	}else if($temp2 == '4'){
		$temp2_str = "<a class=\"current\">검사코드</a>";
	}else if($temp2 == '5'){
		$temp2_str = "<a class=\"current\">검사하기</a>";
	}else if($temp2 == '6'){
		$temp2_str = "<a class=\"current\">결과보기</a>";
	}else if($temp2 == '7'){
		$temp2_str = "<a class=\"current\">신청내역</a>";
	}else if($temp2 == '8'){
		$temp2_str = "<a class=\"current\">회원정보 수정</a>";
	}else if($temp2 == '9'){
		$temp2_str = "<a class=\"current\">회원탈퇴</a>";
	}
}

?>
