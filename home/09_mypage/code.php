<? $tm=9; $sm=4; ?>

<? include $_SERVER['DOCUMENT_ROOT'] . "/renew/home/share/inc/scont_top.php"; ?>

    <div class="gr_box tc">
        ※ 구매한 검사 코드를 확인하고 코드 사용여부와 기타사항을 입력 할 수 있습니다
    </div>

    <div class="sgap"></div>

    <div class="cont_search_wrap">
        <div class="form_group">
            <span class="calendar"><input type="text" id="st_date" name="st_date" value=""></span>
        </div>
        <div class="form_group">
            <select id="" name="" title="조건을 선택하세요">
                <option value="">사용여부</option>
            </select>
        </div>
        <div class="form_group">
            <a href="#" class="btn btn_dark search"><span class="fe fe-search"></span> 검색하기</a>
        </div>
    </div>

    <table class="tbl_code">
        <caption><span class="blind">표입니다.</span></caption>
        <colgroup>
            <col width="7%">
            <col width="15%">
            <col width="25%">
            <col width="12%">
            <col width="12%">
            <col width="*">
        </colgroup>
        <thead>
        <tr>
            <th scope="col">&nbsp;</th>
            <th scope="col">구매일</th>
            <th scope="col">검사지 명</th>
            <th scope="col">검사코드</th>
            <th scope="col">사용여부</th>
            <th scope="col">메모</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td class="no">5</td>
            <td class="date">2018.10.20</td>
            <td class="title">학습전략 사용능력 검사 (중급)</td>
            <td class="code">11aa22bb33</td>
            <td class="chek"><span class="cred">미실시</span></td>
            <td class="etc">
                <div class="comment">
                    <input type="text" name="" id="" title="내용을 입력하세요" value="" placeholder="메모">
                    <a href="#" class="btn btn_gray">수정</a>
                    <a href="#" class="btn btn_sky">저장</a>
                </div>
            </td>
        </tr>
        <tr>
            <td class="no">4</td>
            <td class="date">2018.10.20</td>
            <td class="title">학습전략 사용능력 검사 (중급)</td>
            <td class="code">11aa22bb33</td>
            <td class="chek"><span class="cred">미실시</span></td>
            <td class="etc">
                <div class="comment">
                    <input type="text" name="" id="" title="내용을 입력하세요" value="" placeholder="메모">
                    <a href="#" class="btn btn_gray">수정</a>
                    <a href="#" class="btn btn_sky">저장</a>
                </div>
            </td>
        </tr>
        <tr>
            <td class="no">3</td>
            <td class="date">2018.10.20</td>
            <td class="title">학습전략 사용능력 검사 (중급)</td>
            <td class="code">11aa22bb33</td>
            <td class="chek"><span class="ccy">실시</span></td>
            <td class="etc">
                <div class="comment">
                    <input type="text" name="" id="" title="내용을 입력하세요" value="" placeholder="메모">
                    <a href="#" class="btn btn_gray">수정</a>
                    <a href="#" class="btn btn_sky">저장</a>
                </div>
            </td>
        </tr>
        <tr>
            <td class="no">2</td>
            <td class="date">2018.10.20</td>
            <td class="title">학습전략 사용능력 검사 (중급)</td>
            <td class="code">11aa22bb33</td>
            <td class="chek"><span class="ccy">실시</span></td>
            <td class="etc">
                <div class="comment">
                    <input type="text" name="" id="" title="내용을 입력하세요" value="" placeholder="메모">
                    <a href="#" class="btn btn_gray">수정</a>
                    <a href="#" class="btn btn_sky">저장</a>
                </div>
            </td>
        </tr>
        <tr>
            <td class="no">1</td>
            <td class="date">2018.10.20</td>
            <td class="title">학습전략 사용능력 검사 (중급)</td>
            <td class="code">11aa22bb33</td>
            <td class="chek"><span class="ccy">실시</span></td>
            <td class="etc">
                <div class="comment">
                    <input type="text" name="" id="" title="내용을 입력하세요" value="" placeholder="메모">
                    <a href="#" class="btn btn_gray">수정</a>
                    <a href="#" class="btn btn_sky">저장</a>
                </div>
            </td>
        </tr>
        </tbody>
    </table>

    <div class="gap"></div>

    <div class="btn_box">
        <a href="order_list.php" class="btn btn_gray bw_md bh_lg">목록으로</a>
    </div>


<? include $_SERVER['DOCUMENT_ROOT'] . "/renew/home/share/inc/scont_bottom.php"; ?>