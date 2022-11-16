<?php
include "../inc/session.php";
include "../inc/dbcon.php";
$n_idx = $_GET["n_idx"];
$n_title = $_POST["n_title"];
$n_content = $_POST["n_content"];
$w_date = date("Y-m-d");
$sql = "update notice set n_title='$n_title' , n_content='$n_content' , w_date='$w_date' where idx = '$n_idx';";
mysqli_query($dbcon, $sql);
mysqli_close($dbcon);

// 완료 되면 페이지 이동 script  (리디렉션)

echo "<script type=\"text/javascript\">
location.href = \"view.php?n_idx=$n_idx\";
</script>";

// 