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
  <link rel="stylesheet" href="../css/notice_view.css" />
  <!-- Script -->
  <script src="../js/jquery-3.6.1.min.js"></script>
  <script src="https://kit.fontawesome.com/75062a3531.js" crossorigin="anonymous"></script>
  <script defer src="../js/nav_hover.js"></script>
  <title>Document</title>
</head>

<body>
  <div class="body_inner">
    <!-- header -->
    <?php include "../inc/header.php" ?>
    <!-- main -->
    <main>
      <div class="main_inner">
        <section class="detail_search">
          <p>홈 > 고객센터 > 공지사항 > <span>공지사항</span></p>
          <div>
            <input type="text" placeholder="검색" />
            <img src="../images/detail_search.jpg" alt="검색" />
          </div>
        </section>
        <div class="detail_main">
          <aside class="aside_section">
            <h3>이 섹션의 문서</h3>
            <ul>
              <li>[2022.22.22] 위치기반 서비스 이용약관 개정안내</li>
              <li>[2022.22.22] 개인정보 처리방침 안내</li>
              <li>[2022.22.22] 제4회 헬퍼 주식회사 결산 공고</li>
              <li>[2022.22.22] 헬퍼 커뮤니티 오픈 예정</li>
              <li>[2022.22.22] 헬퍼 공식 홈페이지 오픈</li>
            </ul>
          </aside>
          <section class="notice_content">
            <div class="notice_content_inner">
              <h3>
                [2022.22.22] 위치기반 서비스 <br />
                이용약관 개정안내
              </h3>
              <p>
                모든 국민은 근로의 의무를 진다. 국가는 근로의 의무의 내용과
                조건을 민주주의원칙에 따라 법률로 정한다. <br />
                형사피고인은 유죄의 판결이 확정될 때까지는 무죄로 추정된다.
                <br /><br />
                대한민국의 주권은 국민에게 있고, 모든 권력은 국민으로부터
                나온다. 모든 국민은 행위시의 법률에 의하여 <br />
                범죄를 구성하지 아니하는 행위로 소추되지 아니하며, 동일한
                범죄에 대하여 거듭 처벌받지 아니한다. <br /><br />
                모든 국민은 신속한 재판을 받을 권리를 가진다. 형사피고인은
                상당한 이유가 없는 한 지체없이 공개재판을 <br />
                받을 권리를 가진다. 국회는 정부의 동의없이 정부가 제출한
                지출예산 각항의 금액을 증가하거나 새 비목을 설치할 수 없다.
                <br /><br />
                사법권은 법관으로 구성된 법원에 속한다. 공무원은 국민전체에
                대한 봉사자이며, 국민에 대하여 책임을 진다. <br />
                대법원장과 대법관이 아닌 법관은 대법관회의의 동의를 얻어
                대법원장이 임명한다. <br /><br />
                헌법개정안이 제2항의 찬성을 얻은 때에는 헌법개정은 확정되며,
                대통령은 즉시 이를 공포하여야 한다. <br />
                국가는 농수산물의 수급균형과 유통구조의 개선에 노력하여
                가격안정을 도모함으로써 농·어민의 이익을 보호한다.
                <br /><br />
                외국인은 국제법과 조약이 정하는 바에 의하여 그 지위가
                보장된다. 누구든지 체포 또는 구속을 당한 때에는 <br />
                적부의 심사를 법원에 청구할 권리를 가진다. <br /><br />
                법관이 중대한 심신상의 장해로 직무를 수행할 수 없을 때에는
                법률이 정하는 바에 의하여 퇴직하게 할 수 있다. <br />
                근로자는 근로조건의 향상을 위하여 자주적인 단결권·단체교섭권
                및 단체행동권을 가진다. <br /><br />
              </p>
            </div>
          </section>
        </div>
        <section class="path">
          <div class="path_inner"></div>
        </section>
        <section class="question">
          <div class="question_inner">
            <p>다른 질문이 있으십니까?</p>
          </div>
        </section>
        <section class="inquiry">
          <div class="inquiry_inner">
            <button>문의하기</button>
          </div>
        </section>
      </div>
    </main>
    <!-- footer -->
    <?php include "../inc/footer.php" ?>
  </div>
</body>

</html>