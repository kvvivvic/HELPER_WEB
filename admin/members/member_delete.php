<?php
//데이터 가져오기  - POST 방식 활용 [이전 페이지에 hidden 필드 사용]
$g_idx = $_GET["g_idx"];
//데이터 가져오기  - get 방식 활용 [페이지 경로에 데이터 포함]
// $g_idx = $_GET["g_idx"];
//DB 연결
include "../inc/dbcon.php";
//쿼리 작성
$sql = "delete from members where idx=$g_idx";
//쿼리 전송 
mysqli_query($dbcon, $sql);


//DB 종료
mysqli_close($dbcon);

//세션 삭제
// unset(세션변수);
// unset($_SESSION["s_idx"]);
// unset($_SESSION["s_name"]);
// unset($_SESSION["s_id"]);

// 페이지 이동

echo
"<script type=\"text/javascript\">
  alert(\"삭제가 완료되었습니다.\");
  location.href=\"list.php\";
  </script>";