<?php
session_start();
include "../inc/session.php";
include "../inc/dbcon.php";
$g_idx = $_GET["g_idx"];
$sql =
  "select * from members where idx='$g_idx';";
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
          <h2>회원 정보 수정</h2>
          <h4>이름</h4>
          <div class="profile_name">
            <span><?php echo $array["u_name"] ?></span>
            <img src="../../images/event_btn_next.jpg" alt="" />
          </div>
          <h4>이메일</h4>
          <a href="mypage_change_email.php?g_idx=<?php echo $array["idx"] ?>" class="profile_email">
            <span><?php echo $array["u_id"] ?></span>
            <img src="../../images/event_btn_next.jpg" alt="" />
          </a>
          <h4>비밀번호</h4>
          <a href="javascript:void(0)" class="profile_pw">
            <span><?php
                  echo preg_replace('/[A-za-z0-9]/', '*', $array['pwd']); ?></span>
            <img src="../../images/event_btn_next.jpg" alt="" />
          </a>
          <h4>휴대폰 번호</h4>
          <a href="mypage_change_phone.php?g_idx=<?php echo $array["idx"] ?>" class="profile_number">
            <span><?php echo $array["mobile"] ?></span>
            <img src="../../images/event_btn_next.jpg" alt="" />
          </a>
          <h4>직업</h4>
          <a href="mypage_change_job.php?g_idx=<?php echo $array["idx"] ?>" class="profile_number">
            <span><?php echo $array["job"] ?></span>
            <img src="../../images/event_btn_next.jpg" alt="" />
          </a>
          <h4>비즈니스</h4>
          <a href="mypage_change_bsn.php?g_idx=<?php echo $array["idx"] ?>" class="profile_number">
            <span><?php echo $array["bsn"] ?></span>
            <img src="../../images/event_btn_next.jpg" alt="" />
          </a>
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