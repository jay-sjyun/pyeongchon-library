<header>
  <div class="center_wrap">
    <div id="header_wrap">
      <!--모바일 유틸리티 영역-->
      <!-- <ul id="info_menu_mobile" class="util_menu_mobile">
        <li>
          <img src="images/nav/login.png" alt="로그인" />
          <a href="#">로그인</a>
        </li>
        <li>
          <img src="images/nav/account.png" alt="회원가입" />
          <a href="#">회원가입</a>
        </li>
      </ul> -->
      <h1>
        <a href="index.php">
          <img src="images/logo.png" alt="안양시립도서관 로고" />
        </a>
      </h1>
      <!--모바일 햄버거 메뉴 버튼-->
      <div id="menu_btn">
        <a href="#" id="nav_open">전체<br />메뉴</a>
      </div>
      <!--PC 유틸리티 영역-->
      <div id="info_nav_pc" class="util_menu_pc">
        <div id="info_nav_pc_wrap">
          <ul id="info_menu_pc">
            <li>
              <img src="images/nav/login.png" alt="로그인" />
              <a href="#">로그인</a>
            </li>
            <li>
              <img src="images/nav/account.png" alt="회원가입" />
              <a href="#">회원가입</a>
            </li>
            <li>
              <img src="images/nav/sitemap.png" alt="사이트맵" />
              <a href="#">사이트맵</a>
            </li>
            <li>
              <a href="#">
                <?php
                  echo 'Hello World';
                ?>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</header>
