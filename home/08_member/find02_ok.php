<? $tm=8; $sm=3; ?>

<? include $_SERVER['DOCUMENT_ROOT'] . "/renew/home/share/inc/scont_top.php"; ?>

    <div class="memBox">
        <div class="title">
            <span class="tit">아이디/비밀번호 찾기</span>
            <span class="txt">회원님의 소중한 정보 보호를 위해 <span class="enter">회원가입시 입력한 이메일 주소로 비밀번호 찾기를</span> <span class="enter">진행해 주시기 바랍니다.</span></span>
        </div>
        <div class="cont-tab mg30t">
            <ul class="tab50">
                <li><a href="find.php">아이디 찾기</a></li>
                <li class="active"><a href="find02.php">비밀번호 찾기</a></li>
            </ul>
        </div>
        <div class="find-complete">
            임시 비밀번호를 <b>homg123@naver.com</b>으로 발송하였습니다.
            <small>임시 비밀번호로 로그인 하신 후, <br/> 반드시 마이페이지 > 회원정보에서 비밀번호를 변경해 주시기 바랍니다.</small>
        </div>
        <div class="gap30"></div>
        <div class="btn_box">
            <a href="/renew/home/08_member/login.php" class="btn bh_lg bw_md btn_sky">로그인하기</a>
        </div>
    </div>


<? include $_SERVER['DOCUMENT_ROOT'] . "/renew/home/share/inc/scont_bottom.php"; ?>