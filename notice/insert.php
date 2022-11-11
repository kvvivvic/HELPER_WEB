<?php
// 작성자 입력을 위한 session 가져오기
include "../inc/session.php";

$n_title = $_POST["n_title"];
$n_content = $_POST["n_content"];

// 작성일자
$w_date = date("Y-m-d");

// echo "<p>제목 : " . $n_title . "</p>";
// echo "<p>내용 : " . $n_content . "</p>";
// echo "<p>작성자 : " . $s_name . "</p>";
// echo "<p>작성일자 : " . $reg_date . "</p>";

//DB 연결
include "../inc/dbcon.php";

//데이터 저장 쿼리 작성

$sql = "insert into notice (n_title,n_content,writer,w_date) values ('$n_title' , '$n_content' , '$s_name','$w_date');";

//데이터 베이스로 데이터 전송
mysqli_query($dbcon, $sql);


//DB 접속 종료
mysqli_close($dbcon);

// 완료 되면 페이지 이동 script  (리디렉션)

echo "<script type=\"text/javascript\">
location.href = \"list.php\";
</script>";

// 