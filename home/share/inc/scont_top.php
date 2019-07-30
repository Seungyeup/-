<? include $_SERVER['DOCUMENT_ROOT'] . "/renew/home/share/inc/head.php"; ?>

<!-- 서브비주얼 -->
<div class="svis_wrap">
    <div class="svis_imgWrap">
        <div class="svis_title"><?=$temp1_str?></div>
        <div class="svis_img"></div>
    </div>
</div>
<!-- //서브비주얼 -->

<!-- 서브메뉴 -->
<div class="snb_wrap">
    <div class="snb_pageTit">
        <span class="over"><?=$temp2_str?></span>
        <span class="out"><?=$temp2_str?></span>
    </div>
    <div id="snb">
        <? if($tm=="1") { ?>
        <ul class="wd_3">
            <li class="<? if($sm=='1'){?>active<?}?>"><a href="01.php">학습컨설팅소개</a></li>
            <li class="<? if($sm=='2'){?>active<?}?>"><a href="02.php">컨설팅신청</a></li>
            <li class="<? if($sm=='3'){?>active<?}?>"><a href="03.php">단체 캠프신청</a></li>
        </ul>
        <? } ?>
        <? if($tm=="2") { ?>
            <ul class="wd_2">
                <li class="<? if($sm=='1'){?>active<?}?>"><a href="01.php">진로학습컨설팅 소개</a></li>
                <li class="<? if($sm=='2'){?>active<?}?>"><a href="02.php">진로학습컨설팅 신청</a></li>
            </ul>
        <? } ?>
        <? if($tm=="3") { ?>
            <ul class="wd_3">
                <li class="<? if($sm=='1'){?>active<?}?>"><a href="01.php">검사소개</a></li>
                <li class="<? if($sm=='2'){?>active<?}?>"><a href="02.php">검사신청</a></li>
                <li class="<? if($sm=='3'){?>active<?}?>"><a href="03.php">검사실시</a></li>
            </ul>
        <? } ?>
        <? if($tm=="4") { ?>
            <ul class="wd_3">
                <li class="<? if($sm=='1'){?>active<?}?>"><a href="01.php">전문가연수 소개</a></li>
                <li class="<? if($sm=='2'){?>active<?}?>"><a href="02.php">연수신청</a></li>
                <li class="<? if($sm=='4'){?>active<?}?>"><a href="03.php">자격증 발급안내</a></li>
            </ul>
        <? } ?>
        <? if($tm=="5") { ?>
            <ul class="wd_4">
                <li class="<? if($sm=='1'){?>active<?}?>"><a href="01.php">교재소개</a></li>
                <li class="<? if($sm=='2'){?>active<?}?>"><a href="02.php">자료실</a></li>
                <li class="<? if($sm=='3'){?>active<?}?>"><a href="03.php">동영상자료실</a></li>
                <li class="<? if($sm=='4'){?>active<?}?>"><a href="04.php">연구보고서</a></li>
            </ul>
        <? } ?>
        <? if($tm=="6") { ?>
            <ul class="wd_6">
                <li class="<? if($sm=='1'){?>active<?}?>"><a href="01.php">공지사항</a></li>
                <li class="<? if($sm=='2'){?>active<?}?>"><a href="02.php">정보마당</a></li>
                <li class="<? if($sm=='3'){?>active<?}?>"><a href="03.php">Q&A</a></li>
                <li class="<? if($sm=='4'){?>active<?}?>"><a href="04.php">FAQ</a></li>
                <li><a href="http://cafe.daum.net/KSPA" target="_blank">교사연구회</a></li>
                <li><a href="https://iamcoop.modoo.at/?link=43b649jz" target="_blank">교재구입</a></li>
            </ul>
        <? } ?>
        <? if($tm=="7") { ?>
            <ul class="wd_4">
                <li class="<? if($sm=='1'){?>active<?}?>"><a href="01.php">인사말</a></li>
                <li class="<? if($sm=='2'){?>active<?}?>"><a href="02.php">연구진소개</a></li>
                <li class="<? if($sm=='3'){?>active<?}?>"><a href="03.php">센터 연혁</a></li>
                <li class="<? if($sm=='4'){?>active<?}?>"><a href="04.php">찾아오시는길</a></li>
            </ul>
        <? } ?>
        <? if($tm=="8") { ?>
            <ul class="wd_5">
                <li class="<? if($sm=='1'){?>active<?}?>"><a href="login.php">로그인</a></li>
                <li class="<? if($sm=='2'){?>active<?}?>"><a href="join.php">회원가입</a></li>
                <li class="<? if($sm=='3'){?>active<?}?>"><a href="find.php">아디디/비번찾기</a></li>
                <li class="<? if($sm=='4'){?>active<?}?>"><a href="privacy.php">개인정보처리방침</a></li>
                <li class="<? if($sm=='5'){?>active<?}?>"><a href="email.php">이메일무단수집거부</a></li>
            </ul>
        <? } ?>
        <? if($tm=="9") { ?>
            <ul class="wd_6">
                <li class="<? if($sm=='1'){?>active<?}?>"><a href="cart.php">장바구니</a>
                <li class="<? if($sm=='2'){?>active<?}?>"><a href="order.php">구매하기</a></li>
                <li class="<? if($sm=='3'){?>active<?}?> <? if($sm=='4'){?>active<?}?> <? if($sm=='5'){?>active<?}?> <? if($sm=='6'){?>active<?}?>"><a href="order_list.php">구매내역</a></li>
                <li class="<? if($sm=='7'){?>active<?}?>"><a href="application.php">신청내역</a></li>
                <li class="<? if($sm=='8'){?>active<?}?>"><a href="modi.php">회원정보수정</a></li>
                <li class="<? if($sm=='9'){?>active<?}?>"><a href="withdraw.php">회원탈퇴</a></li>
            </ul>
        <? } ?>
    </div>
</div>
<!-- //서브메뉴 -->

<!-- 컨텐츠-->
<div id="contents">
    <!-- 타이틀영역 -->
    <div class="cont_title">
        <h2><?=$temp2_str?></h2>
        <div class="page_nav">
            <ul>
                <li><i class="la la-home"></i><span class="blind">홈</span></li>
                <li><?=$temp1_str?></li>
                <li><?=$temp2_str?></li>
            </ul>
        </div>
    </div>
    <!-- //타이틀영역 -->

    <div class="is_cont">