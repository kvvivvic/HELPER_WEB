<?php
include "../inc/session.php";
include "../inc/login_check.php";

//DB 연결
include "../inc/dbcon.php";
//쿼리 작성
$sql = "select * from members;";
//쿼리 전송
$result = mysqli_query($dbcon, $sql);
// 전체 데이터 가져오기
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
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/reset.css">
  <link rel="stylesheet" href="../css/header_footer.css">
  <link rel="stylesheet" href="../css/list.css">
  <title>회원관리</title>
  <script>
  function mem_del(g_no) {
    var rtn_val = confirm("정말 삭제하시겠습니까?");
    if (rtn_val) {
      location.href = "member_delete.php?g_idx=" + g_no;
    }
  }
  </script>
</head>

<body>
  <?php include "../inc/header.php" ?>
  <!-- 콘텐츠 -->
  <p class="all_user">전체 회원수 <?php echo $total ?>명</p>
  <table class="mem_list_set">
    <tr class="mem_list_title">
      <th class="no">번호</th>
      <th class="u_name">이름</th>
      <th class="u_id">아이디</th>
      <th class="mobile">전화번호</th>
      <th class="type">타입</th>
      <th class="job">직업</th>
      <th class="bsn">비즈니스</th>
      <th class="reg_date">가입일</th>
      <td class="modify">관리</td>
    </tr>
    <?php
    //해당 페이지의 글 시작 번호 = (현재 페이지 번호 - 1 ) * 페이지 당 보여질 목록 수
    $start = ($page - 1) * $list_num;
    //시작번호부터 페이지 당 보여질 목록 수 만큼 구하는 쿼리 작성
    $sql = "select * from members limit $start, $list_num;";

    //DB에 데이터 전송
    $result = mysqli_query($dbcon, $sql);

    //DB에서 데이터 가져오기
    //글번호
    $i = $start + 1;
    while ($array = mysqli_fetch_array($result)) {

    ?>
    <tr class="mem_list_content">
      <td class="no"><?php echo $i ?></td>
      <td class="u_name"><?php echo $array["u_name"] ?></td>
      <td class="u_id"><?php echo $array["u_id"] ?></td>
      <td class="mobile"><?php echo $array["mobile"] ?></td>
      <td class="type"><?php echo $array["type"] ?></td>
      <td class="job"><?php echo $array["job"] ?></td>
      <td class="bsn"><?php echo $array["bsn"] ?></td>
      <td class="reg_date"><?php echo $array["reg_date"] ?></td>
      <td class="modify">
        <a href="edit_user.php?g_idx=<?php echo $array["idx"] ?>">[수정]</a>
        <a href="member_delete.php?g_idx=<?php echo $array["idx"] ?>"
          onclick="mem_del(<?php echo $array['idx'] ?>)">[삭제]</a>
      </td>
    </tr>
    <?php
      $i++;
      // DB커서를 다음줄로 이동
    }; ?>
  </table>
  <p class="pager">
    <?php
    // pager : 이전 페이지
    if ($page <= 1) {    ?>
    <a href="list.php?page=1">이전</a>
    <?php } else { ?>
    <a href="list.php?page=<?php echo ($page - 1); ?>">이전</a>
    <?php }; ?>
    <?php
    //pager : 페이지 번호 출력
    for ($print_page = $s_pageNum; $print_page <= $e_pageNum; $print_page++) {
    ?>
    <a class="pager_link" href="list.php?page=<?php echo $print_page; ?>"><?php echo $print_page; ?></a>
    <?php }; ?>
    <?php
    // pager : 다음 페이지
    if ($page >= $total_page) {    ?>
    <a href="list.php?page=<?php echo $total_page; ?>">다음</a>
    <?php } else { ?>
    <a href="list.php?page=<?php echo ($page + 1); ?>">다음</a>
    <?php }; ?>


  </p>
</body>

</html>