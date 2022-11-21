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
  <link rel="stylesheet" href="../css/login_page.css" />
  <!-- Script -->
  <script src="../js/jquery-3.6.1.min.js"></script>
  <script defer src="../js/nav_hover.js"></script>
  <script defer src="../js/login_page.js"></script>
  <script src="../js/to_top.js"></script>
  <script src="https://kit.fontawesome.com/75062a3531.js" crossorigin="anonymous"></script>
  <title>Helper Login</title>
</head>

<body>
  <div class="body_inner">
    <!-- header -->
    <?php include "../inc/header.php" ?>
    <!-- main -->
    <main>
      <div class="main_inner">
        <form action="login.php" class="login_form" id="login_form" name="login_form" method="post"
          onsubmit="return form_check();">
          <fieldset>
            <legend class="hidden">로그인</legend>
            <h2 class="signin">로그인</h2>
            <p class="forget"><a href="#">비밀번호를 잊어버리셨나요?</a></p>
            <input type="text" class="login_input login_id" placeholder="이메일을 입력하세요." id="u_id" name="u_id" />
            <span class="err_txt" id="err_id"></span>
            <input type="password" class="login_input login_pw" placeholder="비밀번호를 입력하세요." id="pwd" name="pwd" />
            <span class="err_txt" id="err_pwd"></span>
            <button class="login_btn" type="submit">로그인</button>
            <button type="button" class="signin_btn" onclick="location.href='../html/select_signin.html'">
              회원가입
            </button>
          </fieldset>
        </form>
        <div class="other_login">
          <h3>다른 방법으로 로그인하기</h3>
          <ul class="other_login_list">
            <li>
              <p class="login_kakao"><a href="#">카카오</a></p>
            </li>
            <li>
              <p class="login_google"><a href="#">구글</a></p>
            </li>
            <li>
              <p class="login_facebook"><a href="#">페이스북</a></p>
            </li>
            <li>
              <p class="login_twitter"><a href="#">트위터</a></p>
            </li>
            <li>
              <p class="login_line"><a href="#">라인</a></p>
            </li>
            <li>
              <p class="login_apple"><a href="#">애플</a></p>
            </li>
          </ul>
        </div>
      </div>
    </main>
    <!-- footer -->
    <?php include "../inc/footer.php" ?>
  </div>
</body>

</html>