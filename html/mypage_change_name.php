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
  <link rel="stylesheet" href="../css/mypage_change_name.css" />
  <!-- Script -->
  <script src="../js/jquery-3.6.1.min.js"></script>
  <script defer src="../js/index.js"></script>
  <script src="https://kit.fontawesome.com/75062a3531.js" crossorigin="anonymous"></script>
  <script src="../js/to_top.js"></script>
  <title>Document</title>
</head>

<body>
  <div class="body_inner">
    <!-- header -->
    <?php include "../inc/header.php" ?>
    <!-- main -->
    <main>
      <div class="main_inner">
        <h2>이름 수정</h2>
        <div class="exp">
          <img src="../images/mypage_ex_icon.svg" alt="" />
          <span>이름(실명)을 사용하시면 고용률이 150% 높아집니다.</span>
        </div>
        <div>
          <h3>이름</h3>
          <input type="text" placeholder="권기환" />
        </div>
        <div class="end_btn">
          <button class="cancel_btn">취소</button>
          <button class="finish_btn">수정완료</button>
        </div>
      </div>
    </main>
    <!-- footer -->
    <?php include "../inc/footer.php" ?>
  </div>
</body>

</html>