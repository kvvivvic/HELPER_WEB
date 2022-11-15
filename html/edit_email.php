<?php
include "../inc/session.php";
include "../inc/dbcon.php";
$u_id = $_POST["c_email"];
$sql = "update members set u_id = '$u_id' where u_id = '$s_id';";
$_SESSION["s_id"] = $u_id;
$result = mysqli_query($dbcon, $sql);
echo
"<script type=\"text/javascript\">
alert(\"수정 되었습니다.\");
location.href=\"mypage.php?u_id=$u_id\";
</script>";
mysqli_close($dbcon);