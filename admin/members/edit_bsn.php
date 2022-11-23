<?php
include "../inc/session.php";
include "../inc/dbcon.php";
$g_idx = $_POST["g_idx"];
$bsn = $_POST["business"];
$sql = "update members set bsn = '$bsn' where idx = '$g_idx';";
$result = mysqli_query($dbcon, $sql);
echo
"<script type=\"text/javascript\">
alert(\"수정 되었습니다.\");
location.href=\"edit_user.php?g_idx=$g_idx\";
</script>";
mysqli_close($dbcon);