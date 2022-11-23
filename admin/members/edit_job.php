<?php
include "../inc/session.php";
include "../inc/dbcon.php";
$g_idx = $_POST["g_idx"];
$job = $_POST["job"];
$sql = "update members set job = '$job' where idx = '$g_idx';";
$result = mysqli_query($dbcon, $sql);
echo
"<script type=\"text/javascript\">
alert(\"수정 되었습니다.\");
location.href=\"edit_user.php?g_idx=$g_idx\";
</script>";
mysqli_close($dbcon);