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
  <link rel="stylesheet" href="../css/mypage_change_pw.css" />
  <!-- Script -->
  <script src="../js/jquery-3.6.1.min.js"></script>
  <script src="https://kit.fontawesome.com/75062a3531.js" crossorigin="anonymous"></script>
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
        <form action="edit_pwd.php" method="post" name="edit_pwd_form">
          <fieldset>
            <h2>비밀번호 변경</h2>
            <div>
              <h3>기존 비밀번호</h3>
              <input type="password" placeholder="현재 비밀번호를 입력해 주세요." name="pwd" />
              <span class="err_txt" id="err_pw"></span>
            </div>
            <div>
              <h3>새로운 비밀번호</h3>
              <input type="password" placeholder="영문 + 숫자 조합 8자리 이상 입력해주세요." name="new_pwd" />
              <span class="err_txt" id="err_new_pwd"></span>
            </div>
            <div>
              <h3>새로운 비밀번호 확인</h3>
              <input type="password" placeholder="비밀번호를 한번 더 입력해주세요." name="re_new_pwd" />
            </div>
            <div class="end_btn">
              <button class="cancel_btn">취소</button>
              <button class="finish_btn" type="submit">수정완료</button>
            </div>
          </fieldset>
        </form>
      </div>
    </main>
    <!-- footer -->
    <?php include "../inc/footer.php" ?>
  </div>
</body>

</html>