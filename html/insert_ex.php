<?php
//에러 확인 코드
// error_reporting(E_ALL);
// ini_set("display_errors",1);

$u_name = $_POST["u_name"];
$u_id = $_POST["u_id"];
$pwd = $_POST["pwd"];
$job = $_POST["job"];
$bs = $_POST["business"];
$mobile = $_POST["mobile"];
// 날짜구하기
$reg_date = date("Y-m-d");

//DB 연결

$dbcon = mysqli_connect("localhost", "root", "1232", "helper") or die("접속에 실패하였습니다");

include "../inc/dbcon.php";

//데이터 저장 쿼리 작성

$sql = "insert into members (
  u_name , u_id ,pwd ,mobile,job , bsn ,reg_date
) values (
  '$u_name','$u_id','$pwd' ,'$mobile','$job','$bs','$reg_date'
);";
//데이터 베이스로 데이터 전송
mysqli_query($dbcon, $sql);


//DB 접속 종료
mysqli_close($dbcon);

// 완료 되면 페이지 이동 script  (리디렉션)

echo "<script type=\"text/javascript\">
location.href = \"../html/complete_signin.php\";
</script>";

// 
?>

<!-- 완료 되면 페이지 이동 script  (리디렉션)-->

<!-- <script type="text/javascript">
// location.href = ""
location.href = "../html/complete_signin.html";
</script> -->