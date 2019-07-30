<!doctype html>
<html lang="ko">
<head>
    <? include $_SERVER['DOCUMENT_ROOT'] . "/renew/admin/share/inc/headCssinc.php"; ?>
</head>

<body>
<div id="doc">

    <!-- s: .doc_pg //-->
    <div id="pg_code">

        <div class="login_wrap">
            <div class="login_box">
                <h1 class="logo">
                    <img src="/renew/admin/share/img/logo.png" alt="" />
                    <span class="txt">ADMIN LOGIN</span>
                </h1>
                <ul>
                    <li>
                        <div class="inputBox">
                            <label><span class="fe fe-user"></span> 아이디</label>
                            <input type="text" id="" name="" placeholder="아이디">
                        </div>
                    </li>
                    <li>
                        <div class="inputBox">
                            <label><span class="fe fe-lock"></span> 비밀번호</label>
                            <input type="password" id="" name="" placeholder="비밀번호">
                        </div>
                    </li>
                    <li class="chek_li">
                        <div class="checkbox checkbox_blue fl">
                            <input id="check1" type="checkbox" class="styled">
                            <label for="check1">아이디 저장</label>
                        </div>
                    </li>
                    <li><a href="/renew/admin/index.php" class="loginBtn">로그인</a></li>
                </ul>
            </div>
        </div>

    </div>
    <!-- e: .doc_pg //-->
</div>

</body>
</html>
