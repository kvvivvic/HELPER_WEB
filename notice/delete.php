<?php
//데이터 가져오기  - POST 방식 활용 [이전 페이지에 hidden 필드 사용]
$n_idx = $_GET["n_idx"];

//데이터 가져오기  - get 방식 활용 [페이지 경로에 데이터 포함]
// $g_idx = $_GET["g_idx"];
//DB 연결
include "../inc/dbcon.php";
//쿼리 작성
$sql = "delete from notice where idx=$n_idx;";

//쿼리 전송 
mysqli_query($dbcon, $sql);


//DB 종료
mysqli_close($dbcon);

// 페이지 이동

echo
"<script type=\"text/javascript\">
  alert(\"삭제가 완료되었습니다.\");
  location.href=\"list.php\";
  </script>";