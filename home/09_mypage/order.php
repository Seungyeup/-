<? $tm=9; $sm=2; ?>

<? include $_SERVER['DOCUMENT_ROOT'] . "/renew/home/share/inc/scont_top.php"; ?>

    <div class="order_list_wrap">

        <div class="order_listArea">
            <div class="order_list">
                <!-- 아이템 -->
                <div class="item">
                    <div class="img"><img src="/renew/home/share/img/main/program_img01.jpg" alt="" /></div>
                    <div class="txtBox">
                        <div class="title">학습전략 사용능력 검사 (초급)</div>
                        <div class="purchase_count">
                            <button type="button" class="minus_count">상품 수 1 감소 </button>
                            <input type="text" name="" readonly="" value="1" class="add_count" title="선택된 상품 수량">
                            <button type="button" class="plus_count">상품 수 1 증가</button>
                            <input type="hidden" name="" value="" data-b_price="">
                        </div>
                        <div class="price">15,300원</div>
                        <a href="#" class="btn_del"><i class="la la-remove"></i><span class="blind">삭제</span></a>
                    </div>
                </div>
                <!-- //아이템 -->
                <!-- 아이템 -->
                <div class="item">
                    <div class="img"><img src="/renew/home/share/img/main/program_img01.jpg" alt="" /></div>
                    <div class="txtBox">
                        <div class="title">학습전략 사용능력 검사 (초급)</div>
                        <div class="purchase_count">
                            <button type="button" class="minus_count">상품 수 1 감소 </button>
                            <input type="text" name="" readonly="" value="1" class="add_count" title="선택된 상품 수량">
                            <button type="button" class="plus_count">상품 수 1 증가</button>
                            <input type="hidden" name="" value="" data-b_price="">
                        </div>
                        <div class="price">15,300원</div>
                        <a href="#" class="btn_del"><i class="la la-remove"></i><span class="blind">삭제</span></a>
                    </div>
                </div>
                <!-- //아이템 -->
            </div>
        </div>

        <div class="order_priceArea">
            <div class="order_price">
                <div class="title">결제 정보</div>
                <ul>
                    <li>
                        <div class="text">총 검사 종류</div>
                        <div class="price">
                            <span>2종</span>
                        </div>
                    </li>
                    <li>
                        <div class="text">총 주문 수량</div>
                        <div class="price">
                            <span>5회</span>
                        </div>
                    </li>
                </ul>
                <div class="total_price">
                    <div class="tit">총 결제금액</div>
                    <div class="price">30,600‬원</div>
                </div>
            </div>

            <div class="order_payments">
                <div class="title">결제 수단 선택</div>
                <div class="payments">
                    <div class="radio radio_inline">
                        <input id="payments1" type="radio" name="" value="">
                        <label for="payments1">계좌이체</label>
                    </div>
                    <div class="radio radio_inline">
                        <input id="payments2" type="radio" name="" value="">
                        <label for="payments2">신용카드</label>
                    </div>
                    <div class="radio radio_inline">
                        <input id="payments3" type="radio" name="" value="">
                        <label for="payments3">무통장 입금</label>
                    </div>
                </div>
            </div>
            <div class="sssgap"></div>
            <div class="checkbox">
                <input id="checkbox3" type="checkbox" name="" value="">
                <label for="checkbox3">상품, 가격, 유의 사항 등을 확인하였으며 구매에 동의합니다.</label>
            </div>
            <div class="sssgap"></div>
            <div class="btn_box">
                <a href="order_complete.php" class="btn btn_sky">결제하기</a>
            </div>
            <div class="sssgap"></div>
            <div class="f12 tc">결제 취소는 결제일로부터 7일 이내에만 할 수 있습니다.</div>
        </div>

    </div>

<? include $_SERVER['DOCUMENT_ROOT'] . "/renew/home/share/inc/scont_bottom.php"; ?>