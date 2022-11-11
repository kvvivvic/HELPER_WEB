<?php
//에러 확인 코드
// error_reporting(E_ALL);
// ini_set("display_errors",1);

$u_name = $_POST["u_name"];
$u_id = $_POST["u_id"];
$pwd = $_POST["pwd"];
$job = $_POST[""];

// 날짜구하기
$reg_date = date("Y-m-d");

// echo "<p> 이름 :".$u_name."</p>";
// echo "<p> 아이디 :".$u_id."</p>";
// echo "<p> 비밀번호 :".$pwd."</p>";
// echo "<p> 전화번호 :".$mobile."</p>";
// echo "<p> 이메일 :".$email."</p>";
// echo "<p> 생년월일 :".$birth."</p>";
// echo "<p> 우편번호 :".$ps_code."</p>";
// echo "<p> 기본주소 :".$addr_b."</p>";
// echo "<p> 상세주소 :".$addr_d."</p>";
// echo "<p> 성별 :".$gender."</p>";
// echo "<p> 가입일 :".$reg_date."</p>";


//DB 연결

$dbcon = mysqli_connect("localhost", "root", "1232", "helper") or die("접속에 실패하였습니다");
// mysqli_set_charset($dbcon, "utf8");

include "../inc/dbcon.php";

//데이터 저장 쿼리 작성

// $sql = "insert into members (";
// $sql .= "u_name ,u_id ,pwd ,";
// $sql .= "mobile, birth,email,";
// $sql .= "ps_code ,addr_b , addr_d ,";
// $sql .= "gender ,reg_date";
// $sql .= ") values(";
// $sql .= "'$u_name' , '$u_id' ,'$pwd',";
// $sql .= "'$mobile','$birth','$email',";
// $sql .= "'$ps_code','$addr_b','$addr_d',";
// $sql .= "'$gender','$reg_date'";
// $sql .= ");";


$sql = "insert into members (
  u_name , u_id ,pwd ,reg_date
) values (
  '$u_name','$u_id','$pwd','$reg_date'
);";

//데이터 베이스로 데이터 전송
mysqli_query($dbcon, $sql);


//DB 접속 종료
mysqli_close($dbcon);

// 완료 되면 페이지 이동 script  (리디렉션)

echo "<script type=\"text/javascript\">
location.href = \"../html/complete_signin.html\";
</script>";

// 
?>

<!-- 완료 되면 페이지 이동 script  (리디렉션)-->

<script type="text/javascript">
// location.href = ""
location.href = "../html/complete_signin.html";
</script>