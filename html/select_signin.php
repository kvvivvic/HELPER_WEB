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
  <link rel="stylesheet" href="../css/select_signin.css" />
  <!-- Script -->
  <script src="https://kit.fontawesome.com/75062a3531.js" crossorigin="anonymous"></script>
  <!-- jquery -->
  <script src="../js/jquery-3.6.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/ScrollTrigger.min.js"></script>
  <script defer src="../js/nav_hover.js"></script>
  <script defer src="../js/select_signin.js"></script>
  <script src="../js/to_top.js"></script>
  <title>Document</title>
</head>

<body>
  <div class="body_inner">
    <!-- header -->
    <?php include "../inc/header.php" ?>
    <!-- main -->
    <main>
      <h2 class="main_logo">Helper</h2>
      <div class="main_inner">
        <div class="main_box">
          <h3 class="main_title">
            헬퍼에서 어떤 서비스를 <br />
            이용하고 싶으신가요?
          </h3>
          <p class="main_txt1">원하는 회원가입 유형을 선택하세요.</p>
          <p class="main_txt2">
            의로인으로 가입 후 에도 전문가 등록이 가능합니다.
          </p>
          <p class="main_txt3">서비스를 의뢰하고 싶다면?</p>
          <a class="select1" href="../html/sign_in.php">
            <label for="choose1" class="label1">
              <img src="../images/selcet_sign_check.png" alt="" />
              <span> 의뢰인으로 가입 </span></label>
            <input id="choose1" class="choose1" type="button" name="choose" checked="checked" />
          </a>
          <p class="main_txt4">서비스를 판매하고 싶다면?</p>
          <a class="select2" href="../html/expert_signin.php">
            <label for="choose2" class="label2">
              <img src="../images/selcet_sign_check.png" alt="" /><span>전문가로 가입</span></label>
            <input class="choose2" id="choose2" type="button" name="choose" />
          </a>
        </div>
      </div>
    </main>
    <!-- footer -->
    <?php include "../inc/footer.php" ?>
  </div>
</body>

</html>