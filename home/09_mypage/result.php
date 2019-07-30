<? $tm=9; $sm=5; ?>

<? include $_SERVER['DOCUMENT_ROOT'] . "/renew/home/share/inc/scont_top.php"; ?>

    <div class="cont_search_wrap">
        <div class="form_group">
            <span class="calendar"><input type="text" id="st_date" name="st_date" value=""></span>
        </div>
        <div class="form_group">
            <select id="" name="" title="조건을 선택하세요">
                <option value="">대상자</option>
            </select>
        </div>
        <div class="form_group">
            <a href="#" class="btn btn_dark search"><span class="fe fe-search"></span> 검색하기</a>
        </div>
    </div>

    <table class="tbl_result">
        <caption><span class="blind">검사결과 표입니다.</span></caption>
        <colgroup>
            <col width="12%">
            <col width="32%">
            <col width="12%">
            <col width="12%">
            <col width="*">
        </colgroup>
        <thead>
        <tr>
            <th scope="col">실시일</th>
            <th scope="col">검사종류</th>
            <th scope="col">대상자</th>
            <th scope="col">결과보기</th>
            <th scope="col">메모</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td class="date">2018.10.20</td>
            <td class="type">학습전략 사용능력 검사 (중급)</td>
            <td class="name">홍길동</td>
            <td class="bt"><a href="#" class="btn btn_red">보기</a></td>
            <td class="etc">
                <div class="comment">
                    <input type="text" name="" id="" title="내용을 입력하세요" value="" placeholder="메모">
                    <a href="#" class="btn btn_gray">수정</a>
                    <a href="#" class="btn btn_sky">저장</a>
                </div>
            </td>
        </tr>
        <tr>
            <td class="date">2018.10.20</td>
            <td class="type">학습전략 사용능력 검사 (중급)</td>
            <td class="name">홍길동</td>
            <td class="bt"><a href="#" class="btn btn_red">보기</a></td>
            <td class="etc">
                <div class="comment">
                    <input type="text" name="" id="" title="내용을 입력하세요" value="" placeholder="메모">
                    <a href="#" class="btn btn_gray">수정</a>
                    <a href="#" class="btn btn_sky">저장</a>
                </div>
            </td>
        </tr>
        <tr>
            <td class="date">2018.10.20</td>
            <td class="type">학습전략 사용능력 검사 (중급)</td>
            <td class="name">홍길동</td>
            <td class="bt"><a href="#" class="btn btn_red">보기</a></td>
            <td class="etc">
                <div class="comment">
                    <input type="text" name="" id="" title="내용을 입력하세요" value="" placeholder="메모">
                    <a href="#" class="btn btn_gray">수정</a>
                    <a href="#" class="btn btn_sky">저장</a>
                </div>
            </td>
        </tr>
        <tr>
            <td class="date">2018.10.20</td>
            <td class="type">학습전략 사용능력 검사 (중급)</td>
            <td class="name">홍길동</td>
            <td class="bt"><a href="#" class="btn btn_red">보기</a></td>
            <td class="etc">
                <div class="comment">
                    <input type="text" name="" id="" title="내용을 입력하세요" value="" placeholder="메모">
                    <a href="#" class="btn btn_gray">수정</a>
                    <a href="#" class="btn btn_sky">저장</a>
                </div>
            </td>
        </tr>
        <tr>
            <td class="date">2018.10.20</td>
            <td class="type">학습전략 사용능력 검사 (중급)</td>
            <td class="name">홍길동</td>
            <td class="bt"><a href="#" class="btn btn_red">보기</a></td>
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