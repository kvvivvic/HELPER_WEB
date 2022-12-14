<?php
include "../inc/session.php";
?>


<!DOCTYPE html>
<html lang="ko">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="favicon" href="./images/favicon.ico">
  <link rel="shortcut icon" type="image/x-icon" href="../images/favicon.ico" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@400;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="../css/reset.css" />
  <link rel="stylesheet" href="../css/header_footer.css" />
  <link rel="stylesheet" href="../css/notice_write.css" />
  <!-- Script -->
  <script src="../js/jquery-3.6.1.min.js"></script>
  <script src="https://kit.fontawesome.com/75062a3531.js" crossorigin="anonymous"></script>
  <script defer src="../js/nav_hover.js"></script>
  <script defer src="../js/notice_write.js"></script>
  <script src="../js/to_top.js"></script>
  <title>Document</title>
  <Script>
  function notice_check() {
    var n_title = document.getElementById("n_title");
    var n_content = document.getElementById("n_content");
    if (!n_title.value) {
      alert("제목을 입력하세요");
      n_title.focus();
      return false;
    }
    if (!n_content.value) {
      alert("내용을 입력하세요");
      n_content.focus();
      return false;
    }
  }
  // $(document).ready(function() {
  //   $('#n_title, #n_content').change(function() {
  //     $(".n_btn").css("color", "#ffd300");
  //   });
  // });
  $(document).ready(function() {
    $('#n_title, #n_content').on("propertychange change keyup paste input", function() {
      $(".n_btn").css("color", "#ffd300");
    });
  });

  function back() {
    history.back();
  }
  </Script>
</head>

<body>
  <div class="body_inner">
    <!-- header -->
    <?php include "../inc/header.php"  ?>
    <!-- main -->
    <main>
      <form action="insert.php" method="post" name="text_form" id="text_form" onsubmit="return notice_check()">
        <fieldset>
          <section class="select_notice">
            <div class="select">
              <span>게시판 선택</span>
              <img src="../images/select_dropdown.png" alt="" />
            </div>
            <div class="write">
              <button class="n_btn" type="button" onclick="back()">취소</button>
              <button class="n_btn" type="submit">등록</button>
            </div>
          </section>
          <section class="picture">
            <div class="select_picture">
              <img src="../images/select_picture.png" alt="" />
              <span>0 / 15</span>
            </div>

          </section>

          <label class="n_title">
            <input type="text" placeholder="제목을 입력해주세요." value="" id="n_title" name="n_title" />
          </label>
          <label class="n_content">
            <p>내용</p>
          </label>
          <section class="textra">
            <textarea name="n_content" id="n_content"></textarea>
        </fieldset>
      </form>
      </section>
    </main>
    <!-- footer -->
    <?php include "../inc/footer.php" ?>
  </div>
</body>

</html>