<div id="nav_section">
  <nav id="nav_pc">
    <ul id="menu">
      <li class="mainmenu">
        <a href="#" class="submenu_open">자료검색</a>
        <div class="submenu_bg">
          <div class="center_wrap">
            <div class="submenu_intro">
              <p>자료검색</p>
              <img src="images/nav/1_search.png" alt="search" />
            </div>
            <ul class="submenu sub1">
              <li><a href="#">통합검색</a></li>
              <li><a href="#">정기간행물</a></li>
              <li><a href="#">범계베스트셀러</a></li>
              <li><a href="#">스마트 작은도서관</a></li>
              <li><a href="#">관내학교도서검색</a></li>
              <li><a href="#">전국공공도서관검색</a></li>
              <li><a href="#">신착자료검색</a></li>
            </ul>
          </div>
        </div>
      </li>
      <li class="mainmenu">
        <a href="#" class="submenu_open">도서관서비스</a>
        <div class="submenu_bg">
          <div class="center_wrap">
            <div class="submenu_intro">
              <p>도서관서비스</p>
              <img src="images/nav/2_library_service.png" alt="library_service" />
            </div>
            <ul class="submenu sub2">
              <li><a href="#">도서관일정</a></li>
              <li><a href="#">책이음</a></li>
              <li><a href="#">문화강좌신청</a></li>
              <li><a href="#">상호대차</a></li>
              <li><a href="#">두루두루</a></li>
              <li><a href="#">내생애첫도서관</a></li>
              <li><a href="#">책바다</a></li>
              <li><a href="#">전시회</a></li>
              <li><a href="#">포토자료실</a></li>
              <li><a href="#">영화상영</a></li>
            </ul>
          </div>
        </div>
      </li>
      <li class="mainmenu">
        <a href="#" class="submenu_open">독서정보서비스</a>
        <div class="submenu_bg">
          <div class="center_wrap">
            <div class="submenu_intro">
              <p>독서정보서비스</p>
              <img src="images/nav/3_reading_info.png" alt="reading_info_service" />
            </div>
            <ul class="submenu sub3">
              <li><a href="#">사서추천도서</a></li>
              <li><a href="#">도서대출베스트</a></li>
              <li><a href="#">독서소식지</a></li>
              <li><a href="#">공개자료실</a></li>
            </ul>
          </div>
        </div>
      </li>
      <li class="mainmenu">
        <a href="#" class="submenu_open">전자도서관</a>
        <div class="submenu_bg">
          <div class="center_wrap">
            <div class="submenu_intro">
              <p>전자도서관</p>
              <img src="images/nav/4_digital.png" alt="digital_library" />
            </div>
            <ul class="submenu sub4">
              <li><a href="#">전자책</a></li>
              <li><a href="#">오디오북</a></li>
              <li><a href="#">인문학강의</a></li>
              <li><a href="#">학술논문</a></li>
              <li><a href="#">온라인강좌학습</a></li>
              <li><a href="#">도서요약전자도서관</a></li>
              <li><a href="#">경기도 메모리</a></li>
              <li><a href="#">경기도사이버도서관</a></li>
            </ul>
          </div>
        </div>
      </li>
      <li class="mainmenu">
        <a href="#" class="submenu_open">열린마당</a>
        <div class="submenu_bg">
          <div class="center_wrap">
            <div class="submenu_intro">
              <p>열린마당</p>
              <img src="images/nav/5_community.png" alt="community" />
            </div>
            <ul class="submenu sub5">
              <li><a href="#">공지사항</a></li>
              <li><a href="#">비치희망자료목록</a></li>
              <li><a href="#">보도자료</a></li>
              <li><a href="#">도서관에바란다</a></li>
              <li><a href="#">자유게시판</a></li>
              <li><a href="#">FAQ</a></li>
              <li><a href="#">동아리</a></li>
              <li><a href="#">설문조사</a></li>
              <li><a href="#">추천사이트</a></li>
            </ul>
          </div>
        </div>
      </li>
      <li class="mainmenu">
        <a href="#" class="submenu_open">나만의도서관</a>
        <div class="submenu_bg">
          <div class="center_wrap">
            <div class="submenu_intro">
              <p>나만의도서관</p>
              <img src="images/nav/6_my_library.png" alt="my_library" />
            </div>
            <ul class="submenu sub6">
              <li><a href="#">대출현황조회</a></li>
              <li><a href="#">예약현황조회</a></li>
              <li><a href="#">문화강좌신청정보</a></li>
              <li><a href="#">디지털좌석예약</a></li>
              <li><a href="#">희망도서신청</a></li>
              <li><a href="#">바구니보기</a></li>
            </ul>
          </div>
        </div>
      </li>
      <li class="mainmenu">
        <a href="#" class="submenu_open">도서관안내</a>
        <div class="submenu_bg">
          <div class="center_wrap">
            <div class="submenu_intro">
              <p>도서관안내</p>
              <img src="images/nav/7_info.png" alt="library_info" />
            </div>
            <ul class="submenu sub7">
              <li><a href="#">인사말</a></li>
              <li><a href="#">연혁</a></li>
              <li><a href="#">조직</a></li>
              <li><a href="#">시설현황</a></li>
              <li><a href="#">특화서비스&#40;경제·교육&#41;</a></li>
              <li><a href="#">장서현황</a></li>
              <li><a href="#">이용안내</a></li>
              <li><a href="#">찾아오시는길</a></li>
            </ul>
          </div>
        </div>
      </li>
    </ul>
  </nav>
  <!--            모바일용 네비게이션-->
  <!-- <nav id="nav_mobile">
          <div id="info_nav_mobile">
            <div id="info_nav_mobile_wrap">
              <ul id="info_menu_mobile">
                <li><a href="#">로그인 </a></li>
                <li><a href="#">사이트맵</a></li>
              </ul>
              <select class="selectpicker language_mobile">
                <option value="0">Korean</option>
                <option value="1">English</option>
                <option value="2">Chinese</option>
              </select>
              <a href="#" id="nav_close"><img src="images/nav/exit_white.png" alt="exit_btn" /></a>
            </div>
          </div>
          <div id="nav_menu_mobile">
            <ul id="menu_mobile">
              <li>
                <a href="#" class="submenu_open">자료검색</a>
                <ul class="submenu">
                  <li><a href="#">통합검색</a></li>
                  <li><a href="#">정기간행물</a></li>
                  <li><a href="#">범계베스트셀러</a></li>
                  <li><a href="#">스마트 작은도서관</a></li>
                  <li><a href="#">관내학교도서검색</a></li>
                  <li><a href="#">전국공공도서관검색</a></li>
                  <li><a href="#">신착자료검색</a></li>
                </ul>
              </li>
              <li>
                <a href="#" class="submenu_open">도서관서비스</a>
                <ul class="submenu">
                  <li><a href="#">도서관일정</a></li>
                  <li><a href="#">책이음</a></li>
                  <li><a href="#">문화강좌신청</a></li>
                  <li><a href="#">상호대차</a></li>
                  <li><a href="#">두루두루</a></li>
                  <li><a href="#">내생애첫도서관</a></li>
                  <li><a href="#">책바다</a></li>
                  <li><a href="#">전시회</a></li>
                  <li><a href="#">포토자료실</a></li>
                  <li><a href="#">영화상영</a></li>
                </ul>
              </li>
              <li>
                <a href="#" class="submenu_open">독서정보서비스</a>
                <ul class="submenu">
                  <li><a href="#">사서추천도서</a></li>
                  <li><a href="#">도서대출베스트</a></li>
                  <li><a href="#">독서소식지</a></li>
                  <li><a href="#">공개자료실</a></li>
                </ul>
              </li>
              <li>
                <a href="#" class="submenu_open">전자도서관</a>
                <ul class="submenu">
                  <li><a href="#">전자책</a></li>
                  <li><a href="#">오디오북</a></li>
                  <li><a href="#">인문학강의</a></li>
                  <li><a href="#">학술논문</a></li>
                  <li><a href="#">온라인강좌학습</a></li>
                  <li><a href="#">도서요약전자도서관</a></li>
                  <li><a href="#">경기도 메모리</a></li>
                  <li><a href="#">경기도사이버도서관</a></li>
                </ul>
              </li>
              <li>
                <a href="#" class="submenu_open">열린마당</a>
                <ul class="submenu">
                  <li><a href="#">공지사항</a></li>
                  <li><a href="#">비치희망자료목록</a></li>
                  <li><a href="#">보도자료</a></li>
                  <li><a href="#">도서관에바란다</a></li>
                  <li><a href="#">자유게시판</a></li>
                  <li><a href="#">FAQ</a></li>
                  <li><a href="#">동아리</a></li>
                  <li><a href="#">설문조사</a></li>
                  <li><a href="#">추천사이트</a></li>
                </ul>
              </li>
              <li>
                <a href="#" class="submenu_open">나만의도서관</a>
                <ul class="submenu">
                  <li><a href="#">대출현황조회</a></li>
                  <li><a href="#">예약현황조회</a></li>
                  <li><a href="#">문화강좌신청정보</a></li>
                  <li><a href="#">디지털좌석예약</a></li>
                  <li><a href="#">희망도서신청</a></li>
                  <li><a href="#">바구니보기</a></li>
                </ul>
              </li>
              <li>
                <a href="#" class="submenu_open">도서관안내</a>
                <ul class="submenu">
                  <li><a href="#">인사말</a></li>
                  <li><a href="#">연혁</a></li>
                  <li><a href="#">조직</a></li>
                  <li><a href="#">시설현황</a></li>
                  <li><a href="#">특화서비스&#40;경제·교육&#41;</a></li>
                  <li><a href="#">장서현황</a></li>
                  <li><a href="#">이용안내</a></li>
                  <li><a href="#">찾아오시는길</a></li>
                </ul>
              </li>
            </ul>
          </div>
          <div id="nav_layer"></div>
        </nav> -->
</div>