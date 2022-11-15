<?php
include "../inc/session.php";
include "../inc/dbcon.php";
$mobile = $_POST["mobile"];
$sql = "update members set mobile = '$mobile' where u_id = '$s_id';";
$result = mysqli_query($dbcon, $sql);
echo
"<script type=\"text/javascript\">
alert(\"수정 되었습니다.\");
location.href=\"mypage.php?u_id=$s_id\";
</script>";
mysqli_close($dbcon);