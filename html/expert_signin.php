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
  <link rel="stylesheet" href="../css/expert_signin.css" />
  <!-- Script -->
  <script src="../js/jquery-3.6.1.min.js"></script>
  <script defer src="../js/index.js"></script>
  <script src="https://kit.fontawesome.com/75062a3531.js" crossorigin="anonymous"></script>
  <script defer src="../js/expert_signin.js"></script>
  <title>expert_signin</title>
</head>

<body>
  <div class="body_inner">
    <!-- header -->
    <?php include "../inc/header.php" ?>
    <!-- main -->
    <main>
      <h2 class="main_logo">Helper</h2>
      <div class="main_inner">
        <form action="insert.php" name="expert_sign_form" onsubmit="return form_check()" id="sign_form"
          class="sign_form" method="post">
          <fieldset>
            <div class="main_box">
              <h3 class="main_title hidden">의뢰자 회원가입</h3>
              <div class="info_box">
                <label class="u_name">
                  <p>이름</p>
                  <input type="text" placeholder="이름을 입력해주세요." id="u_name" class="u_name" />
                  <span class="err_txt" id="err_name"></span>
                </label>
                <label class="info_id">
                  <h3>이메일</h3>
                  <input type="text" id="u_id" class="u_id" placeholder="이메일을 입력해주세요." />
                  <span class="err_txt" id="err_id"></span>
                </label>
                <label>
                  <p>비밀번호</p>
                  <input class="info_pw" type="password" placeholder="비밀번호를 입력해주세요.(6자리 이상)" id="u_pw" />
                  <span class="err_txt" id="err_pw"></span>
                  <input type="password" placeholder="비밀번호를 한번 더 입력해주세요." id="re_pw" class="re_pw" />
                  <span class="err_txt" id="err_re_pw"></span>
                </label>
              </div>
              <div class="job">
                <p>직업</p>
                <button type="button" class="job_input" id="job_input">
                  <input type="hidden" name="job" class="job" />
                  <label for="job_input" class="job_input_value" id="job_input_value">직업을 선택해주세요.</label>
                  <ul class="job_menu">
                    <li class="job_list job_list1">프리랜서</li>
                    <li class="job_list job_list2">소상공인</li>
                    <li class="job_list job_list3">직장인</li>
                    <li class="job_list job_list4">대학(원)생</li>
                    <li class="job_list job_list5">무직</li>
                  </ul>
                </button>
              </div>
              <div class="business">
                <p>비즈니스</p>
                <button type="button" class="bs_input" id="bs_input">
                  <label for="bs_input" class="bs_input_value" id="bs_input_value">비즈니스를 선택해주세요.</label>
                  <input type="hidden" name="business" class="business" />
                  <ul class="bs_menu">
                    <li class="bs_list bs_list1">쇼핑몰</li>
                    <li class="bs_list bs_list2">IT 개발</li>
                    <li class="bs_list bs_list3">예술·스포츠·여가</li>
                    <li class="bs_list bs_list4">학원·교육</li>
                  </ul>
                </button>
              </div>
              <div class="phone">
                <p>휴대전화 번호 인증</p>
                <div class="phone_number">
                  <input class="number_input" type="text" placeholder="- 를 제외하고 입력해주세요." />
                </div>
                <div class="cert_btn_inner">
                  <button class="cert_btn">인증하기</button>
                </div>
              </div>
              <div class="checkbox">
                <input type="checkbox" class="terms_checkbox" id="terms" />
                <label for="terms"><span><a href="#">이용약관</a></span>,<span><a href="#">개인정보</a></span> 수집 및 이용 동의
                  (필수)</label>
                <span class="err_txt" id="err_terms"></span>
                <input type="checkbox" class="age_checkbox" id="age" />
                <label for="age">만 14세 이상(필수)</label>
                <span class="err_txt" id="err_age"></span>
              </div>
              <button class="sign_btn" onclick="return form_check();">
                회원가입
              </button>
              <button class="googlesign_btn">
                <img src="../images/login_google.png" alt="google로 가입하기" />
                구글로 가입하기
              </button>
            </div>
          </fieldset>
        </form>
      </div>
    </main>
    <!-- footer -->
    <?php include "../inc/footer.php" ?>
  </div>
</body>

</html>