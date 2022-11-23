<?php
include "../inc/session.php";

if ($s_id != "admin@google.co.kr") {
  echo "
  <script>
    alert(\"관리자 로그인이 필요합니다\");
    location.href = \"http://localhost/helper_web/\";
  </script>
";
}
?>

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
  <link rel="stylesheet" href="css/style.css" />
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
    <?php include "../admin/inc/header.php" ?>
    <!-- main -->
    <main>
      <div class="main_inner">
        <section class="main_box">
          <h2>관리자 페이지</h2>
          <div class="profile_name">
            <a href="./members/list.php">
              <h4>회원 정보 보기</h4>

            </a>
          </div>
          <a href="../notice/list.php" class="profile_email">
            <h4>게시판 수정</h4>
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