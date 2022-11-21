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
  <link rel="stylesheet" href="../css/detail_page.css" />
  <!-- Script -->
  <script src="../js/jquery-3.6.1.min.js"></script>
  <script defer src="../js/index.js"></script>
  <script defer src="../js/detail.js"></script>
  <script defer src="https://kit.fontawesome.com/75062a3531.js" crossorigin="anonymous"></script>
  <script src="../js/to_top.js"></script>
  <title>헬퍼</title>
</head>

<body>
  <div class="body_inner">
    <!-- header -->
    <?php include "../inc/header.php" ?>
    <!-- main -->
    <main>
      <div class="main_inner">
        <section class="main_left">
          <div>
            <p class="link">
              <span><a href="#">취미</a></span>
              <span>></span>
              <span><a href="#">음악 · 악기</a></span>
              <span>></span>
              <span><a href="#">기타레슨</a></span>
            </p>
          </div>
          <div class="exp_img">
            <img src="../images/juck.jpeg" alt="" />
          </div>
          <div class="review">
            <img src="../images/review_icon.png" width="11px" height="11px" alt="" />
            <img src="../images/review_icon.png" width="11px" height="11px" alt="" />
            <img src="../images/review_icon.png" width="11px" height="11px" alt="" />
            <img src="../images/review_icon.png" width="11px" height="11px" alt="" />
            <img src="../images/review_icon.png" width="11px" height="11px" alt="" />
            <span class="review_txt1">5.0</span>
            <span class="review_txt2">(11개의 평가)</span>
          </div>
          <div>
            <ul class="detail">
              <li class="detail_link1 scroll">서비스설명</li>
              <li class="detail_link2 scroll">가격정보</li>
              <li class="detail_link3 scroll">취소·환불</li>
              <li class="detail_link4 scroll">서비스평가</li>
            </ul>
          </div>
          <div class="detail_inner">
            <p class="datail_txt1 txt1">서비스 설명</p>
            <p class="datail_txt2">-</p>
            <p class="datail_txt3">동해물과 백두산이 마르고 닳도록</p>
          </div>
          <div class="detail_inner">
            <p class="datail_txt2">의뢰인 준비사항</p>
            <p class="datail_txt3">동해물과 백두산이 마르고 닳도록</p>
          </div>
          <div class="detail_price">
            <p class="datail_txt2 txt2">가격 정보</p>
            <div class="price_box">
              <p class="box_txt1">4,000,000원</p>

              <p class="box_txt2">1:1기타레슨</p>
              <p class="box_txt3">(+ 대관료 , 부과세 포함)</p>
              <p class="box_txt3">일정 협의 후 레슨 확정</p>
              <table>
                <tr>
                  <td>1회당 레슨시간 (분)</td>
                  <td>60분</td>
                </tr>
                <tr>
                  <td>레슨횟수</td>
                  <td>1회</td>
                </tr>
                <tr>
                  <td>작업일</td>
                  <td>1일</td>
                </tr>
                <tr>
                  <td>수정횟수</td>
                  <td>0회</td>
                </tr>
              </table>
            </div>
            <div class="buy">
              <a href="../html/payment.php"><button>구매하기</button></a>
            </div>
          </div>
          <div class="cancel">
            <p class="datail_txt2 txt3">취소 및 환불 규정</p>
            <p class="datail_txt3">동해물과 백두산이 마르고 닳도록</p>
          </div>
          <div class="serv_review">
            <p class="datail_txt2 txt4">사용자 평가</p>
            <div class="review2">
              <img src="../images/review_icon.png" width="11px" height="11px" alt="" />
              <img src="../images/review_icon.png" width="11px" height="11px" alt="" />
              <img src="../images/review_icon.png" width="11px" height="11px" alt="" />
              <img src="../images/review_icon.png" width="11px" height="11px" alt="" />
              <img src="../images/review_icon.png" width="11px" height="11px" alt="" />
              <span class="review_txt1">5.0</span>
              <span class="review_txt2">(11개의 평가)</span>
            </div>
          </div>
        </section>
        <section class="main_right">
          <h3>기타 재밌게 알려드립니다!</h3>
          <div class="buy_box">
            <div class="buy_box_inner">
              <p class="buy_txt1">4,000,000원</p>
              <p class="buy_txt2">1:1기타레슨</p>
              <p class="buy_txt3">(+ 대관료 , 부과세 포함)</p>
              <p class="buy_txt3">일정 협의 후 레슨 확정</p>
              <table>
                <tr>
                  <td>1회당 레슨시간 (분)</td>
                  <td>60분</td>
                </tr>
                <tr>
                  <td>레슨횟수</td>
                  <td>1회</td>
                </tr>
                <tr>
                  <td>작업일</td>
                  <td>1일</td>
                </tr>
                <tr>
                  <td>수정횟수</td>
                  <td>0회</td>
                </tr>
              </table>
              <div class="buy_btn2">
                <a href="../html/payment.php"><button class="buy_btn_right">구매하기</button></a>
              </div>
            </div>
          </div>
          <div class="waring">
            <div class="waring_inner">
              <img src="../images/secu.png" width="40px" height="46px" alt="" />
              <span>서비스 제공이 완료된 이후에 전문가에게 결제 대금이
                전달됩니다.</span>
            </div>
          </div>
          <div class="profile_exp">
            <div class="exp_name">
              <p>적재</p>
            </div>
            <div class="exp_profile_img"></div>
            <div class="exp_inner">
              <div class="exp_time">
                <p class="time1">연락 가능 시간 : 9시 ~ 18시</p>
                <p class="time2">평균 응답 시간 : 1시간 내에</p>
              </div>
              <div class="exp_box">
                <div class="box1">
                  <p class="sub_txt1">34건</p>
                  <p class="sub_txt2">총 작업갯수</p>
                </div>
                <div class="box2">
                  <p class="sub_txt1">100%</p>
                  <p class="sub_txt2">만족도</p>
                </div>
                <div class="box3">
                  <p class="sub_txt1">개인회원</p>
                  <p class="sub_txt2">회원구분</p>
                </div>
              </div>
              <div class="exp_intro">
                <p class="intro_txt1">소개</p>
                <p class="intro_txt2">
                  동해물과 백두산이 마르고 닳도록 하느님이 보우하사
                  우리나라만세 무궁화 삼천리 화려강산 대한사람 대한으로 길이
                  보전하세
                </p>
              </div>
              <div class="intro_more">
                <p>
                  <span>자기소개 더보기</span>
                  <i class="fa-solid fa-circle-chevron-down"></i>
                </p>
              </div>
            </div>
          </div>
        </section>
      </div>
    </main>
    <!-- footer -->
    <?php include "../inc/footer.php" ?>
  </div>
</body>

</html>