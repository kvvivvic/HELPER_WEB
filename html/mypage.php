<?php
session_start();
include "../inc/session.php";
include "../inc/dbcon.php";
$sql =
  "select idx ,u_name ,u_id, pwd ,mobile from members where u_id='$s_id';";
$result = mysqli_query($dbcon, $sql);
$array = mysqli_fetch_array($result);
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
  <link rel="stylesheet" href="../css/mypage.css" />
  <!-- Script -->
  <script src="../js/jquery-3.6.1.min.js"></script>
  <script src="https://kit.fontawesome.com/75062a3531.js" crossorigin="anonymous"></script>
  <script defer src="../js/nav_hover.js"></script>
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
        <section class="main_box">
          <h2>마이페이지</h2>
          <div class="profile_image_inner">
            <div class="profile_image"></div>
            <input type="image" />
          </div>
          <div class="profile_coupon">
            <img class="coupon_img" src="../images/mypage_coupon.png" alt="" class="coupon_img" />
            <span class="coupon_txt">쿠폰함</span>
            <img class="coupon_next" src="../images/event_btn_next.jpg" alt="" />
          </div>
          <h4>이름</h4>
          <div class="profile_name">
            <span><?php echo $array["u_name"] ?></span>
            <img src="../images/event_btn_next.jpg" alt="" />
          </div>
          <h4>이메일</h4>
          <a href="mypage_change_email.php" class="profile_email">
            <span><?php echo $array["u_id"] ?></span>
            <img src="../images/event_btn_next.jpg" alt="" />
          </a>
          <h4>비밀번호</h4>
          <a href="mypage_change_pw.php" class="profile_pw">
            <span><?php
                  echo preg_replace('/[A-za-z0-9]/', '*', $array['pwd']); ?></span>
            <img src="../images/event_btn_next.jpg" alt="" />
          </a>
          <h4>휴대폰 번호</h4>
          <a href="mypage_change_phone.php" class="profile_number">
            <span><?php echo $array["mobile"] ?></span>
            <img src="../images/event_btn_next.jpg" alt="" />
          </a>
          <div class="profile_exit">
            <h4>계정탈퇴</h4>
          </div>
        </section>
      </div>
    </main>
    <!-- footer -->
    <?php include "../inc/footer.php";
    mysqli_close($dbcon);
    ?>
  </div>
</body>

</html>