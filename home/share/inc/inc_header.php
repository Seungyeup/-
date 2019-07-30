<? include $_SERVER['DOCUMENT_ROOT'] . "/renew/home/share/inc/locator.php"; ?>

<div id="header_wrap">
    <!--s #header-->
    <div id="header">
        <h1 id="logo"><a href="/renew/home/main/"><img src="/renew/home/share/img/layout/head_logo.png" alt="한국학습컨설팅센터" /></a></h1>
        <!-- s : mobile-top -->
        <a href="#n" id="m_menu_open"><i class="la la-navicon"></i><span class="blind">Mobile Menu Open</span></a>
        <a href="/renew/home/08_member/login.php" id="m_menu_login"><i class="la la-sign-in"></i><span class="txt">로그인</span></a>
        <!-- 로그인 했을때 -->
        <!--<a href="#n" id="m_menu_logout"><i class="la la-sign-out"></i><span class="txt">로그아웃</span></a>-->
        <!-- e : mobile-top -->
        <!-- s : navi -->
        <div id="all-Navi">
            <div class="gnb-wrap">
                <div class="gnb">
                    <ul>
                        <li><a href="/renew/home/08_member/login.php"><i class="la la-sign-in"></i> 로그인</a></li>
                        <li><a href="/renew/home/08_member/join.php"><i class="la la-user"></i> 회원가입</a></li>
                        <!-- 로그인 했을때 -->
                        <!--<li><a href="#"><i class="la la-sign-out"></i> 로그아웃</a></li>-->
                        <li><a href="/renew/home/09_mypage/order_list.php">마이페이지</a></li>
                    </ul>
                </div>
            </div>
            <div id="navi-wrap">
                <ul id="navi">
                    <li class="nm-mn1 <? if($tm=='1'){?>active<?}?>">
                        <a href="/renew/home/01_study/01.php" class="nm-am1">학습컨설팅</a>
                        <div class="depth2-wrap">
                            <ul class="depth2">
                                <li class="title"><span class="ico"><i class="la la-cubes"></i></span><span class="txt">학습컨설팅</span></li>
                                <li class="nm-mn2 <? if($tm=='1' & $sm=='1'){?>active<?}?>"><a href="/renew/home/01_study/01.php" class="nm-am2">학습컨설팅소개</a></li>
                                <li class="nm-mn2 <? if($tm=='1' & $sm=='2'){?>active<?}?>"><a href="/renew/home/01_study/02.php" class="nm-am2">컨설팅신청</a></li>
                                <li class="nm-mn2 <? if($tm=='1' & $sm=='3'){?>active<?}?>"><a href="/renew/home/01_study/03.php" class="nm-am2">단체 캠프신청</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nm-mn1 <? if($tm=='2'){?>active<?}?>">
                        <a href="/renew/home/02_future/01.php" class="nm-am1">진로학습컨설팅</a>
                        <div class="depth2-wrap">
                            <ul class="depth2">
                                <li class="title"><span class="ico"><i class="la la-briefcase"></i></span><span class="txt">진로학습컨설팅</span></li>
                                <li class="nm-mn2 <? if($tm=='2' & $sm=='1'){?>active<?}?>"><a href="/renew/home/02_future/01.php" class="nm-am2">진로학습컨설팅 소개</a></li>
                                <li class="nm-mn2 <? if($tm=='2' & $sm=='2'){?>active<?}?>"><a href="/renew/home/02_future/02.php" class="nm-am2">진로학습컨설팅 신청</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nm-mn1 <? if($tm=='3'){?>active<?}?>">
                        <a href="/renew/home/03_test/01.php" class="nm-am1">진단검사</a>
                        <div class="depth2-wrap">
                            <ul class="depth2">
                                <li class="title"><span class="ico"><i class="la la-lightbulb-o"></i></span><span class="txt">진단검사</span></li>
                                <li class="nm-mn2 <? if($tm=='3' & $sm=='1'){?>active<?}?>"><a href="/renew/home/03_test/01.php" class="nm-am2">검사소개</a></li>
                                <li class="nm-mn2 <? if($tm=='3' & $sm=='2'){?>active<?}?>"><a href="/renew/home/03_test/02.php" class="nm-am2">검사신청</a></li>
                                <li class="nm-mn2 <? if($tm=='3' & $sm=='3'){?>active<?}?>"><a href="/renew/home/03_test/03.php" class="nm-am2">검사실시</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nm-mn1 <? if($tm=='4'){?>active<?}?>">
                        <a href="/renew/home/04_expert/01.php" class="nm-am1">전문가연수</a>
                        <div class="depth2-wrap">
                            <ul class="depth2">
                                <li class="title"><span class="ico"><i class="la la-graduation-cap"></i></span><span class="txt">전문가연수</span></li>
                                <li class="nm-mn2 <? if($tm=='4' & $sm=='1'){?>active<?}?>"><a href="/renew/home/04_expert/01.php" class="nm-am2">전문가연수 소개</a></li>
                                <li class="nm-mn2 <? if($tm=='4' & $sm=='2'){?>active<?}?>"><a href="/renew/home/04_expert/02.php" class="nm-am2">연수신청</a></li>
                                <li class="nm-mn2 <? if($tm=='4' & $sm=='3'){?>active<?}?>"><a href="/renew/home/04_expert/03.php" class="nm-am2">자격증 발급안내</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nm-mn1 <? if($tm=='5'){?>active<?}?>">
                        <a href="/renew/home/05_board/01.php" class="nm-am1">자료실</a>
                        <div class="depth2-wrap">
                            <ul class="depth2">
                                <li class="title"><span class="ico"><i class="la la-file-text"></i></span><span class="txt">자료실</span></li>
                                <li class="nm-mn2 <? if($tm=='5' & $sm=='1'){?>active<?}?>"><a href="/renew/home/05_board/01.php" class="nm-am2">교재소개</a></li>
                                <li class="nm-mn2 <? if($tm=='5' & $sm=='2'){?>active<?}?>"><a href="/renew/home/05_board/02.php" class="nm-am2">자료실</a></li>
                                <li class="nm-mn2 <? if($tm=='5' & $sm=='3'){?>active<?}?>"><a href="/renew/home/05_board/03.php" class="nm-am2">동영상자료실</a></li>
                                <li class="nm-mn2 <? if($tm=='5' & $sm=='4'){?>active<?}?>"><a href="/renew/home/05_board/04.php" class="nm-am2">연구보고서</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nm-mn1 <? if($tm=='6'){?>active<?}?>">
                        <a href="/renew/home/06_community/01.php" class="nm-am1">커뮤니티</a>
                        <div class="depth2-wrap">
                            <ul class="depth2">
                                <li class="title"><span class="ico"><i class="la la-comment"></i></span><span class="txt">커뮤니티</span></li>
                                <li class="nm-mn2 <? if($tm=='6' & $sm=='1'){?>active<?}?>"><a href="/renew/home/06_community/01.php" class="nm-am2">공지사항</a></li>
                                <li class="nm-mn2 <? if($tm=='6' & $sm=='2'){?>active<?}?>"><a href="/renew/home/06_community/02.php" class="nm-am2">정보마당</a></li>
                                <li class="nm-mn2 <? if($tm=='6' & $sm=='3'){?>active<?}?>"><a href="/renew/home/06_community/03.php" class="nm-am2">Q&A</a></li>
                                <li class="nm-mn2 <? if($tm=='6' & $sm=='4'){?>active<?}?>"><a href="/renew/home/06_community/04.php" class="nm-am2">FAQ</a></li>
                                <li class="nm-mn2"><a href="http://cafe.daum.net/KSPA" target="_blank" class="nm-am2">교사연구회</a></li>
                                <li class="nm-mn2"><a href="https://iamcoop.modoo.at/?link=43b649jz" target="_blank" class="nm-am2">교재구입</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nm-mn1 <? if($tm=='7'){?>active<?}?>">
                        <a href="/renew/home/07_center/01.php" class="nm-am1">센터소개</a>
                        <div class="depth2-wrap">
                            <ul class="depth2">
                                <li class="title"><span class="ico"><i class="la la-bank"></i></span><span class="txt">센터소개</span></li>
                                <li class="nm-mn2 <? if($tm=='7' & $sm=='1'){?>active<?}?>"><a href="/renew/home/07_center/01.php" class="nm-am2">인사말</a></li>
                                <li class="nm-mn2 <? if($tm=='7' & $sm=='2'){?>active<?}?>"><a href="/renew/home/07_center/02.php" class="nm-am2">연구진소개</a></li>
                                <li class="nm-mn2 <? if($tm=='7' & $sm=='3'){?>active<?}?>"><a href="/renew/home/07_center/03.php" class="nm-am2">센터 연혁</a></li>
                                <li class="nm-mn2 <? if($tm=='7' & $sm=='4'){?>active<?}?>"><a href="/renew/home/07_center/04.php" class="nm-am2">찾아오시는길</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
                <a href="#n" id="m_menu_close"><i class="la la-close"></i><span class="blind">Mobile Menu close</span></a>
            </div>
            <div class="navi-bg"></div>
        </div>
        <!-- e : navi -->
    </div>
    <!--e #header-->
</div>