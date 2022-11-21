<?php
include "../inc/session.php";
include "../inc/dbcon.php";
$sql = "select * from notice;";
$result = mysqli_query($dbcon, $sql);
$total = mysqli_num_rows($result);

//paging
$list_num = 5; //한 페이지 당 보여질 목록 수 
$page_num = 3; //한 블럭 당 페이지 수
$page = $_GET["page"];
$page = isset($page) ? $page : 1; //현재 페이지
$total_page = ceil($total / $list_num); //전체페이지수 = 전체 데이터 / 페이지 당 목록 수 ceil
// echo "전체 페이지 수 : ".$total_page;
// exit;
$total_block = ceil($total_page / $page_num); //전체 블럭수 : 전체 페이지 / 블럭 당 페이지 수 ceil
$now_block = ceil($page / $page_num); //현재 블럭 번호 : 전체 페이지 번호 / 블럭 당 페이지 수
//블럭당 시작 페이지 번호 :  (해당 글의 블럭 번호 -1) * 블럭 당 페이지 수 + 1 
$s_pageNum = ($now_block - 1) * $page_num + 1;
if ($s_pageNum <= 0) {
  $s_pageNum = 1;
}
//블럭당 마지막 페이지 번호 : 현재블럭 번호 * 블럭 당 페이지 수
$e_pageNum = $now_block * $page_num;
if ($e_pageNum > $total_page) {
  $e_pageNum = $total_page;
}
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
  <link rel="stylesheet" href="../css/notice_list.css" />
  <!-- Script -->
  <script src="../js/jquery-3.6.1.min.js"></script>
  <script src="https://kit.fontawesome.com/75062a3531.js" crossorigin="anonymous"></script>
  <script defer src="../js/nav_hover.js"></script>
  <script src="../js/to_top.js"></script>
  <title>Helper notice</title>
</head>

<body>
  <div class="body_inner">
    <!-- header -->
    <?php include "../inc/header.php" ?>
    <!-- main -->
    <main>
      <div class="main_inner">
        <h4>
          <a href="../index.html">홈</a> > <a href="#">고객센터</a> >
          <span><a href="#">공지사항</a></span>
        </h4>
        <h2>공지사항</h2>
        <section class="main_box">
          <?php if ($s_id === "admin@google.co.kr") { ?>
          <button class="write_btn">
            <a href="write.php"> 글쓰기 </a>
          </button>
          <?php }; ?>
          <form action="">
            <div class="dropdown">
              <button class="dropdown_btn" type="button">
                <span>제목 </span>
                <img src="../images/notice_dropdown_btn.jpg" alt="" />
              </button>
              <div class="dropdown-content">
                <p>list1</p>
                <p>list2</p>
                <p>list3</p>
                <p>list4</p>
              </div>
            </div>
            <div class="search_box">
              <input type="text" placeholder="검색어 입력" class="notice_search" />
              <img src="../images/notice_search.jpg" alt="검색" />
            </div>
          </form>
          <div class="notice_list">
            <table class="mem_list_set">
              <?php
              //해당 페이지의 글 시작 번호 = (현재 페이지 번호 - 1 ) * 페이지 당 보여질 목록 수
              $start = ($page - 1) * $list_num;
              //시작번호부터 페이지 당 보여질 목록 수 만큼 구하는 쿼리 작성
              $sql = "select * from notice order by idx desc limit $start , $list_num;";

              //DB에 데이터 전송
              $result = mysqli_query($dbcon, $sql);

              //DB에서 데이터 가져오기
              //글번호(역순)
              //전체데이터 - ((현재 페이지 번호-1) * 페이지당 목록 수)
              $i = $total - (($page - 1) * $list_num);
              while ($array = mysqli_fetch_array($result)) {
              ?>
              <tr class="notice_list_content">
                <td class="no"><?php echo $array["idx"]; ?></td>
                <td class="notice_content_title">
                  <a href="view.php?n_idx=<?php echo $array["idx"]; ?>">
                    <?php echo $array["n_title"] ?></a>
                </td>
                <?php $w_date = substr($array["w_date"], 0, 10); ?>
                <td class="date"><?php echo $w_date ?></td>
              </tr>
              <?php
                $i--;
              }; ?>

            </table>
            <div class="pager">
              <?php
              // pager : 이전 페이지
              if ($page <= 1) {    ?>
              <a href="list.php?page=1"><img src="../images/page_prev.jpg" alt=""></a>
              <?php } else { ?>
              <a href="list.php?page=<?php echo ($page - 1); ?>"><img src="../images/page_prev.jpg" alt=""></a>
              <?php }; ?>
              <?php
              //pager : 페이지 번호 출력
              for ($print_page = $s_pageNum; $print_page <= $e_pageNum; $print_page++) {
              ?>
              <a href="list.php?page=<?php echo $print_page; ?>" class="page_no"><?php echo $print_page; ?></a>
              <?php }; ?>
              <?php
              // pager : 다음 페이지
              if ($page >= $total_page) {    ?>
              <a href="list.php?page=<?php echo $total_page; ?>"><img src="../images/page_next.jpg" alt=""></a>
              <?php } else { ?>
              <a href="list.php?page=<?php echo ($page + 1); ?>"><img src="../images/page_next.jpg" alt=""></a>
              <?php }; ?>
            </div>
          </div>
        </section>
      </div>
    </main>
    <!-- footer -->
    <?php include "../inc/footer.php" ?>
  </div>
</body>

</html>