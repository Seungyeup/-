<!doctype html>
<html lang="ko">
<head>
    <? include $_SERVER['DOCUMENT_ROOT'] . "/renew/admin/share/inc/headCssinc.php"; ?>
</head>

<body>
<div id="doc">

    <!-- s: .doc_pg //-->
    <div id="pg_code">

        <!-- s: .header_wrap //-->
        <? include $_SERVER['DOCUMENT_ROOT'] . "/renew/admin/share/inc/headerInc.php"; ?>
        <!-- e: .header_wrap //-->

        <!-- s: #container_wrap //-->
        <div id="container_wrap">

            <!-- s: .side_wrap //-->
            <? include $_SERVER['DOCUMENT_ROOT'] . "/renew/admin/share/inc/side.php"; ?>
            <!-- e: .side_wrap //-->

            <!-- s: .contents_wrap //-->
            <div id="contents_wrap">

                <!-- s: contents_title //-->
                <div class="contents_title">
                    <h3>컨텐츠 타이틀</h3>
                    <ul class="pageNav">
                        <li><i class="fe fe-home"></i> 홈</li>
                        <li>페이지 네비</li>
                        <li>페이지 네비</li>
                    </ul>
                </div>
                <!-- e: contents_title //-->

                <!-- s: 본문 //-->
                <div id="contents">

                    /*---------------------------------------------------------------- 타이틀 스타일 ----------------------------------------------------------------*/<br/><br/>

                    <h4 class="ad_tit01">컨텐츠 타이틀</h4>
                    <h5 class="ad_tit02">컨텐츠 타이틀2</h5>
                    <span class="ad_tit03">컨텐츠 타이틀3</span>

                    <div class="ssgap"></div>

                    텍스트 컬러 클래스
                    <ul>
                        <li class="cred">cred</li>
                        <li class="cgray">cgray</li>
                        <li class="cblue">cblue</li>
                        <li class="cgreen">cgreen</li>
                        <li class="csblue">csblue</li>
                        <li class="cyellow">cyellow</li>
                        <li class="cpurple">cpurple</li>
                    </ul>
                    

                    <div class="gap"></div>
                    /*---------------------------------------------------------------- 설명박스 스타일 ----------------------------------------------------------------*/<br/><br/>


                    <div class="infoBox">infoBox 디폴트 상태</div>
                    <div class="infoBox line_red">infoBox line_red</div>
                    <div class="infoBox line_blue">infoBox line_blue</div>
                    <div class="infoBox line_sky">infoBox line_sky</div>
                    <div class="infoBox line_yellow">infoBox line_yellow</div>
                    <div class="infoBox line_gray">infoBox line_gray</div>


                    <div class="gap"></div>

                    /*---------------------------------------------------------------- 탭 스타일 ----------------------------------------------------------------*/<br/><br/>

                    <div class="infoBox line_red">
                        <span class="fe fe-alert-octagon"></span> 탭메뉴 사용시 li갯수가 늘어나면 ul에 클래스를 w50(2개), w33(3개), w25(4개) ... 로 바꿔서 사용하세요
                    </div>

                    <div class="ssgap"></div>

                    <div class="ad_tab01">
                        <ul class="tw20">
                            <li class="active"><a href="#">탭메뉴 스타일1</a></li>
                            <li><a href="#">탭메뉴 스타일1</a></li>
                            <li><a href="#">탭메뉴 스타일1</a></li>
                            <li><a href="#">탭메뉴 스타일1</a></li>
                            <li><a href="#">탭메뉴 스타일1</a></li>
                        </ul>
                    </div>

                    <div class="gap"></div>

                    <div class="ad_tab02">
                        <ul class="tw14">
                            <li><a href="#">탭메뉴 스타일2</a></li>
                            <li class="active"><a href="#">탭메뉴 스타일2</a></li>
                            <li><a href="#">탭메뉴 스타일2</a></li>
                            <li><a href="#">탭메뉴 스타일2</a></li>
                            <li><a href="#">탭메뉴 스타일2</a></li>
                            <li><a href="#">탭메뉴 스타일2</a></li>
                            <li><a href="#">탭메뉴 스타일2</a></li>
                        </ul>
                    </div>

                    <div class="gap"></div>

                    /*---------------------------------------------------------------- 체크박스&라디오 스타일 ----------------------------------------------------------------*/<br/><br/>

                    <ul>
                        <li class="fl mg50r">
                            <div class="checkbox">
                                <input id="check1" type="checkbox">
                                <label for="check1">체크박스 디폴트</label>
                            </div>
                            <div class="checkbox checkbox_blue">
                                <input id="check2" type="checkbox" checked>
                                <label for="check2">checkbox_blue</label>
                            </div>
                        </li>
                        <li class="fl">
                            <div class="radio">
                                <input id="radio1" type="radio">
                                <label for="radio1">라디오 디폴트</label>
                            </div>
                            <div class="radio radio_blue">
                                <input id="radio2" type="radio" checked>
                                <label for="radio2">radio_blue</label>
                            </div>
                        </li>
                    </ul>

                    <div class="sgap"></div>

                    <p>No label</p>

                    <div class="radio radio_single">
                        <input id="radio6" type="radio" checked>
                        <label for="radio6">radio_single</label>
                    </div>
                    <div class="checkbox checkbox_single">
                        <input id="check4" type="checkbox" checked>
                        <label for="check4">radio_single</label>
                    </div>

                    <div class="sgap"></div>

                    <p>Inline checkboxe & radio</p>

                    <div class="radio radio_inline">
                        <input id="radio6" type="radio" checked>
                        <label for="radio6">radio_green radio_inline</label>
                    </div>
                    <div class="checkbox checkbox_inline">
                        <input id="check3" type="checkbox" checked>
                        <label for="check3">checkbox_sky checkbox_inline</label>
                    </div>

                    <div class="gap"></div>

                    /*---------------------------------------------------------------- 타입 스타일 ----------------------------------------------------------------*/<br/><br/>
                    <div>
                        <span class="txt_type type_blue">type_blue</span>
                        <span class="txt_type type_sky">type_sky</span>
                        <span class="txt_type type_yellow">type_yellow</span>
                        <span class="txt_type type_red">type_red</span>
                        <span class="txt_type type_green">type_green</span>
                    </div>

                    <div class="gap"></div>

                    /*---------------------------------------------------------------- 프로그레스 스타일 ----------------------------------------------------------------*/<br/><br/>

                    <div class="progress">
                        <div class="progress_bar" style="width : 50%">50%</div>
                    </div>

                    <div class="gap"></div>

                    /*---------------------------------------------------------------- 버튼 스타일 ----------------------------------------------------------------*/<br/><br/>
                    <div class="infoBox line_red">
                        <span class="fe fe-alert-octagon"></span> 버튼은 클래스 적용하시면 a태그, button, input 상관없이 적용니다.
                    </div>

                    <div class="ssgap"></div>
                    * bg 컬러버튼<br/><br/>
                    <a href="#" class="btn btn_blue">btn_blue</a>
                    <button class="btn btn_gray">btn_gray</button>
                    <input type="button" class="btn btn_green" value="btn_green">
                    <a href="#" class="btn btn_red">btn_red</a>
                    <a href="#" class="btn btn_yellow">btn_yellow</a>
                    <a href="#" class="btn btn_sky">btn_sky</a>
                    <a href="#" class="btn btn_dark">btn_dark</a>

                    <div class="sgap"></div>
                    * 라인 버튼<br/><br/>
                    <a href="#" class="btn btn_outline_blue">btn_outline_blue</a>
                    <button href="#" class="btn btn_outline_gray">btn_outline_gray</button>
                    <input type="button" class="btn btn_outline_green" value="btn_outline_green">
                    <a href="#" class="btn btn_outline_red">btn_outline_red</a>
                    <a href="#" class="btn btn_outline_yellow">btn_outline_yellow</a>
                    <a href="#" class="btn btn_outline_sky">btn_outline_sky</a>
                    <a href="#" class="btn btn_outline_dark">btn_outline_dark</a>

                    <div class="sgap"></div>
                    * 버튼 가로크기 <span class="cred">.bw_xs, .bw_sm, .bw_md, .bw_lg.</span> <br/><br/>
                    <a href="#" class="btn bw_xxs">bw_xxs</a>
                    <a href="#" class="btn bw_xs">bw_xs</a>
                    <a href="#" class="btn bw_sm">bw_sm</a>
                    <a href="#" class="btn bw_md">bw_md</a>
                    <a href="#" class="btn bw_lg">bw_lg</a>

                    <div class="sgap"></div>
                    * 버튼 세로크기 <span class="cred">.bh_sm, .bh_lg.</span> <br/><br/>
                    <a href="#" class="btn btn_sky bh_sm">bh_sm</a>
                    <a href="#" class="btn btn_blue">디폴트사이즈</a>
                    <a href="#" class="btn btn_red bh_lg">bh_lg</a>


                    <div class="sgap"></div>
                    * 버튼정렬 <span class="cred">.btn_box</span><br/><br/>

                    <div class="btn_box">
                        <a href="#" class="btn btn_dark">가운데 정렬은 btn_box 디폴트입니다</a>
                    </div>

                    <div class="btn_box left">
                        <a href="#" class="btn btn_dark">왼쪽 정렬은 btn_box left</a>
                    </div>

                    <div class="btn_box right">
                        <a href="#" class="btn btn_dark">오른쪽 정렬은 btn_box right</a>
                    </div>

                    <div class="gap"></div>

                    /*---------------------------------------------------------------- 테이블 스타일 ----------------------------------------------------------------*/<br/><br/>

                    <div class="infoBox line_red">
                        <span class="fe fe-alert-octagon"></span> 테이블 텍스트 가운데 정령 .c,  레프트 정렬 .l, 라이트 .r
                    </div>

                    <div class="ssgap"></div>

                    <div class="table_st1">
                        <table>
                            <thead>
                            <tr>
                                <th>test</th>
                                <th>test</th>
                                <th>test</th>
                                <th>test</th>
                                <th>test</th>
                                <th>test</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th>test</th>
                                <td>test</td>
                                <td>test</td>
                                <td>test</td>
                                <td>test</td>
                                <td>test</td>
                            </tr>
                            <tr>
                                <th>test</th>
                                <td>test</td>
                                <td>test</td>
                                <td>test</td>
                                <td>test</td>
                                <td>test</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="ssgap"></div>

                    <div class="table_st2">
                        <table>
                            <thead>
                            <tr>
                                <th>test</th>
                                <th>test</th>
                                <th>test</th>
                                <th>test</th>
                                <th>test</th>
                                <th>test</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>test</td>
                                <td>test</td>
                                <td>test</td>
                                <td>test</td>
                                <td>test</td>
                                <td>test</td>
                            </tr>
                            <tr>
                                <td>test</td>
                                <td>test</td>
                                <td>test</td>
                                <td>test</td>
                                <td>test</td>
                                <td>test</td>
                            </tr>
                            <tr>
                                <td>test</td>
                                <td>test</td>
                                <td>test</td>
                                <td>test</td>
                                <td>test</td>
                                <td>test</td>
                            </tr>
                            <tr>
                                <td>test</td>
                                <td>test</td>
                                <td>test</td>
                                <td>test</td>
                                <td>test</td>
                                <td>test</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="gap"></div>

                    /*---------------------------------------------------------------- 게시판 스타일 ----------------------------------------------------------------*/<br/><br/>

                    <div class="cont_search_wrap">
                        <dl>
                            <dt>검색 타이틀</dt>
                            <dd>
                                <div class="form_group">
                                    <select id="date_type" name="date_type" title="조건을 선택하세요">
                                        <option value="ml_date">거래일자</option>
                                    </select>
                                    <select id="date_type" name="date_type" title="조건을 선택하세요">
                                        <option value="ml_date">거래일자</option>
                                    </select>
                                </div>
                                <div class="form_group">
                                    <input type="text" id="" name="" value="" class="search_input">
                                    <a href="#" class="btn btn_dark search"><span class="fe fe-search"></span> 검색하기</a>
                                </div>
                            </dd>
                        </dl>
                        <dl>
                            <dt>검색 타이틀</dt>
                            <dd>
                                <div class="form_group">
                                    <select id="date_type" name="date_type" title="조건을 선택하세요">
                                        <option value="ml_date">거래일자</option>
                                    </select>
                                    <select id="date_type" name="date_type" title="조건을 선택하세요">
                                        <option value="ml_date">거래일자</option>
                                    </select>
                                </div>
                                <div class="form_group">
                                    <input type="text" id="" name="" value="" class="search_input">
                                    <a href="#" class="btn btn_dark search"><span class="fe fe-search"></span> 검색하기</a>
                                </div>
                            </dd>
                        </dl>
                        <dl>
                            <dt>검색 타이틀</dt>
                            <dd>
                                <div class="radio radio_inline">
                                    <input id="radio6" type="radio" checked="">
                                    <label for="radio6">radio_green radio_inline</label>
                                </div>
                                <div class="radio radio_inline">
                                    <input id="radio6" type="radio" checked="">
                                    <label for="radio6">radio_green radio_inline</label>
                                </div>
                            </dd>
                        </dl>
                    </div>

                    <div class="listTbl_top">
                        <div class="total fl"><span class="fe fe-layers"></span> 총 <span class="num">1,500</span>건의 내역이 있습니다</div>
                        <div class="align fr">
                            <select>
                                <option>선택하세요</option>
                            </select>
                            <select>
                                <option>선택하세요</option>
                            </select>
                            <a href="#" class="btn"><span class="fe fe-download"></span> 엑셀다운로드</a>
                            <a href="#" class="btn"><span class="fe fe-download"></span> 다운로드</a>
                        </div>
                    </div>

                    <div class="listTbl_top">
                        <div class="ad_tit02 inline fl">리스트 타이틀</div>
                        <div class="total fr"><span class="fe fe-layers"></span> 총 <span class="num">1,500</span>건의 내역이 있습니다</div>
                    </div>

                    <div class="listTbl">
                        <table>
                            <caption>
                                <span class="blind">리스트입니다</span>
                            </caption>
                            <colgroup>
                                <col width="7%">
                                <col width="*">
                                <col width="15%">
                                <col width="15%">
                                <col width="15%">
                            </colgroup>
                            <thead>
                            <tr>
                                <th>No.</th>
                                <th>제목</th>
                                <th>항목1</th>
                                <th>항목2</th>
                                <th>버튼</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>4</td>
                                <td class="l"><a href="#">제목영역</a></td>
                                <td>test</td>
                                <td>test</td>
                                <td>
                                    <a href="#" class="btn btn_gray bw_xs bh_sm">상세보기</a>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td class="l"><a href="#">제목영역</a></td>
                                <td>test</td>
                                <td>test</td>
                                <td>
                                    <a href="#" class="btn btn_gray bw_xs bh_sm">상세보기</a>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td class="l"><a href="#">제목영역</a></td>
                                <td>test</td>
                                <td>test</td>
                                <td>
                                    <a href="#" class="btn btn_gray bw_xs bh_sm">상세보기</a>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td class="l"><a href="#">제목영역</a></td>
                                <td>test</td>
                                <td>test</td>
                                <td>
                                    <a href="#" class="btn btn_gray bw_xs bh_sm">상세보기</a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                    <ul class="pagination">
                        <li><a href="#" class="first">첫페이지로</a></li>
                        <li><a href="#" class="prev">이전 페이지로</a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#" class="active">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#" class="next">다음페이지로</a></li>
                        <li><a href="#" class="last">첫페이지로</a></li>
                    </ul>



                    <div class="gap"></div>

                    <div class="writeTbl">
                        <table>
                            <caption>
                                <span class="blind">문제등록 폼</span>
                            </caption>
                            <colgroup>
                                <col width="15%">
                                <col width="*">
                            </colgroup>
                            <tbody>
                                <tr>
                                    <th>항목1</th>
                                    <td><input type="text" id="" name="" value="" /></td>
                                </tr>
                                <tr>
                                    <th>항목2</th>
                                    <td>
                                        <div class="checkbox checkbox_blue checkbox_inline">
                                            <input id="check233" type="checkbox" >
                                            <label for="check233">선택1</label>
                                        </div>
                                        <div class="checkbox checkbox_blue checkbox_inline">
                                            <input id="check222" type="checkbox">
                                            <label for="check222">선택2</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th>항목2</th>
                                    <td><input type="text" id="st_date" name="st_date" value=""></td>
                                </tr>
                                <tr>
                                    <th>항목2</th>
                                    <td> <input type="text" id="st_date" name="st_date" value=""></td>
                                </tr>
                                <tr>
                                    <th>항목4</th>
                                    <td><textarea>입력하세요</textarea></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="sgap"></div>

                    <div class="btn_box">
                        <a href="#" class="btn btn_gray bh_lg bw_md">취소</a>
                        <a href="#" class="btn btn_blue bh_lg bw_md">등록</a>
                    </div>

                    <div class="gap"></div>
                    <div class="gap"></div>

                    <div class="cont_search_wrap">
                        <div class="total fl"><span class="fe fe-layers"></span> 총 <span class="num">1,500</span>건의 내역이 있습니다</div>
                        <div class="form_group fr">
                            <select id="date_type" name="date_type" title="조건을 선택하세요">
                                <option value="ml_date">검색</option>
                            </select>
                            <input type="text" id="" name="" value="" class="search_input">
                            <a href="#" class="btn btn_dark search"><span class="fe fe-search"></span> 검색하기</a>
                        </div>
                    </div>

                    <div class="boardLst">
                        <table>
                            <caption>
                                <span class="blind">리스트입니다</span>
                            </caption>
                            <colgroup>
                                <col width="7%">
                                <col width="*">
                                <col width="10%">
                                <col width="10%">
                            </colgroup>
                            <thead>
                            <tr>
                                <th>No.</th>
                                <th>제목</th>
                                <th>작성자</th>
                                <th>적성일</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr class="notice">
                                <td>공지</td>
                                <td class="l"><a href="#" class="title">반갑습니다. 한국학습컨설팅센터입니다. 홈페이지가 새로 리뉴얼되었습니다.</a></td>
                                <td>운영자</td>
                                <td>2019.01.28</td>
                            </tr>
                            <tr class="notice">
                                <td>공지</td>
                                <td class="l"><a href="#" class="title">반갑습니다. 한국학습컨설팅센터입니다. 홈페이지가 새로 리뉴얼되었습니다.</a></td>
                                <td>운영자</td>
                                <td>2019.01.28</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td class="l"><a href="#" class="title">반갑습니다. 한국학습컨설팅센터입니다. 홈페이지가 새로 리뉴얼되었습니다.</a></td>
                                <td>운영자</td>
                                <td>2019.01.28</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td class="l"><a href="#" class="title">반갑습니다. 한국학습컨설팅센터입니다. 홈페이지가 새로 리뉴얼되었습니다.</a></td>
                                <td>운영자</td>
                                <td>2019.01.28</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                    <ul class="pagination">
                        <li><a href="#" class="first">첫페이지로</a></li>
                        <li><a href="#" class="prev">이전 페이지로</a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#" class="active">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#" class="next">다음페이지로</a></li>
                        <li><a href="#" class="last">첫페이지로</a></li>
                    </ul>

                    <div class="gap"></div>

                    <div class="cont_search_wrap">
                        <div class="total fl"><span class="fe fe-layers"></span> 총 <span class="num">1,500</span>건의 내역이 있습니다</div>
                        <div class="form_group fr">
                            <select id="date_type" name="date_type" title="조건을 선택하세요">
                                <option value="ml_date">검색</option>
                            </select>
                            <input type="text" id="" name="" value="" class="search_input">
                            <a href="#" class="btn btn_dark search"><span class="fe fe-search"></span> 검색하기</a>
                        </div>
                    </div>

                    <div class="photoLst">
                        <ul>
                            <li>
                                <a href="#">
                                    <span class="zoomImg"><img src="/renew/admin/share/img/board/no_img.jpg" alt="이미지"></span>
                                    <div class="txtBox">
                                        <span class="title">반갑습니다. 한국학습컨설팅센터입니다. 홈페이지가 새로 리뉴얼되었습니다. </span>
                                        <span class="date">2019.03.18</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="zoomImg"><img src="/renew/admin/share/img/board/no_img.jpg" alt="이미지"></span>
                                    <div class="txtBox">
                                        <span class="title">반갑습니다. 한국학습컨설팅센터입니다. 홈페이지가 새로 리뉴얼되었습니다. </span>
                                        <span class="date">2019.03.18</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="zoomImg"><img src="/renew/admin/share/img/board/no_img.jpg" alt="이미지"></span>
                                    <div class="txtBox">
                                        <span class="title">반갑습니다. 한국학습컨설팅센터입니다. 홈페이지가 새로 리뉴얼되었습니다. </span>
                                        <span class="date">2019.03.18</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="zoomImg"><img src="/renew/admin/share/img/board/no_img.jpg" alt="이미지"></span>
                                    <div class="txtBox">
                                        <span class="title">반갑습니다. 한국학습컨설팅센터입니다. 홈페이지가 새로 리뉴얼되었습니다. </span>
                                        <span class="date">2019.03.18</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="zoomImg"><img src="/renew/admin/share/img/board/no_img.jpg" alt="이미지"></span>
                                    <div class="txtBox">
                                        <span class="title">반갑습니다. 한국학습컨설팅센터입니다. 홈페이지가 새로 리뉴얼되었습니다. </span>
                                        <span class="date">2019.03.18</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="zoomImg"><img src="/renew/admin/share/img/board/no_img.jpg" alt="이미지"></span>
                                    <div class="txtBox">
                                        <span class="title">반갑습니다. 한국학습컨설팅센터입니다. 홈페이지가 새로 리뉴얼되었습니다. </span>
                                        <span class="date">2019.03.18</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="zoomImg"><img src="/renew/admin/share/img/board/no_img.jpg" alt="이미지"></span>
                                    <div class="txtBox">
                                        <span class="title">반갑습니다. 한국학습컨설팅센터입니다. 홈페이지가 새로 리뉴얼되었습니다. </span>
                                        <span class="date">2019.03.18</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="zoomImg"><img src="/renew/admin/share/img/board/no_img.jpg" alt="이미지"></span>
                                    <div class="txtBox">
                                        <span class="title">반갑습니다. 한국학습컨설팅센터입니다. 홈페이지가 새로 리뉴얼되었습니다. </span>
                                        <span class="date">2019.03.18</span>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <ul class="pagination">
                        <li><a href="#" class="first">첫페이지로</a></li>
                        <li><a href="#" class="prev">이전 페이지로</a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#" class="active">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#" class="next">다음페이지로</a></li>
                        <li><a href="#" class="last">첫페이지로</a></li>
                    </ul>


                    <div class="gap"></div>


                    <div class="boardViw">
                        <div class="boardViw_top">
                            <div class="boardViw_title">반갑습니다. 한국학습컨설팅센터입니다. 홈페이지가 새로 리뉴얼되었습니다.</div>
                            <div class="boardViw_info">
                                <ul>
                                    <li><div class="title">작성자</div> 운영자</li>
                                    <li><div class="title">작성일</div> 2019.01.09</li>
                                    <li><div class="title">조회수</div> 1,500</li>
                                </ul>
                            </div>
                        </div>
                        <div class="boardViw_file">
                            <div class="title">첨부파일</div>
                            <ul>
                                <li><a href="#"><span class="la la-file"></span> 8275_tdata_15300.pdf</a></li>
                                <li><a href="#"><span class="la la-file"></span> 한글첨부파일입니다.hwp</a></li>
                            </ul>
                        </div>
                        <div class="boardViw_cont">

                            <img src="/renew/home/share/img/sub/0101_img.jpg" alt="" /><br/><br/>

                            반갑습니다. 한국학습컨설팅센터입니다. 홈페이지가 새로 리뉴얼되었습니다.<br/>

                            안녕하세요 한국학습컨설팅센터 입니다.<br/>

                            본 센터에서 운영중인 유튜브 채널을 통해 학습관련 영상을 접하실 수 있습니다.<br/><br/>


                            ㅇ유튜브 검색 : 한국학습컨설팅센터<br/>

                            ㅇ채널 URL : https://www.youtube.com/channel/UCNUYg_kLDWxL_0JHJTtdIxA<br/>


                            지속적으로 좋은 내용을 제공 해 드릴 수 있도록<br/>
                            \'구독\'과 \'좋아요\' 클릭을 통해 많은 관심과 사랑 부탁드립니다^^
                        </div>
                    </div>

                    <div class="sgap"></div>

                    <div class="btn_box right">
                        <a href="#" class="btn bw_sm bh_lg">목록</a>
                    </div>
                    



                </div>
                <!-- e: 본문 //-->

            </div>
            <!-- e: .contents_wrap //-->

        </div>
        <!-- e: #container_wrap //-->

        <!-- s: .header_wrap //-->
        <? include $_SERVER['DOCUMENT_ROOT'] . "/renew/admin/share/inc/footerInc.php"; ?>
        <!-- e: .header_wrap //-->

    </div>
    <!-- e: .doc_pg //-->

</div>

</body>
</html>

