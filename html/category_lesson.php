<?php
include "../inc/session.php";
?>


<!DOCTYPE html>
<html lang="ko">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@400;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="../css/reset.css" />
  <link rel="stylesheet" href="../css/header_footer.css" />
  <link rel="stylesheet" href="../css/category_lesson.css" />
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
      <section class="main_img">
        <p class="main_title">레슨</p>
        <p class="main_sub">지금 헬퍼와 함께 시작해 보세요.</p>
        <form action="">
          <input type="text" placeholder="어떤 분야의 전문가를 찾고 계신가요?" class="lesson_search" />
          <button class="lesson_search_btn">헬퍼찾기</button>
        </form>
      </section>
      <section class="category">
        <div class="category_inner">
          <h2 class="hidden">카테고리</h2>
          <ul>
            <li>
              <a href="">
                <img src="../images/category_lesson.png" alt="" />
                <span>레슨</span>
              </a>
            </li>
            <li>
              <a href="">
                <img src="../images/category_marketing.png" alt="" />
                <span>마케팅</span></a>
            </li>
            <li>
              <a href="">
                <img src="../images/category_camera.png" alt="" /><span>촬영/영상</span></a>
            </li>
            <li>
              <a href="">
                <img src="../images/category_present.png" alt="" />
                <span>주문제작</span></a>
            </li>
            <li>
              <a href="">
                <img src="../images/category_web.png" alt="" />
                <span>디자인/개발</span></a>
            </li>
            <li>
              <a href="">
                <img src="../images/category_mic.png" alt="" />
                <span>이벤트</span></a>
            </li>
            <li>
              <a href="">
                <img src="../images/category_tarrot.png" alt="" />
                <span>운세/타로</span></a>
            </li>
            <li>
              <a href="">
                <img src="../images/category_etc.png" alt="" />
                <span>기타</span></a>
            </li>
          </ul>
        </div>
      </section>
      <section class="favorite_servies">
        <h3>인기 서비스</h3>
        <ul>
          <li class="cont1">
            <a href="../html/guitar_lesson.php">
              <div class="fav_img"><img src="" alt="" /></div>
              <div class="fav_txt">
                <span>기타레슨</span>
              </div>
            </a>
          </li>
          <li class="cont2">
            <a href="">
              <div class="fav_img"></div>
              <div class="fav_txt">
                <span>보컬레슨</span>
              </div>
            </a>
          </li>
          <li class="cont3">
            <a href="">
              <div class="fav_img"></div>
              <div class="fav_txt">
                <span>방송댄스 레슨</span>
              </div>
            </a>
          </li>
          <li class="cont4">
            <a href="">
              <div class="fav_img"></div>
              <div class="fav_txt">
                <span>수학과외</span>
              </div>
            </a>
          </li>
          <li class="cont5">
            <a href="">
              <div class="fav_img"></div>
              <div class="fav_txt">
                <span>영어과외</span>
              </div>
            </a>
          </li>
          <li class="cont6">
            <a href="">
              <div class="fav_img"></div>
              <div class="fav_txt">
                <span>중국어과외</span>
              </div>
            </a>
          </li>
          <li class="cont7">
            <a href="">
              <div class="fav_img"></div>
              <div class="fav_txt">
                <span>골프레슨</span>
              </div>
            </a>
          </li>
          <li class="cont8">
            <a href="">
              <div class="fav_img"></div>
              <div class="fav_txt">
                <span>축구레슨</span>
              </div>
            </a>
          </li>
          <li class="cont9">
            <a href="">
              <div class="fav_img"></div>
              <div class="fav_txt">
                <span>당구레슨</span>
              </div>
            </a>
          </li>
        </ul>
      </section>
    </main>
    <!-- footer -->
    <?php include "../inc/footer.php" ?>
  </div>
</body>

</html>