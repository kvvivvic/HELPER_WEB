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
  <link rel="stylesheet" href="../css/guitar_lesson.css" />
  <!-- Script -->
  <script src="../js/jquery-3.6.1.min.js"></script>
  <script defer src="../js/index.js"></script>
  <script src="https://kit.fontawesome.com/75062a3531.js" crossorigin="anonymous"></script>
  <title>헬퍼</title>
</head>

<body>
  <div class="body_inner">
    <!-- header -->
    <?php include "../inc/header.php" ?>
    <!-- main -->
    <main>
      <div class="main_inner">
        <section class="search_area">
          <ul class="serv_exp_list">
            <li class="serv"><a href="#">서비스</a></li>
            <li class="exp"><a href="#">전문가</a></li>
          </ul>
          <p>'기타'에 대한 서비스 검색 결과 <span>1,111건</span></p>
          <div class="related_search">
            <h3>연관검색어</h3>
            <ul>
              <li>통기타</li>
              <li>일렉기타</li>
              <li>베이스기타</li>
            </ul>
          </div>
          <div class="category_search">
            <div class="category_left">
              <h3>카테고리</h3>
            </div>
            <div class="category_right">
              <ul>
                <li>취미(221)</li>
              </ul>
            </div>
          </div>
          <div class="choose_filter">
            <div class="choose_filter_left">
              <h3>선택한 필터</h3>
            </div>
            <div class="choose_filter_right">
              <ul></ul>
            </div>
          </div>
        </section>
        <section class="order">
          <ul class="order_list">
            <li><a href="#" class="rel">연관도순</a></li>
            <li><a href="#">인기순</a></li>
            <li><a href="#">추천순</a></li>
            <li><a href="#">평점순</a></li>
            <li><a href="#">신규등록순</a></li>
          </ul>
        </section>
        <section class="main_content">
          <ul>
            <li>
              <a href="../html/detail_page.php">
                <p class="exp_img">
                  <img src="../images/juck.jpeg" alt="" />
                </p>
                <p class="exp_name">적재</p>
                <p class="explan">기타 재밌게 알려드립니다.</p>
                <p class="price">4,000,000원</p>
                <p class="exp_review">
                  <img src="../images/review_icon.png" width="11px" height="11px" alt="" />
                  <span class="review_txt">5.0 | 11개의 평가 </span>
                </p>
              </a>
            </li>
            <li>
              <a href="#">
                <p class="exp_img">
                  <img src="../images/john mayer.jpeg" alt="" />
                </p>
                <p class="exp_name">john mayer</p>
                <p class="explan">기타 재밌게 알려드립니다.</p>
                <p class="price">4,000,000원</p>
                <p class="exp_review">
                  <img src="../images/review_icon.png" width="11px" height="11px" alt="" />
                  <span class="review_txt">5.0 | 11개의 평가 </span>
                </p>
              </a>
            </li>
            <li>
              <a href="#">
                <p class="exp_img">
                  <img src="../images/bbking.jpeg" alt="" />
                </p>
                <p class="exp_name">bbking</p>
                <p class="explan">기타 재밌게 알려드립니다.</p>
                <p class="price">4,000,000원</p>
                <p class="exp_review">
                  <img src="../images/review_icon.png" width="11px" height="11px" alt="" />
                  <span class="review_txt">5.0 | 11개의 평가 </span>
                </p>
              </a>
            </li>
            <li>
              <a href="#">
                <p class="exp_img">
                  <img src="../images/tommisch.jpeg" alt="" />
                </p>
                <p class="exp_name">tom misch</p>
                <p class="explan">기타 재밌게 알려드립니다.</p>
                <p class="price">4,000,000원</p>
                <p class="exp_review">
                  <img src="../images/review_icon.png" width="11px" height="11px" alt="" />
                  <span class="review_txt">5.0 | 11개의 평가 </span>
                </p>
              </a>
            </li>
            <li>
              <a href="#">
                <p class="exp_img">
                  <img src="../images/wes.jpeg" alt="" />
                </p>
                <p class="exp_name">wes montgomery</p>
                <p class="explan">기타 재밌게 알려드립니다.</p>
                <p class="price">4,000,000원</p>
                <p class="exp_review">
                  <img src="../images/review_icon.png" width="11px" height="11px" alt="" />
                  <span class="review_txt">5.0 | 11개의 평가 </span>
                </p>
              </a>
            </li>
            <li>
              <a href="#">
                <p class="exp_img">
                  <img src="../images/tim.jpeg" alt="" />
                </p>
                <p class="exp_name">tim henson</p>
                <p class="explan">기타 재밌게 알려드립니다.</p>
                <p class="price">4,000,000원</p>
                <p class="exp_review">
                  <img src="../images/review_icon.png" width="11px" height="11px" alt="" />
                  <span class="review_txt">5.0 | 11개의 평가 </span>
                </p>
              </a>
            </li>
            <li>
              <a href="#">
                <p class="exp_img">
                  <img src="../images/cory.jpeg" alt="" />
                </p>
                <p class="exp_name">cory wong</p>
                <p class="explan">기타 재밌게 알려드립니다.</p>
                <p class="price">4,000,000원</p>
                <p class="exp_review">
                  <img src="../images/review_icon.png" width="11px" height="11px" alt="" />
                  <span class="review_txt">5.0 | 11개의 평가 </span>
                </p>
              </a>
            </li>
            <li>
              <a href="#">
                <p class="exp_img">
                  <img src="../images/jimi.jpeg" alt="" />
                </p>
                <p class="exp_name">jimi hendrix</p>
                <p class="explan">기타 재밌게 알려드립니다.</p>
                <p class="price">4,000,000원</p>
                <p class="exp_review">
                  <img src="../images/review_icon.png" width="11px" height="11px" alt="" />
                  <span class="review_txt">5.0 | 11개의 평가 </span>
                </p>
              </a>
            </li>
            <li>
              <a href="#">
                <p class="exp_img">
                  <img src="../images/eric gales.jpeg" alt="" />
                </p>
                <p class="exp_name">eric gales</p>
                <p class="explan">기타 재밌게 알려드립니다.</p>
                <p class="price">4,000,000원</p>
                <p class="exp_review">
                  <img src="../images/review_icon.png" width="11px" height="11px" alt="" />
                  <span class="review_txt">5.0 | 11개의 평가 </span>
                </p>
              </a>
            </li>
            <li>
              <a href="#">
                <p class="exp_img">
                  <img src="../images/pat.jpeg" alt="" />
                </p>
                <p class="exp_name">pat metheny</p>
                <p class="explan">기타 재밌게 알려드립니다.</p>
                <p class="price">4,000,000원</p>
                <p class="exp_review">
                  <img src="../images/review_icon.png" width="11px" height="11px" alt="" />
                  <span class="review_txt">5.0 | 11개의 평가 </span>
                </p>
              </a>
            </li>
            <li>
              <a href="#">
                <p class="exp_img">
                  <img src="../images/ichika.jpeg" alt="" />
                </p>
                <p class="exp_name">ichika nito</p>
                <p class="explan">기타 재밌게 알려드립니다.</p>
                <p class="price">4,000,000원</p>
                <p class="exp_review">
                  <img src="../images/review_icon.png" width="11px" height="11px" alt="" />
                  <span class="review_txt">5.0 | 11개의 평가 </span>
                </p>
              </a>
            </li>
            <li>
              <a href="#">
                <p class="exp_img">
                  <img src="../images/mark.jpeg" alt="" />
                </p>
                <p class="exp_name">mark lettieri</p>
                <p class="explan">기타 재밌게 알려드립니다.</p>
                <p class="price">4,000,000원</p>
                <p class="exp_review">
                  <img src="../images/review_icon.png" width="11px" height="11px" alt="" />
                  <span class="review_txt">5.0 | 11개의 평가 </span>
                </p>
              </a>
            </li>
            <li>
              <a href="#">
                <p class="exp_img">
                  <img src="../images/mate.jpeg" alt="" />
                </p>
                <p class="exp_name">mateus asato</p>
                <p class="explan">기타 재밌게 알려드립니다.</p>
                <p class="price">4,000,000원</p>
                <p class="exp_review">
                  <img src="../images/review_icon.png" width="11px" height="11px" alt="" />
                  <span class="review_txt">5.0 | 11개의 평가 </span>
                </p>
              </a>
            </li>
            <li>
              <a href="#">
                <p class="exp_img">
                  <img src="../images/eric.jpeg" alt="" />
                </p>
                <p class="exp_name">eric clapton</p>
                <p class="explan">기타 재밌게 알려드립니다.</p>
                <p class="price">4,000,000원</p>
                <p class="exp_review">
                  <img src="../images/review_icon.png" width="11px" height="11px" alt="" />
                  <span class="review_txt">5.0 | 11개의 평가 </span>
                </p>
              </a>
            </li>
            <li>
              <a href="#">
                <p class="exp_img">
                  <img src="../images/tom quayle.jpeg" alt="" />
                </p>
                <p class="exp_name">tom quayle</p>
                <p class="explan">기타 재밌게 알려드립니다.</p>
                <p class="price">4,000,000원</p>
                <p class="exp_review">
                  <img src="../images/review_icon.png" width="11px" height="11px" alt="" />
                  <span class="review_txt">5.0 | 11개의 평가 </span>
                </p>
              </a>
            </li>
          </ul>
        </section>
      </div>
    </main>
    <!-- footer -->
    <?php include "../inc/footer.php" ?>
  </div>
</body>

</html>