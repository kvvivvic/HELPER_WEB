<?php
//DB 연결
include "../inc/session.php";
include "../inc/dbcon.php";

//데이터 가져오기
$n_idx = $_GET["n_idx"];
//쿼리 작성
$sql = "select * from notice where idx = $n_idx;";
//쿼리 전송
$result = mysqli_query($dbcon, $sql);

//DB 에서 데이터 가져오기
$array = mysqli_fetch_array($result);

//조회수 업데이트
$cnt = $array["cnt"] + 1;
$sql = "update notice set cnt = $cnt where idx =$n_idx;";
mysqli_query($dbcon, $sql);

?>

<!DOCTYPE html>
<html lang="ko">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@400;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="../css/reset.css" />
  <link rel="stylesheet" href="../css/header_footer.css" />
  <link rel="stylesheet" href="../css/notice_view.css" />
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
        <section class="detail_search">
          <p>홈 > 공지사항 > <span>&nbsp공지사항</span></p>
          <form action="">
            <fieldset>
              <div>
                <input type="text" placeholder="검색" />
                <img src="../images/detail_search.jpg" alt="검색" />
              </div>
            </fieldset>
          </form>
        </section>
        <div class="detail_main">
          <aside class="aside_section">
            <h3>이 섹션의 문서</h3>
            <ul>
              <li>
                <a href="view.php?n_idx=<?php echo $array["idx"] ?>">
                </a>
              </li>
            </ul>
          </aside>
          <table class="notice_content">
            <thead>
              <td class="v_title">
                <?php echo $array["n_title"] ?>
              </td>
            </thead>
            <tbody>
              <tr>
                <td class="v_content">
                  <?php
                  $n_content = str_replace("\n", "<br>", $array["n_content"]);
                  $n_content = str_replace(" ", "&nbsp", $n_content);
                  echo $n_content; ?>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <section class="path">
          <div class="path_inner"></div>
        </section>
        <section class="question">
          <div class="question_inner">
            <p>다른 질문이 있으십니까?</p>
          </div>
        </section>
        <section class="inquiry">
          <div class="inquiry_inner">
            <button>문의하기</button>
          </div>
        </section>
      </div>
    </main>
    <!-- footer -->
    <?php include "../inc/footer.php" ?>
  </div>
</body>

</html>