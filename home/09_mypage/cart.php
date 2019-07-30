<? $tm=9; $sm=1; ?>

<? include $_SERVER['DOCUMENT_ROOT'] . "/renew/home/share/inc/scont_top.php"; ?>

    <div class="order_list_wrap">

        <div class="order_listArea">
            <div class="order_list cart">
                <!-- 아이템 -->
                <div class="item">
                    <div class="checkbox checkbox_single">
                        <input id="checkbox1" type="checkbox" name="" value="">
                        <label for="checkbox1">선택</label>
                    </div>
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
                    <div class="checkbox checkbox_single">
                        <input id="checkbox2" type="checkbox" name="" value="">
                        <label for="checkbox2">선택</label>
                    </div>
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
            <div class="ssgap"></div>
            <div class="btn_box left">
                <a href="#" class="btn">전체선택</a>
                <a href="#" class="btn">선택삭제</a>
            </div>
        </div>

        <div class="order_priceArea">
            <div class="order_price">
                <div class="title">선택내역</div>
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
                    <div class="tit">총 상품금액</div>
                    <div class="price">30,600‬원</div>
                </div>
            </div>
            <div class="btn_box">
                <a href="order.php" class="btn btn_sky">바로 구매하기</a>
            </div>
        </div>

    </div>

<? include $_SERVER['DOCUMENT_ROOT'] . "/renew/home/share/inc/scont_bottom.php"; ?>