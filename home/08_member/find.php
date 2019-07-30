<? $tm=8; $sm=3; ?>

<? include $_SERVER['DOCUMENT_ROOT'] . "/renew/home/share/inc/scont_top.php"; ?>

    <div class="memBox">
        <div class="title">
            <span class="tit">아이디/비밀번호 찾기</span>
            <span class="txt">회원님의 소중한 정보 보호를 위해 <span class="enter">회원가입시 입력한 이메일 주소로 아이디 찾기를</span> <span class="enter">진행해 주시기 바랍니다.</span></span>
        </div>
        <div class="cont-tab mg30t">
            <ul class="tab50">
                <li class="active"><a href="find.php">아이디 찾기</a></li>
                <li><a href="find02.php">비밀번호 찾기</a></li>
            </ul>
        </div>
        <div class="member-form tlineNo">
            <ul>
                <li>
                    <label class="form-title">이름</label>
                    <span class="input-group">
                        <input type="text" name="" id="" placeholder="이름 입력" value="" />
                    </span>
                </li>
                <li>
                    <label class="form-title">이메일</label>
                    <span class="input-group">
                        <input type="text" name="" id="" placeholder="이메일 입력" value="" />
                    </span>
                </li>
            </ul>
            <div class="gap30"></div>
            <div class="btn_box">
                <a href="/renew/home/08_member/find_ok.php" class="btn bh_lg bw_md btn_sky">아이디 찾기</a>
            </div>
        </div>
    </div>

<? include $_SERVER['DOCUMENT_ROOT'] . "/renew/home/share/inc/scont_bottom.php"; ?>