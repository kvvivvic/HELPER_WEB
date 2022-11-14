<?php
include "./inc/session.php";
?>

<!DOCTYPE html>
<html lang="ko">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- Google font -->
  <link rel="favicon" href="./images/favicon.ico">
  <link rel="shortcut icon" type="image/x-icon" href="../HELPER_WEB/images/favicon.ico" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@400;700&display=swap" rel="stylesheet" />
  <!-- Swiper -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
  <!-- link Css -->
  <link rel="stylesheet" href="./css/reset.css" />
  <link rel="stylesheet" href="./css/style.css" />

  <!-- Script -->
  <!-- fontawesome -->
  <script src="https://kit.fontawesome.com/75062a3531.js" crossorigin="anonymous"></script>
  <!-- Jquery -->
  <script src="./js/jquery-3.6.1.min.js"></script>
  <!-- typewriter -->
  <script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>
  <!-- Swiper -->
  <script defer src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
  <!-- gsap -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/ScrollTrigger.min.js"></script>
  <!-- JS -->
  <script defer src="./js/swiper.js"></script>
  <script defer src="./js/index.js"></script>
  <title>헬퍼</title>
</head>

<body>
  <div class="body_inner">
    <!-- 로그인 전 -->
    <?php if (!$s_id) { ?>
    <header>
      <div class="header_inner">
        <seciton class="header">
          <div class="logo_inner">
            <h1 class="logo">
              <a href="index.html"><img src="../HELPER_WEB/images/logo.jpg" alt="" /></a>
            </h1>
          </div>
          <div class="user_menu">
            <form class="search_form" action="">
              <label>
                <input class="search" type="text" placeholder="필요한 서비스를 검색하세요." />
                <button class="help_icon">
                  <i class="fa-solid fa-magnifying-glass"></i>
                </button>
              </label>
            </form>
            <h2 class="hidden">사용자 메뉴</h2>
            <ul class="sign_menu">
              <li class="ex_sign_in"><a href="#">전문가 등록</a></li>
              <li class="sign_in">
                <a href="./html/login_page.php">로그인</a>
              </li>
              <li class="free">
                <a href="./html/select_signin.php">무료 회원가입</a>
              </li>
            </ul>
          </div>
        </seciton>
        <nav class="main_menu">
          <ul>
            <li class="menu_list menu_list1">
              <h2 class="all_menu">전체메뉴</h2>
              <a href="#">전체메뉴</a>
            </li>
            <li class="menu_list menu_list2">
              <a href="./notice/list.php">공지사항</a>
            </li>
            <li class="menu_list menu_list3"><a href="#">이벤트</a></li>
          </ul>
        </nav>
        <div class="all_menu1">
          <h2 class="depth_title">비즈니스</h2>
          <ul>
            <li class="depth1">
              <a href="#">디자인</a>
              <div class="all_menu2">
                <h3 class="depth_title">디자인</h3>
                <ul>
                  <li class="depth2">
                    <a href="#">로고 · 브랜딩</a>
                    <div class="all_menu3">
                      <h3 class="depth_title">로고 · 브랜딩</h3>
                      <ul>
                        <li class="depth3"><a href="#">로고</a></li>
                        <li class="depth3"><a href="#">브랜딩</a></li>
                      </ul>
                    </div>
                  </li>
                  <li class="depth2">
                    <a href="#">상세 · 이벤트 페이지</a>
                    <div class="all_menu3">
                      <h3 class="depth_title">상세 · 이벤트 페이지</h3>
                      <ul>
                        <li class="depth3">
                          <a href="#">상세·이벤트 페이지</a>
                        </li>
                        <li class="depth3">
                          <a href="#">기획·촬영·디자인</a>
                        </li>
                        <li class="depth3"><a href="#">번역·디자인</a></li>
                        <li class="depth3">
                          <a href="#">배너·gif 이미지</a>
                        </li>
                      </ul>
                    </div>
                  </li>
                  <li class="depth2">
                    <a href="#">웹·모바일 디자인</a>
                    <div class="all_menu3">
                      <h3 class="depth_title">웹·모바일 디자인</h3>
                      <ul>
                        <li class="depth3"><a href="#">UI·UX디자인</a></li>
                        <li class="depth3"><a href="#">아이콘·버튼</a></li>
                        <li class="depth3">
                          <a href="#">기획·스토리보드</a>
                        </li>
                        <li class="depth3">
                          <a href="#">템플릿형 홈페이지</a>
                        </li>
                      </ul>
                    </div>
                  </li>
                  <li class="depth2">
                    <a href="#">공간 디자인</a>
                    <div class="all_menu3">
                      <h3 class="depth_title">공간 디자인</h3>
                      <ul>
                        <li class="depth3"><a href="#">CAD도면</a></li>
                        <li class="depth3"><a href="#">3D도면·모델링</a></li>
                        <li class="depth3">
                          <a href="#">인테리어 설계·시공</a>
                        </li>
                        <li class="depth3">
                          <a href="#">전시·무대 디자인</a>
                        </li>
                      </ul>
                    </div>
                  </li>
                  <li class="depth2">
                    <a href="#">캘리그라피 · 폰트</a>
                    <div class="all_menu3">
                      <h3 class="depth_title">캘리그라피 · 폰트</h3>
                      <ul>
                        <li class="depth3"><a href="#">캘리그라피</a></li>
                        <li class="depth3"><a href="#">폰트</a></li>
                      </ul>
                    </div>
                  </li>
                </ul>
              </div>
            </li>
            <li class="depth1">
              <a href="#">IT · 개발</a>
              <div class="all_menu2">
                <h3 class="depth_title">IT · 개발</h3>
                <ul>
                  <li class="depth2">
                    <a href="#">모바일 앱</a>
                    <div class="all_menu3">
                      <h3 class="depth_title">모바일 앱</h3>
                      <ul>
                        <li class="depth3"><a href="#">네이티브앱</a></li>
                        <li class="depth3">
                          <a href="#">하이브리드앱·웹앱</a>
                        </li>
                      </ul>
                    </div>
                  </li>
                  <li class="depth2">
                    <a href="#">웹</a>
                    <div class="all_menu3">
                      <h3 class="depth_title">웹</h3>
                      <ul>
                        <li class="depth3"><a href="#">웹사이트 제작</a></li>
                        <li class="depth3">
                          <a href="#">프론트엔드·퍼블리싱</a>
                        </li>
                      </ul>
                    </div>
                  </li>
                  <li class="depth2">
                    <a href="#">프로그램</a>
                    <div class="all_menu3">
                      <h3 class="depth_title">프로그램</h3>
                      <ul>
                        <li class="depth3"><a href="#">일반 프로그램</a></li>
                        <li class="depth3"><a href="#">기타</a></li>
                      </ul>
                    </div>
                  </li>
                  <li class="depth2">
                    <a href="#">쇼핑몰</a>
                    <div class="all_menu3">
                      <h3 class="depth_title">쇼핑몰</h3>
                      <ul>
                        <li class="depth3"><a href="#">웹사이트 제작</a></li>
                        <li class="depth3">
                          <a href="#">웹사이트 개선·버그수정</a>
                        </li>
                      </ul>
                    </div>
                  </li>
                  <li class="depth2">
                    <a href="#">기타</a>
                    <div class="all_menu3">
                      <h3 class="depth_title">기타</h3>
                      <ul>
                        <li class="depth3"><a href="#"></a></li>
                        <li class="depth3"><a href="#"></a></li>
                      </ul>
                    </div>
                  </li>
                </ul>
              </div>
            </li>
            <li class="depth1">
              <a href="#">영상·사진·음향</a>
              <div class="all_menu2">
                <h3 class="depth_title">영상·사진·음향</h3>
                <ul>
                  <li class="depth2"><a href="#">영상촬영·편집</a></li>
                  <li class="depth2"><a href="#">인터뷰 영상</a></li>
                  <li class="depth2"><a href="#">교육 영상</a></li>
                  <li class="depth2"><a href="#">이벤트 영상</a></li>
                  <li class="depth2"><a href="#">유튜브 제작</a></li>
                  <li class="depth2"><a href="#">온라인 생중계</a></li>
                  <li class="depth2"><a href="#">드론 촬영</a></li>
                  <li class="depth2"><a href="#">애니메이션</a></li>
                  <li class="depth2"><a href="#">사진 촬영</a></li>
                </ul>
              </div>
            </li>
            <li class="depth1">
              <a href="#">마케팅</a>
              <div class="all_menu2">
                <h3 class="depth_title">마케팅</h3>
                <ul>
                  <li class="depth2"><a href="#">블로그 마케팅</a></li>
                  <li class="depth2"><a href="#">카페 마케팅</a></li>
                  <li class="depth2"><a href="#">SNS 마케팅</a></li>
                  <li class="depth2"><a href="#">쇼핑몰·스토어</a></li>
                  <li class="depth2"><a href="#">체험단·기자단 대행</a></li>
                </ul>
              </div>
            </li>
            <li class="depth1">
              <a href="#">주문제작</a>
              <div class="all_menu2">
                <h3 class="depth_title">주문제작</h3>
                <ul>
                  <li class="depth2"><a href="#">인쇄</a></li>
                  <li class="depth2"><a href="#">간판</a></li>
                  <li class="depth2"><a href="#">3D 프린팅</a></li>
                  <li class="depth2"><a href="#">기념품 제작</a></li>
                  <li class="depth2"><a href="#">모형 제작</a></li>
                  <li class="depth2"><a href="#">제품 제작</a></li>
                </ul>
              </div>
            </li>
          </ul>
          <h2 class="depth_title">취미 · 생활</h2>
          <ul>
            <li class="depth1">
              <a href="#">취미</a>
              <div class="all_menu2">
                <h3 class="depth_title">취미</h3>
                <ul>
                  <li class="depth2">
                    <a href="#">뷰티·패션 레슨</a>
                    <div class="all_menu3">
                      <h3 class="depth_title">뷰티·패션 레슨</h3>
                      <ul>
                        <li class="depth3"><a href="#">뷰티</a></li>
                        <li class="depth3"><a href="#">패션</a></li>
                      </ul>
                    </div>
                  </li>
                  <li class="depth2">
                    <a href="#">댄스 레슨</a>
                    <div class="all_menu3">
                      <h3 class="depth_title">댄스 레슨</h3>
                      <ul>
                        <li class="depth3"><a href="#"></a></li>
                        <li class="depth3"><a href="#"></a></li>
                      </ul>
                    </div>
                  </li>
                  <li class="depth2">
                    <a href="#">골프레슨</a>
                    <div class="all_menu3">
                      <h3 class="depth_title">골프레슨</h3>
                      <ul>
                        <li class="depth3"><a href="#"></a></li>
                        <li class="depth3"><a href="#"></a></li>
                      </ul>
                    </div>
                  </li>
                  <li class="depth2">
                    <a href="#">헬스·PT 레슨</a>
                    <div class="all_menu3">
                      <h3 class="depth_title">헬스·PT 레슨</h3>
                      <ul>
                        <li class="depth3"><a href="#"></a></li>
                        <li class="depth3"><a href="#"></a></li>
                      </ul>
                    </div>
                  </li>
                  <li class="depth2">
                    <a href="#">음악·악기 레슨</a>
                    <div class="all_menu3">
                      <h3 class="depth_title">음악·악기 레슨</h3>
                      <ul>
                        <li class="depth3">
                          <a href="./html/guitar_lesson.php">기타 레슨</a>
                        </li>
                        <li class="depth3"><a href="#">베이스 레슨</a></li>
                        <li class="depth3"><a href="#">드럼 레슨</a></li>
                        <li class="depth3"><a href="#">보컬 레슨</a></li>
                        <li class="depth3"><a href="#">피아노 레슨</a></li>
                      </ul>
                    </div>
                  </li>
                  <li class="depth2">
                    <a href="#">게임 레슨</a>
                    <div class="all_menu3">
                      <h3 class="depth_title">게임 레슨</h3>
                      <ul>
                        <li class="depth3"><a href="#">발로란트</a></li>
                        <li class="depth3"><a href="#">LOL</a></li>
                        <li class="depth3"><a href="#">오버워치2</a></li>
                        <li class="depth3"><a href="#">서든어택</a></li>
                        <li class="depth3"><a href="#">배틀그라운드</a></li>
                      </ul>
                    </div>
                  </li>
                  <li class="depth2">
                    <a href="#">미술·드로잉 레슨</a>
                    <div class="all_menu3">
                      <h3 class="depth_title">미술·드로잉 레슨</h3>
                      <ul>
                        <li class="depth3"><a href="#">미술</a></li>
                        <li class="depth3"><a href="#">드로잉</a></li>
                      </ul>
                    </div>
                  </li>
                  <li class="depth2">
                    <a href="#">타로·사주 레슨</a>
                    <div class="all_menu3">
                      <h3 class="depth_title">타로·사주 레슨</h3>
                      <ul>
                        <li class="depth3"><a href="#">타로</a></li>
                        <li class="depth3"><a href="#">사주</a></li>
                      </ul>
                    </div>
                  </li>
                  <li class="depth2">
                    <a href="#">기타 취미 레슨</a>
                    <div class="all_menu3">
                      <h3 class="depth_title">기타 취미 레슨</h3>
                      <ul>
                        <li class="depth3"><a href="#"></a></li>
                        <li class="depth3"><a href="#"></a></li>
                      </ul>
                    </div>
                  </li>
                </ul>
              </div>
            </li>
            <li class="depth1">
              <a href="#">심리상담</a>
              <div class="all_menu2">
                <h3 class="depth_title">심리상담</h3>
                <ul>
                  <li class="depth2"><a href="#">심리 검사</a></li>
                  <li class="depth2"><a href="#">심리 치료</a></li>
                  <li class="depth2"><a href="#">성인 상담</a></li>
                  <li class="depth2"><a href="#">아동 청소년 상담</a></li>
                </ul>
              </div>
            </li>
            <li class="depth1">
              <a href="#">운세</a>
              <div class="all_menu2">
                <h3 class="depth_title">운세</h3>
                <ul>
                  <li class="depth2"><a href="#">신점</a></li>
                  <li class="depth2"><a href="#">사주</a></li>
                  <li class="depth2"><a href="#">타로</a></li>
                  <li class="depth2"><a href="#">작명</a></li>
                </ul>
              </div>
            </li>
            <li class="depth1">
              <a href="#">생활서비스</a>
              <div class="all_menu2">
                <h3 class="depth_title">생활서비스</h3>
                <ul>
                  <li class="depth2"><a href="#">웨딩·출산</a></li>
                  <li class="depth2"><a href="#">가족행사</a></li>
                  <li class="depth2"><a href="#">이사·청소</a></li>
                </ul>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </header>
    <?php } else { ?>
    <!-- 로그인 후 -->
    <header>
      <div class="header_inner">
        <seciton class="header">
          <div class="logo_inner">
            <h1 class="logo">
              <a href="index.html"><img src="../HELPER_WEB/images/logo.jpg" alt="" /></a>
            </h1>
          </div>
          <div class="user_menu">
            <form class="search_form" action="">
              <label>
                <input class="search" type="text" placeholder="필요한 서비스를 검색하세요." />
                <button class="help_icon">
                  <i class="fa-solid fa-magnifying-glass"></i>
                </button>
              </label>
            </form>
            <div class="user_info">
              <h2 class="hidden">사용자 메뉴</h2>
              <span class="pnt_name">안녕하세요 , <?php echo $s_name; ?>님</span>
              <a href="./html/mypage.php" class="mypage_btn">마이페이지</a>
              <a href="/HELPER_WEB/html/logout.php" class="logout_btn">로그아웃</a>
            </div>
          </div>
        </seciton>
        <nav class="main_menu">
          <ul>
            <li class="menu_list menu_list1">
              <h2 class="all_menu">전체메뉴</h2>
              <a href="#">전체메뉴</a>
            </li>
            <li class="menu_list menu_list2">
              <a href="./notice/list.php">공지사항</a>
            </li>
            <li class="menu_list menu_list3"><a href="#">이벤트</a></li>
          </ul>
        </nav>
        <div class="all_menu1">
          <h2 class="depth_title">비즈니스</h2>
          <ul>
            <li class="depth1">
              <a href="#">디자인</a>
              <div class="all_menu2">
                <h3 class="depth_title">디자인</h3>
                <ul>
                  <li class="depth2">
                    <a href="#">로고 · 브랜딩</a>
                    <div class="all_menu3">
                      <h3 class="depth_title">로고 · 브랜딩</h3>
                      <ul>
                        <li class="depth3"><a href="#">로고</a></li>
                        <li class="depth3"><a href="#">브랜딩</a></li>
                      </ul>
                    </div>
                  </li>
                  <li class="depth2">
                    <a href="#">상세 · 이벤트 페이지</a>
                    <div class="all_menu3">
                      <h3 class="depth_title">상세 · 이벤트 페이지</h3>
                      <ul>
                        <li class="depth3">
                          <a href="#">상세·이벤트 페이지</a>
                        </li>
                        <li class="depth3">
                          <a href="#">기획·촬영·디자인</a>
                        </li>
                        <li class="depth3"><a href="#">번역·디자인</a></li>
                        <li class="depth3">
                          <a href="#">배너·gif 이미지</a>
                        </li>
                      </ul>
                    </div>
                  </li>
                  <li class="depth2">
                    <a href="#">웹·모바일 디자인</a>
                    <div class="all_menu3">
                      <h3 class="depth_title">웹·모바일 디자인</h3>
                      <ul>
                        <li class="depth3"><a href="#">UI·UX디자인</a></li>
                        <li class="depth3"><a href="#">아이콘·버튼</a></li>
                        <li class="depth3">
                          <a href="#">기획·스토리보드</a>
                        </li>
                        <li class="depth3">
                          <a href="#">템플릿형 홈페이지</a>
                        </li>
                      </ul>
                    </div>
                  </li>
                  <li class="depth2">
                    <a href="#">공간 디자인</a>
                    <div class="all_menu3">
                      <h3 class="depth_title">공간 디자인</h3>
                      <ul>
                        <li class="depth3"><a href="#">CAD도면</a></li>
                        <li class="depth3"><a href="#">3D도면·모델링</a></li>
                        <li class="depth3">
                          <a href="#">인테리어 설계·시공</a>
                        </li>
                        <li class="depth3">
                          <a href="#">전시·무대 디자인</a>
                        </li>
                      </ul>
                    </div>
                  </li>
                  <li class="depth2">
                    <a href="#">캘리그라피 · 폰트</a>
                    <div class="all_menu3">
                      <h3 class="depth_title">캘리그라피 · 폰트</h3>
                      <ul>
                        <li class="depth3"><a href="#">캘리그라피</a></li>
                        <li class="depth3"><a href="#">폰트</a></li>
                      </ul>
                    </div>
                  </li>
                </ul>
              </div>
            </li>
            <li class="depth1">
              <a href="#">IT · 개발</a>
              <div class="all_menu2">
                <h3 class="depth_title">IT · 개발</h3>
                <ul>
                  <li class="depth2">
                    <a href="#">모바일 앱</a>
                    <div class="all_menu3">
                      <h3 class="depth_title">모바일 앱</h3>
                      <ul>
                        <li class="depth3"><a href="#">네이티브앱</a></li>
                        <li class="depth3">
                          <a href="#">하이브리드앱·웹앱</a>
                        </li>
                      </ul>
                    </div>
                  </li>
                  <li class="depth2">
                    <a href="#">웹</a>
                    <div class="all_menu3">
                      <h3 class="depth_title">웹</h3>
                      <ul>
                        <li class="depth3"><a href="#">웹사이트 제작</a></li>
                        <li class="depth3">
                          <a href="#">프론트엔드·퍼블리싱</a>
                        </li>
                      </ul>
                    </div>
                  </li>
                  <li class="depth2">
                    <a href="#">프로그램</a>
                    <div class="all_menu3">
                      <h3 class="depth_title">프로그램</h3>
                      <ul>
                        <li class="depth3"><a href="#">일반 프로그램</a></li>
                        <li class="depth3"><a href="#">기타</a></li>
                      </ul>
                    </div>
                  </li>
                  <li class="depth2">
                    <a href="#">쇼핑몰</a>
                    <div class="all_menu3">
                      <h3 class="depth_title">쇼핑몰</h3>
                      <ul>
                        <li class="depth3"><a href="#">웹사이트 제작</a></li>
                        <li class="depth3">
                          <a href="#">웹사이트 개선·버그수정</a>
                        </li>
                      </ul>
                    </div>
                  </li>
                  <li class="depth2">
                    <a href="#">기타</a>
                    <div class="all_menu3">
                      <h3 class="depth_title">기타</h3>
                      <ul>
                        <li class="depth3"><a href="#"></a></li>
                        <li class="depth3"><a href="#"></a></li>
                      </ul>
                    </div>
                  </li>
                </ul>
              </div>
            </li>
            <li class="depth1">
              <a href="#">영상·사진·음향</a>
              <div class="all_menu2">
                <h3 class="depth_title">영상·사진·음향</h3>
                <ul>
                  <li class="depth2"><a href="#">영상촬영·편집</a></li>
                  <li class="depth2"><a href="#">인터뷰 영상</a></li>
                  <li class="depth2"><a href="#">교육 영상</a></li>
                  <li class="depth2"><a href="#">이벤트 영상</a></li>
                  <li class="depth2"><a href="#">유튜브 제작</a></li>
                  <li class="depth2"><a href="#">온라인 생중계</a></li>
                  <li class="depth2"><a href="#">드론 촬영</a></li>
                  <li class="depth2"><a href="#">애니메이션</a></li>
                  <li class="depth2"><a href="#">사진 촬영</a></li>
                </ul>
              </div>
            </li>
            <li class="depth1">
              <a href="#">마케팅</a>
              <div class="all_menu2">
                <h3 class="depth_title">마케팅</h3>
                <ul>
                  <li class="depth2"><a href="#">블로그 마케팅</a></li>
                  <li class="depth2"><a href="#">카페 마케팅</a></li>
                  <li class="depth2"><a href="#">SNS 마케팅</a></li>
                  <li class="depth2"><a href="#">쇼핑몰·스토어</a></li>
                  <li class="depth2"><a href="#">체험단·기자단 대행</a></li>
                </ul>
              </div>
            </li>
            <li class="depth1">
              <a href="#">주문제작</a>
              <div class="all_menu2">
                <h3 class="depth_title">주문제작</h3>
                <ul>
                  <li class="depth2"><a href="#">인쇄</a></li>
                  <li class="depth2"><a href="#">간판</a></li>
                  <li class="depth2"><a href="#">3D 프린팅</a></li>
                  <li class="depth2"><a href="#">기념품 제작</a></li>
                  <li class="depth2"><a href="#">모형 제작</a></li>
                  <li class="depth2"><a href="#">제품 제작</a></li>
                </ul>
              </div>
            </li>
          </ul>
          <h2 class="depth_title">취미 · 생활</h2>
          <ul>
            <li class="depth1">
              <a href="#">취미</a>
              <div class="all_menu2">
                <h3 class="depth_title">취미</h3>
                <ul>
                  <li class="depth2">
                    <a href="#">뷰티·패션 레슨</a>
                    <div class="all_menu3">
                      <h3 class="depth_title">뷰티·패션 레슨</h3>
                      <ul>
                        <li class="depth3"><a href="#">뷰티</a></li>
                        <li class="depth3"><a href="#">패션</a></li>
                      </ul>
                    </div>
                  </li>
                  <li class="depth2">
                    <a href="#">댄스 레슨</a>
                    <div class="all_menu3">
                      <h3 class="depth_title">댄스 레슨</h3>
                      <ul>
                        <li class="depth3"><a href="#"></a></li>
                        <li class="depth3"><a href="#"></a></li>
                      </ul>
                    </div>
                  </li>
                  <li class="depth2">
                    <a href="#">골프레슨</a>
                    <div class="all_menu3">
                      <h3 class="depth_title">골프레슨</h3>
                      <ul>
                        <li class="depth3"><a href="#"></a></li>
                        <li class="depth3"><a href="#"></a></li>
                      </ul>
                    </div>
                  </li>
                  <li class="depth2">
                    <a href="#">헬스·PT 레슨</a>
                    <div class="all_menu3">
                      <h3 class="depth_title">헬스·PT 레슨</h3>
                      <ul>
                        <li class="depth3"><a href="#"></a></li>
                        <li class="depth3"><a href="#"></a></li>
                      </ul>
                    </div>
                  </li>
                  <li class="depth2">
                    <a href="#">음악·악기 레슨</a>
                    <div class="all_menu3">
                      <h3 class="depth_title">음악·악기 레슨</h3>
                      <ul>
                        <li class="depth3">
                          <a href="./html/guitar_lesson.html">기타 레슨</a>
                        </li>
                        <li class="depth3"><a href="#">베이스 레슨</a></li>
                        <li class="depth3"><a href="#">드럼 레슨</a></li>
                        <li class="depth3"><a href="#">보컬 레슨</a></li>
                        <li class="depth3"><a href="#">피아노 레슨</a></li>
                      </ul>
                    </div>
                  </li>
                  <li class="depth2">
                    <a href="#">게임 레슨</a>
                    <div class="all_menu3">
                      <h3 class="depth_title">게임 레슨</h3>
                      <ul>
                        <li class="depth3"><a href="#">발로란트</a></li>
                        <li class="depth3"><a href="#">LOL</a></li>
                        <li class="depth3"><a href="#">오버워치2</a></li>
                        <li class="depth3"><a href="#">서든어택</a></li>
                        <li class="depth3"><a href="#">배틀그라운드</a></li>
                      </ul>
                    </div>
                  </li>
                  <li class="depth2">
                    <a href="#">미술·드로잉 레슨</a>
                    <div class="all_menu3">
                      <h3 class="depth_title">미술·드로잉 레슨</h3>
                      <ul>
                        <li class="depth3"><a href="#">미술</a></li>
                        <li class="depth3"><a href="#">드로잉</a></li>
                      </ul>
                    </div>
                  </li>
                  <li class="depth2">
                    <a href="#">타로·사주 레슨</a>
                    <div class="all_menu3">
                      <h3 class="depth_title">타로·사주 레슨</h3>
                      <ul>
                        <li class="depth3"><a href="#">타로</a></li>
                        <li class="depth3"><a href="#">사주</a></li>
                      </ul>
                    </div>
                  </li>
                  <li class="depth2">
                    <a href="#">기타 취미 레슨</a>
                    <div class="all_menu3">
                      <h3 class="depth_title">기타 취미 레슨</h3>
                      <ul>
                        <li class="depth3"><a href="#"></a></li>
                        <li class="depth3"><a href="#"></a></li>
                      </ul>
                    </div>
                  </li>
                </ul>
              </div>
            </li>
            <li class="depth1">
              <a href="#">심리상담</a>
              <div class="all_menu2">
                <h3 class="depth_title">심리상담</h3>
                <ul>
                  <li class="depth2"><a href="#">심리 검사</a></li>
                  <li class="depth2"><a href="#">심리 치료</a></li>
                  <li class="depth2"><a href="#">성인 상담</a></li>
                  <li class="depth2"><a href="#">아동 청소년 상담</a></li>
                </ul>
              </div>
            </li>
            <li class="depth1">
              <a href="#">운세</a>
              <div class="all_menu2">
                <h3 class="depth_title">운세</h3>
                <ul>
                  <li class="depth2"><a href="#">신점</a></li>
                  <li class="depth2"><a href="#">사주</a></li>
                  <li class="depth2"><a href="#">타로</a></li>
                  <li class="depth2"><a href="#">작명</a></li>
                </ul>
              </div>
            </li>
            <li class="depth1">
              <a href="#">생활서비스</a>
              <div class="all_menu2">
                <h3 class="depth_title">생활서비스</h3>
                <ul>
                  <li class="depth2"><a href="#">웨딩·출산</a></li>
                  <li class="depth2"><a href="#">가족행사</a></li>
                  <li class="depth2"><a href="#">이사·청소</a></li>
                </ul>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </header>
    <?php }; ?>
    <main>
      <section class="main">
        <div class="main_inner">
          <h2 class="hidden">메인 메뉴</h2>
          <div class="typing-txt">
            <ul>
              <li>혼자 하기 힘든 일,</li>
              <li>저한테 맡겨주세요.</li>
              <li>3,215,237 명의 전문가가 당신의 의뢰를 기다리고 있어요.</li>
            </ul>
          </div>
          <div class="typing">
            <ul>
              <li class="main_txt1"></li>
              <li class="main_txt2"></li>
              <li class="main_txt3"></li>
            </ul>
          </div>
          <form action="">
            <div class="form_inner">
              <div class="typing_txt"></div>
              <label class="main_search">
                <input class="main_search_input" type="text" />
                <img src="./images/search_icon.png" alt="" />
              </label>
            </div>
          </form>
          <div class="swiper main_img">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <img src="./images/main_img.jpg" alt="" />
              </div>
              <div class="swiper-slide">
                <img src="./images/main_img2.jpg" alt="" />
              </div>
              <div class="swiper-slide">
                <img src="./images/main_img3.jpg" alt="" />
              </div>
            </div>
          </div>
          <div class="main_btn">
            <p class="swiper-button-prev main_btn_prev">
              <a href="#">이전</a>
            </p>
            <p class="swiper-button-next main_btn_next">
              <a href="#">다음</a>
            </p>
          </div>
        </div>
      </section>
      <section class="category">
        <div class="category_inner">
          <h2 class="hidden">카테고리</h2>
          <ul>
            <li>
              <a href="./html/category_lesson.php">
                <img src="./images/category_lesson.png" alt="" />
                <p>레슨</p>
              </a>
            </li>
            <li>
              <a href="#">
                <img src="./images/category_marketing.png" alt="" />
                <p>마케팅</p>
              </a>
            </li>
            <li>
              <a href="#">
                <img class="img_photo" src="./images/category_camera.png" alt="" />
                <p>촬영/영상</p>
              </a>
            </li>
            <li>
              <a href="#">
                <img src="./images/category_present.png" alt="" />
                <p>주문제작</p>
              </a>
            </li>
            <li>
              <a href="#">
                <img src="./images/category_web.png" alt="" />
                <p>디자인/개발</p>
              </a>
            </li>
            <li>
              <a href="#">
                <img src="./images/category_mic.png" alt="" />
                <p>이벤트</p>
              </a>
            </li>
            <li>
              <a href="#">
                <img src="./images/category_tarrot.png" alt="" />
                <p>운세/타로</p>
              </a>
            </li>
            <li>
              <a href="#">
                <img src="./images/category_etc.png" alt="" />
                <p>기타</p>
              </a>
            </li>
          </ul>
        </div>
      </section>
      <section class="recommend">
        <div class="recommend_inner">
          <h2 class="recommend_title">추천 카테고리</h2>
          <div class="swiper recommend_swipper">
            <div class="swiper-wrapper">
              <div class="swiper-slide recommend_eng">
                <p>영어과외</p>
                <p>과외·개인레슨</p>
              </div>
              <div class="swiper-slide recommend_web">
                <p>웹 개발</p>
                <p>디자인·사이트 제작</p>
              </div>
              <div class="swiper-slide recommend_logo">
                <p>로고</p>
                <p>로고·일러스트 제작</p>
              </div>
              <div class="swiper-slide recommend_vocal">
                <p>보컬레슨</p>
                <p>보컬·싱어송라이터</p>
              </div>
              <div class="swiper-slide recommend_pt">
                <p>퍼스널트레이닝</p>
                <p>헬스·요가·필라테스</p>
              </div>
              <div class="swiper-slide recommend_int">
                <p>인테리어</p>
                <p>집·사무실 인테리어</p>
              </div>
              <div class="swiper-slide recommend_photo">
                <p>영상제작</p>
                <p>촬영·편집</p>
              </div>
            </div>
          </div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
        </div>
      </section>
      <section class="banner">
        <h2>헬퍼 신규가입하고 10만원 쿠폰팩 받자!</h2>
      </section>
      <section class="review">
        <div class="review_inner">
          <h2 class="review_title">헬퍼 후기</h2>
          <div class="review_left_right">
            <div class="review_left">
              <div class="review_section">
                <img src="./images/review_img_main.jpg" alt="" />
                <div class="review_txt">
                  <p class="review_txt1">
                    헬퍼 덕분에 <br />
                    집이 새집 같아 졌어요!
                  </p>
                  <p class="review_txt2">
                    "집이 너무 더러워져서 청소 헬퍼가 있길래 맡겨봤더니 집이
                    너무 깨끗해져서 너무 만족해요"
                  </p>
                  <p class="review_txt3">-asdf****님-</p>
                </div>
              </div>
            </div>
            <div class="review_right">
              <div class="review_sub1">
                <img src="./images/review_img_sub1.jpg" width="240px" alt="" />
                <div class="sub_txt">
                  <p class="sub_txt1">보컬 레슨/김감곰 헬퍼</p>
                  <p class="sub_txt2">
                    김감곰 헬퍼님한테 노래배우고 친구 결혼식 축가 잘 부르고
                    왔습니다!
                  </p>
                  <p class="sub_txt3">-qwer****님-</p>
                </div>
              </div>
              <div class="review_sub2">
                <div class="sub_txt">
                  <p class="sub_txt1">웹 개발 / 지지고 헬퍼</p>
                  <p class="sub_txt2">
                    지지고님이 제 쇼핑몰 웹을 개발해 주셔서 매출이 200%나
                    올랐어요!
                  </p>
                  <p class="sub_txt3">-qwer****님-</p>
                </div>
                <img src="./images/review_img_sub2.jpg" alt="" />
              </div>
              <div class="review_sub3">
                <img src="./images/review_img_sub3.jpg" alt="" />
                <div class="sub_txt">
                  <p class="sub_txt1">영상편집/튜브유 헬퍼</p>
                  <p class="sub_txt2">
                    튜브유님이 영상편집을 해주고 난뒤로 <br />
                    구독자가 100만명이나 늘었어요!
                  </p>
                  <p class="sub_txt3">-bobba**님-</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- favorite -->
      <section class="favorite">
        <div class="favorite_inner">
          <div class="title_inner">
            <h2 class="favorite_title">이달의 인기헬퍼</h2>
          </div>
          <p class="favorite_crown"></p>
          <div class="favorite_list">
            <a href="#" class="fav favorite1">
              <img src="./images/favorite_img1.jpg" alt="" />
              <div class="fav_txt">
                <p class="fav_name">아이묭</p>
                <p class="fav_txt1">싱어송라이터 레슨</p>
                <p class="fav_txt2">별점5.0(111)</p>
              </div>
            </a>
            <a href="#" class="fav favorite2">
              <img src="./images/favorite_img2.jpg" alt="" />
              <div class="fav_txt">
                <p class="fav_name">김포토</p>
                <p class="fav_txt1">영상촬영·편집</p>
                <p class="fav_txt2">별점5.0(111)</p>
              </div>
            </a>
            <a href="#" class="fav favorite3">
              <img src="./images/favorite_img3.jpg" alt="" />
              <div class="fav_txt">
                <p class="fav_name">미화원</p>
                <p class="fav_txt1">청소·인테리어</p>
                <p class="fav_txt2">별점5.0(111)</p>
              </div>
            </a>
            <a href="#" class="fav favorite4">
              <img src="./images/favorite_img4.jpg" alt="" />
              <div class="fav_txt">
                <p class="fav_name">김김김</p>
                <p class="fav_txt1">축가</p>
                <p class="fav_txt2">별점5.0(111)</p>
              </div>
            </a>
            <a href="#" class="fav favorite5">
              <img src="./images/favorite_img5.jpg" alt="" />
              <div class="fav_txt">
                <p class="fav_name">이이이</p>
                <p class="fav_txt1">웹·앱 개발</p>
                <p class="fav_txt2">별점5.0(111)</p>
              </div>
            </a>
            <a href="#" class="fav favorite6">
              <img src="./images/favorite_img6.jpg" alt="" />
              <div class="fav_txt">
                <p class="fav_name">박박박</p>
                <p class="fav_txt1">영어과외</p>
                <p class="fav_txt2">별점5.0(111)</p>
              </div>
            </a>
            <a href="#" class="fav favorite7">
              <img src="./images/favorite_img7.jpg" alt="" />
              <div class="fav_txt">
                <p class="fav_name">최최최</p>
                <p class="fav_txt1">수학 과외</p>
                <p class="fav_txt2">별점5.0(111)</p>
              </div>
            </a>
            <a href="#" class="fav favorite8">
              <img src="./images/favorite_img8.jpg" alt="" />
              <div class="fav_txt">
                <p class="fav_name">정정정</p>
                <p class="fav_txt1">골프 레슨</p>
                <p class="fav_txt2">별점5.0(111)</p>
              </div>
            </a>
          </div>
        </div>
      </section>
      <section class="banner2">
        <h2>헬퍼 광고</h2>
        <p>지금 헬퍼 앱을 다운받고 더욱 간편하게 즐겨보세요!</p>
      </section>
      <section class="notice_event">
        <div class="notice_inner">
          <h2 class="notice_title">Event&Notice.</h2>
          <ul class="notice_menu">
            <li><a class="notice_menu1" href="#">이벤트</a></li>
            <li>
              <a class="notice_menu2" href="./notice/list.php">공지사항</a>
            </li>
          </ul>
          <p class="notice_next"></p>
          <p class="event_next"></p>
          <div class="notice">
            <div class="notice_list">
              <p class="list1">공지사항</p>
              <p class="list2">개인정보 처리방침 변경 안내</p>
              <p class="list3">2222-22-22</p>
            </div>
            <div class="notice_list">
              <p class="list1">공지사항</p>
              <p class="list2">헬퍼 앱 출시!</p>
              <p class="list3">2222-22-22</p>
            </div>
            <div class="notice_list">
              <p class="list1">공지사항</p>
              <p class="list2">사업장 확장 이전 안내</p>
              <p class="list3">2222-22-22</p>
            </div>
          </div>
        </div>
      </section>
    </main>
    <footer>
      <div class="footer_inner">
        <section class="number">
          <h2 class="hidden">헬퍼번호</h2>
          <p class="number_main">1234-1234</p>
          <p>평일 10:00 ~ 18:00</p>
          <p>(점심시간 13:00 - 14:00 제외 · 주말/공휴일 제외)</p>
        </section>
        <section class="app">
          <h2 class="hidden">헬퍼 앱 다운로드</h2>
          <p class="appstore"><a href="#">APP STORE</a></p>
          <p class="playstore"><a href="#">PLAYSTORE</a></p>
        </section>
        <section class="service">
          <h2 class="hidden">회사설명&고객센터</h2>
          <div class="service_inner">
            <div class="service_menu">
              <h3><a href="#">헬퍼소개</a></h3>
              <ul>
                <li><a href="#">회사소개</a></li>
                <li><a href="#">채용안내</a></li>
              </ul>
            </div>
            <div class="service_menu">
              <h3><a href="#">고객안내</a></h3>
              <ul>
                <li><a href="#">이용안내</a></li>
                <li><a href="#">안전정책</a></li>
                <li><a href="#">헬퍼찾기</a></li>
              </ul>
            </div>
            <div class="service_menu">
              <h3><a href="#">헬퍼안내</a></h3>
              <ul>
                <li><a href="#">이용안내</a></li>
                <li><a href="#">헬퍼가이드</a></li>
                <li><a href="#">헬퍼가입</a></li>
              </ul>
            </div>
            <div class="service_menu">
              <h3><a href="#">고객센터</a></h3>
              <ul>
                <li><a href="#">공지사항</a></li>
                <li><a href="#">자주묻는 질문</a></li>
              </ul>
            </div>
          </div>
        </section>
        <section class="terms">
          <h2 class="hidden">약관&정책</h2>
          <ul>
            <li><a href="#">이용약관</a></li>
            <li><a href="#">개인정보처리방침</a></li>
            <li><a href="#">사업자 정보확인</a></li>
          </ul>
        </section>
        <section class="info">
          <h2 class="hidden">회사정보</h2>
          <div class="info_list">
            <p>
              상호명:(주)헬퍼·대표이사:Kwon gi hwan ·
              개인정보책임관리자:김냠냠 ·
            </p>
            <address>주소:서울특별시 강남구 테헤란로 어딘가</address>
            <p>
              사업자등록정보:123-45-123456 ·
              통신판매업신고증:제2022-서울강남-12345호 · 직업정보제공사업
              신고번호:서울청 제 2022-22호
            </p>
            <p>고객센터:1234-1234 · 이메일:support@helper.com</p>
            <p>Copyright &copy;gihwan All Rights Reserved.</p>
          </div>
        </section>
        <section class="sns">
          <h2 class="sns_title">SNS</h2>
          <ul>
            <li class="facebook"><a href="#">페이스북</a></li>
            <li class="insta"><a href="#">인스타그램</a></li>
            <li class="facebook"><a href="#">페이스북</a></li>
          </ul>
        </section>
      </div>
    </footer>
  </div>
</body>

</html>