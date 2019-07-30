<? $tm=8; $sm=2; ?>

<? include $_SERVER['DOCUMENT_ROOT'] . "/renew/home/share/inc/scont_top.php"; ?>

    <div class="memBox">
        <div class="title">
            <span class="tit">한국학습컨설팅센터 회원가입</span>
            <span class="txt">안녕하세요! 한국학습컨설팅센터입니다.</span>
        </div>
        <div class="join-step">
            <ul>
                <li>
                    <span class="num">01</span>
                    <span class="txt">약관동의</span>
                </li>
                <li class="on">
                    <span class="num">02</span>
                    <span class="txt">정보입력</span>
                </li>
                <li>
                    <span class="num">03</span>
                    <span class="txt">가입완료</span>
                </li>
            </ul>
        </div>
        <div class="member-form join">
            <ul>
                <li>
                    <label class="form-title">이메일</label>
                    <div class="input-group addbtn">
                        <input type="text" name="" id="" placeholder="이메일주소를 입력하세요" value="" />
                        <a href="#" class="btn">중복확인</a>
                    </div>
                    <span class="input-stxt">정확한 이메일주소를 입력해주세요.</span>
                </li>
                <li>
                    <label class="form-title">비밀번호</label>
                    <div class="input-group">
                        <input type="password" name="" id="" placeholder="비밀번호를 입력하세요" value="" />
                    </div>
                    <div class="input-group">
                        <input type="password" name="" id="" placeholder="비밀번호를 재입력하세요" value="" />
                    </div>
                    <span class="input-stxt">8~16자의 영문, 숫자, 특수문자 중 2가지 이상 조합을 사용해주세요!</span>
                </li>
            </ul>
        </div>
        <div class="gap30"></div>
        <div class="btn_box">
            <a href="/renew/home/08_member/join02.php" class="btn bh_lg bw_md btn_gray">취소</a>
            <a href="/renew/home/08_member/join03.php" class="btn bh_lg bw_md btn_sky">회원가입</a>
        </div>
    </div>

<? include $_SERVER['DOCUMENT_ROOT'] . "/renew/home/share/inc/scont_bottom.php"; ?>