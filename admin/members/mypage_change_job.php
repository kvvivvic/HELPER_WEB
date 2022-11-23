<?php
include "../inc/session.php";
include "../inc/dbcon.php";
$g_idx = $_GET["g_idx"];
$sql = "select * from members where idx='$g_idx';";
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
  <link rel="stylesheet" href="../css/mypage_change_job.css" />
  <!-- Script -->
  <script src="../js/jquery-3.6.1.min.js"></script>
  <script defer src="../js/index.js"></script>
  <script src="https://kit.fontawesome.com/75062a3531.js" crossorigin="anonymous"></script>
  <script src="../js/to_top.js"></script>
  <script defer src="../js/change_job.js"></script>
  <title>Document</title>
</head>

<body>
  <div class="body_inner">
    <!-- header -->
    <?php include "../inc/header.php" ?>
    <!-- main -->
    <main>
      <form class="main_inner" name="edit_email" action="edit_job.php" method="POST">
        <fieldset>
          <h2>직업 수정</h2>
          <div>
            <h3>직업 선택</h3>
            <input type="hidden" name="g_idx" value="<?php echo $array["idx"]; ?>">
            <button type="button" class="job_input" id="job_input">
              <input type="hidden" name="job" class="job" />
              <label for="job_input" class="job_input_value" id="job_input_value">직업을 선택해주세요.</label>
              <ul class="job_menu">
                <li class="job_list job_list1">프리랜서</li>
                <li class="job_list job_list2">소상공인</li>
                <li class="job_list job_list3">직장인</li>
                <li class="job_list job_list4">대학(원)생</li>
                <li class="job_list job_list5">무직</li>
              </ul>
            </button>
          </div>
          <div class="end_btn">
            <button class="cancel_btn">취소</button>
            <button class="finish_btn" type="submit">수정완료</button>
          </div>
        </fieldset>
      </form>
    </main>
    <!-- footer -->
    <?php include "../inc/footer.php";
    mysqli_close($dbcon);
    ?>
  </div>
</body>

</html>