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
  <link rel="stylesheet" href="../css/sign_in.css" />
  <!-- Script -->
  <script src="https://kit.fontawesome.com/75062a3531.js" crossorigin="anonymous"></script>
  <!-- jquery -->
  <script src="../js/jquery-3.6.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/ScrollTrigger.min.js"></script>
  <script defer src="../js/nav_hover.js"></script>
  <script defer src="../js/sign_in.js"></script>
  <script src="../js/to_top.js"></script>
  <title>Helper Sign in</title>
</head>

<body>
  <div class="body_inner">
    <!-- header -->
    <?php include "../inc/header.php" ?>
    <!-- main -->
    <main>
      <h2 class="main_logo">Helper</h2>
      <div class="main_inner">
        <form action="insert.php" name="sign_form" onsubmit="return form_check();" method="post">
          <div class="main_box">
            <h3 class="main_title hidden">의뢰자 회원가입</h3>
            <div class="info_box">
              <p class="info_name">
                <label for="u_name" class="label">이름</label>
                <input type="text" id="u_name" placeholder="이름을 입력해주세요." name="u_name" />
                <span class="err_txt" id="err_name"></span>
              </p>
              <p class="info_id">
                <label for="u_id" class="label">이메일</label>
                <input type="text" id="u_id" name="u_id" placeholder="이메일을 입력해주세요." />
                <span class="err_txt" id="err_id"></span>
              </p>
              <p>
                <label for="u_pw" class="label">비밀번호</label>
                <input id="u_pw" class="info_pw" type="password" name="pwd" placeholder="비밀번호를 입력해 주세요.(6자리 이상)" />
                <span class="err_txt_pw" id="err_pw"></span>
                <input id="re_pw" type="password" placeholder="비밀번호를 한번 더 입력해 주세요." />
                <span class="err_txt_pw" id="err_re_pw"></span>
              </p>
            </div>
            <div class="checkbox">
              <input type="checkbox" class="terms_checkbox" id="terms" />
              <label for="terms" class="terms_check"><span><a href="#">이용약관</a></span>,<span><a href="#">개인정보</a></span>
                수집 및 이용 동의
                (필수)</label>
              <span class="err_txt" id="err_terms"></span>
              <input type="checkbox" class="age_checkbox" id="age" />
              <label for="age" class="terms_check">만 14세 이상(필수)</label>
              <span class="err_txt" id="err_age"></span>
            </div>
            <button class="sign_btn" onclick="form_check();">회원가입</button>
            <button class="googlesign_btn">
              <img src="../images/login_google.png" alt="google로 가입하기" />
              구글로 가입하기
            </button>
          </div>
        </form>
      </div>
    </main>
    <!-- footer -->
    <?php include "../inc/footer.php" ?>
  </div>
</body>

</html>