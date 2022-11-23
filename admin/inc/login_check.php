<?php
//관리자만 들어올 수 있게 하기
if ($s_id != "admin@google.co.kr") {
  echo "
  <script>
    alert(\"관리자 로그인이 필요합니다.\");
    location.href = \"http://localhost/helper_web/html/login_page.php\";
  </script>
";
}