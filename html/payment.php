<?php
include "../inc/session.php";
?>

<!DOCTYPE html>
<html lang="ko">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="favicon" href="./images/favicon.ico">
  <link rel="shortcut icon" type="image/x-icon" href="../images/favicon.ico" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@400;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="../css/reset.css" />
  <link rel="stylesheet" href="../css/header_footer.css" />
  <link rel="stylesheet" href="../css/payment.css" />
  <!-- Script -->
  <script src="https://kit.fontawesome.com/75062a3531.js" crossorigin="anonymous"></script>
  <script src="../js/jquery-3.6.1.min.js"></script>
  <script defer src="../js/payment.js"></script>
  <script defer src="../js/nav_hover.js"></script>
  <title>Document</title>
</head>

<body>
  <div class="body_inner">
    <!-- header -->
    <?php include "../inc/header.php" ?>
    <!-- main -->
    <main>
      <div class="main_inner">
        <h2>결제하기</h2>
        <div class="section">
          <section class="section_left">
            <div class="order">
              <div class="order_inner">
                <h3>주문내역</h3>
                <div class="order_title">
                  <img src="../images/guitar.jpg" alt="" />
                  <div class="order_info">
                    <p>기타 재밌게 알려드립니다!</p>
                    <div class="order_profile">
                      <img src="../images/profile_img.jpeg" alt="" />
                      <span>김아무개</span>
                    </div>
                  </div>
                </div>
                <div class="order_select">
                  <div>
                    <ul class="select_title">
                      <li class="select_bagic">기본항목</li>
                      <li class="select_number">수량선택</li>
                      <li class="select_day">작업일</li>
                      <li class="select_price">가격</li>
                    </ul>
                  </div>
                  <div class="order_value">
                    <div>
                      <ul class="selcet_value">
                        <li class="selcet_bagic_value">
                          기타 재밌게 알려드립니다!
                        </li>
                        <li class="selcet_number_value">
                          <button class="minor_btn" value="-"></button>
                          <span class="result_num"></span>
                          <button class="plus_btn" value="+"></button>
                        </li>
                        <li class="selcet_day_value">1일</li>
                        <li class="selcet_price_value"></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="client">
              <div class="client_inner">
                <div class="client_txt">
                  <ul>
                    <h3>의뢰인 정보</h3>
                    <li class="client_txt1">
                      ·본인 확인 후 구매가 가능합니다.(첫 결제 1회만)
                    </li>
                    <li class="client_txt2">
                      ·인증된 정보에 따라 실명이 자동 업데이트됩니다.
                    </li>
                  </ul>
                </div>
                <div class="client_btn">
                  <button class="phone_btn">
                    로그인 후 휴대폰 인증을 해주세요.
                  </button>
                </div>
              </div>
            </div>
            <div class="cash">
              <div class="cash_inner">
                <h3>할인 / 캐시사용</h3>
                <form action="" class="use_coupon">
                  <p>사용 가능한 쿠폰</p>
                  <input type="text" placeholder="사용가능한 쿠폰 없음" />
                  <img src="../images/signin_dropdown.png" alt="" />
                </form>
                <form action="" class="use_cash">
                  <p>캐시 사용</p>
                  <div class="have_cash">
                    <input type="text" placeholder="0" />
                    <span>보유 헬퍼캐시 :0원</span>
                  </div>
                  <button class="cash_btn">전액사용</button>
                </form>
              </div>
            </div>
            <div class="payway">
              <h3>결제방법</h3>
              <ul>
                <li>신용카드</li>
                <li>무통장입금</li>
                <li>계좌이체</li>
                <li class="kakao">
                  <img src="../images/kakaopay_CI_combination_with_BG.png" alt="" class="kakaopay" />
                  카카오페이
                </li>
                <li class="toss">
                  <img src="../images/Toss_Symbol_Secondary_Blue.png" alt="" class="tosspay" />
                  토스페이
                </li>
              </ul>
            </div>
          </section>
          <aside class="section_right">
            <div class="right_inner">
              <div class="all_pay">
                <p class="pay_title">총 서비스 금액</p>
                <p class="sale">4,000,000원</p>
              </div>
              <div class="coupon_sale">
                <p class="pay_title">쿠폰 할인</p>
                <p class="sale">0원</p>
              </div>
              <div class="cash_use">
                <p class="pay_title">캐시사용</p>
                <p class="sale">0원</p>
              </div>
              <div class="total">
                <div class="total_pay_section">
                  <p class="pay_title">총 결제금액</p>
                  <p class="total_pay">4,000,000원</p>
                </div>
                <div class="apply">
                  <form action="" class="apply_form">
                    <button type="button" name="apply_btn" id="apply_btn" class="apply_btn"></button>
                    <label for="apply_btn" class="apply_txt">주문 내용을 확인하였으며, 결제에
                      동의합니다.(필수)</label>
                  </form>
                  <button class="payment_btn">결제하기</button>
                  <p class="payment_txt">
                    서비스 제공이 완료된 이후에 전문가에게 결제 대금이
                    전달됩니다.
                  </p>
                </div>
              </div>
            </div>
          </aside>
        </div>
      </div>
    </main>
    <!-- footer -->
    <?php include "../inc/footer.php" ?>
  </div>
</body>

</html>