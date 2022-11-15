<?php
include "../inc/session.php";
include "../inc/dbcon.php";
$pwd = $_POST["pwd"];
$new_pwd = $_POST["new_pwd"];
$re_new_pwd = $_POST["re_new_pwd"];

if ($new_pwd != $re_new_pwd) {
  echo " 
  <script> 
  alert(\"변경할 비밀번호가 일치하지 않습니다.\");
  history.back();
  </script>
  ";
} else {
  $sql = "update members set pwd = '$new_pwd' where u_id = '$s_id';";
  $result = mysqli_query($dbcon, $sql);
  echo
  "<script type=\"text/javascript\">
alert(\"수정 되었습니다.\");
location.href=\"mypage.php?u_id=$u_id\";
</script>";
  mysqli_close($dbcon);
}