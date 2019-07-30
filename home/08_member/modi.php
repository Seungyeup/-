<? $tm=7; $sm=1; ?>

<? include $_SERVER['DOCUMENT_ROOT'] . "/renew/home/share/inc/scont_top.php"; ?>

    <div class="member-form line-top">
        <ul>
            <li>
                <label class="form-title">아이디</label>
                <div class="input-group">hong1111</div>
            </li>
            <li>
                <label class="form-title">비밀번호</label>
                <div class="input-group">
                    <input type="password" name="" id="" placeholder="비밀번호를 입력하세요" value="">
                </div>
                <div class="input-group">
                    <input type="password" name="" id="" placeholder="비밀번호를 재입력하세요" value="">
                </div>
                <span class="input-stxt">8~16자의 영문, 숫자, 특수문자 중 2가지 이상 조합을 사용해주세요!</span>
            </li>
            <li>
                <label class="form-title">이름</label>
                <div class="input-group">홍길동</div>
            </li>
            <li>
                <label class="form-title">이메일</label>
                <div class="input-group">
                    <input type="text" name="" id="" placeholder="이메일주소를 입력하세요" value="">
                    <a href="#" class="btn">중복확인</a>
                </div>
                <span class="input-stxt cred">올바른 이메일 형식이 아닙니다!</span>
            </li>
        </ul>
    </div>

    <div class="gap"></div>

    <div class="btn_box">
        <a href="#" class="btn btn_gray bw_md bh_lg">취소</a>
        <a href="#" class="btn btn_sky bw_md bh_lg">수정</a>
    </div>

<? include $_SERVER['DOCUMENT_ROOT'] . "/renew/home/share/inc/scont_bottom.php"; ?>