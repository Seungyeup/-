<? $tm=9; $sm=2; ?>

<? include $_SERVER['DOCUMENT_ROOT'] . "/renew/home/share/inc/scont_top.php"; ?>

    <div class="order_complete">
        <div class="title">결제 완료되었습니다.</div>

        <table class="tbl_form">
            <colgroup>
                <col style="width: 30%" class="msize">
                <col>
            </colgroup>
            <tbody>
            <tr>
                <th>결제내역</th>
                <td>
                    학습전략 사용능력 검사 (초급) 외 2종
                </td>
            </tr>
            <tr>
                <th>결제정보</th>
                <td>
                    <b>계좌이체</b><br/>
                    입금계좌 신한은행(1548-1548-1548)<br/>
                    입금기한 주문일로 부터 7일이내
                </td>
            </tr>
            <tr>
                <th>결제금액</th>
                <td>
                    <b class="f17 ccy">39,400원</b>
                </td>
            </tr>
            </tbody>
        </table>
        <div class="sgap"></div>
        <div class="btn_box">
            <a href="/renew/home/main/" class="btn btn_gray bw_md bh_lg">메인화면으로</a>
            <a href="order_list.php" class="btn btn_sky bw_md bh_lg">결제 내역 확인</a>
        </div>
    </div>

<? include $_SERVER['DOCUMENT_ROOT'] . "/renew/home/share/inc/scont_bottom.php"; ?>