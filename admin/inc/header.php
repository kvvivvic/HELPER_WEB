<header>
  <div class="header_inner">
    <seciton class="header">
      <div class="logo_inner">
        <h1 class="logo">
          <a href="../index.php"><img src="../images/logo.jpg" alt="" /></a>
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
          <a href="../index.php" class="mypage_btn">관리자 페이지</a>
          <a href="../html/logout.php" class="logout_btn">로그아웃</a>
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
          <a href="../notice/list.php">공지사항</a>
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
                      <a href="../html/guitar_lesson.php">기타 레슨</a>
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