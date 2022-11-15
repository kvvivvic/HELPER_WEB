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
  <link rel="stylesheet" href="../css/mypage_change_phone.css" />
  <!-- Script -->
  <script src="../js/jquery-3.6.1.min.js"></script>
  <script defer src="../js/index.js"></script>
  <script src="https://kit.fontawesome.com/75062a3531.js" crossorigin="anonymous"></script>
  <title>Document</title>
</head>

<body>
  <div class="body_inner">
    <!-- header -->
    <?php include "../inc/header.php" ?>
    <!-- main -->
    <main>
      <div class="main_inner">
        <form action="edit_phone.php" name="mobile_form
        " method="post">
          <fieldset>
            <h2>휴대전화 번호 설정</h2>
            <div class="exp">
              <img src="../images/mypage_ex_icon.svg" alt="" />
              <span>설정한 번호로 헬퍼 알림을 받을 있습니다.</span>
            </div>
            <div>
              <h3>휴대전화 번호 변경</h3>
              <input type="text" placeholder="예) 010-2529-2232" name="mobile" />
              <p>
                전화번호는 절대 공개되지 않으며 , 안심번호를 통해 상담 전화가 올
                수 있습니다.
              </p>
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