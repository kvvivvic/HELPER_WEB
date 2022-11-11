<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

session_start();

//세션 삭제
//unset(세션변수);
unset($_SESSION["s_idx"]);
unset($_SESSION["s_name"]);
unset($_SESSION["s_id"]);

//페이지 이동
echo
"<script type=\"text/javascript\">
alert(\"로그아웃 되었습니다.\");
  location.href=\"http://localhost/HELPER_WEB/index.php\";
  </script>";