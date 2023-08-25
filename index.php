<?php
  include_once __DIR__. '/include/head.php';
?>

<body>
  <?php
    include_once __DIR__. '/include/gnb.php';
  ?>
  <div class="search_section js-search_section">
    <div class="search_wrap">
      <h2 class="section_title">도서검색</h2>
      <div class="category_dropbox js-dropbox">
        <p class="category_select js-dropbox_select">분류
          <span class="arrow_box"><img src="images/arrow_down_white.png" alt="화살표"></span>
        </p>
        <ul class="category_list js-dropbox_list">
          <li>서명</li>
          <li>저자</li>
          <li>출판사</li>
        </ul>
      </div>
      <form class="search_form">
        <input type="text" name="booksearch" placeholder="검색어를 입력하세요." class="search_input" />
      </form>
    </div>
  </div>
  <div class="visual_section">
    <div class="slider">
      <ul class="slider_list">
        <li class="slider_item">
          <a href="#">
            <picture>
              <source media="(max-width:767px)" srcset="images/slide1_m.jpg">
              <source media="(max-width:1131px)" srcset="images/slide1_t.jpg">
              <img src="images/slide1.jpg" alt="책속에 우리의 행복이. 평촌도서관이 함께 합니다. 자료특성화: 경제, 교육">
            </picture>
          </a>
        </li>
        <li class="slider_item">
          <a href="https://1000.library.kr/" target="_blank" title="경기도 메모리 기억의 도서관">
            <picture>
              <source media="(max-width:767px)" srcset="images/slide2_m.jpg">
              <source media="(max-width:1131px)" srcset="images/slide2_t.jpg">
              <img src="images/slide2.jpg" alt="경기도 메모리 기억의 도서관">
            </picture>
          </a>
        </li>
        <li class="slider_item">
          <a href="https://dokdo.mofa.go.kr/kor/pds/pdf.jsp" target="_blank" title="한국의 아름다운 섬, 독도">
            <picture>
              <source media="(max-width:767px)" srcset="images/slide3_m.jpg">
              <source media="(max-width:1131px)" srcset="images/slide3_t.jpg">
              <img src="images/slide3.jpg" alt="한국의 아름다운 섬, 독도">
            </picture>
          </a>
        </li>
      </ul>
    </div>
  </div>
  <div class="shortcut_icon_section js-shortcut_icon_section">
    <div class="center_wrap">
      <div class="slider_wrap">
        <ul class="slider js-slider">
          <li class="slide">
            <a href="#" class="content_wrap" title="도서관이용안내">
              <img src="images/icon1_info.png" alt="도서관이용안내">
              <span class="icon_txt">도서관이용안내</span>
            </a>
          </li>
          <li class="slide">
            <a href="#" class="content_wrap" title="대출현황조회">
              <img src="images/icon2_rent.png" alt="대출현황조회">
              <span class="icon_txt">대출현황조회</span>
            </a>
          </li>
          <li class="slide">
            <a href="#" class="content_wrap" title="디지털도서관예약">
              <img src="images/icon3_digital.png" alt="디지털도서관예약">
              <span class="icon_txt">디지털도서관예약</span>
            </a>
          </li>
          <li class="slide">
            <a href="#" class="content_wrap" title="열람실좌석현황">
              <img src="images/icon4_seat.png" alt="열람실좌석현황">
              <span class="icon_txt">열람실좌석현황</span>
            </a>
          </li>
          <li class="slide">
            <a href="#" class="content_wrap" title="희망도서신청">
              <img src="images/icon5_wishlist.png" alt="희망도서신청">
              <span class="icon_txt">희망도서신청</span>
            </a>
          </li>
          <li class="slide">
            <a href="#" class="content_wrap" title="문화행사신청">
              <img src="images/icon6_event.png" alt="문화행사신청">
              <span class="icon_txt">문화행사신청</span>
            </a>
          </li>
          <li class="slide">
            <a href="#" class="content_wrap" title="도서기증안내">
              <img src="images/icon7_donation.png" alt="도서기증안내">
              <span class="icon_txt">도서기증안내</span>
            </a>
          </li>
        </ul>
      </div>
      <button class="prev_btn js-prev_btn">
        <img src="images/arrow_side_black.png" alt="이전 화살표">
      </button>
      <button class="next_btn js-next_btn">
        <img src="images/arrow_side_black.png" alt="다음 화살표">
      </button>
    </div>
  </div>
  <div class="notice_and_block center_wrap">
    <div class="notice_section">
      <div class="section_head">
        <h2 class="section_title">공지사항</h2>
        <a href="#" class="more_link"><img src="images/more_btn_black.png" alt="더보기" /></a>
      </div>
      <ul class="notice_list js-notice_list"></ul>
    </div>
    <div class="shortcut_block_section">
      <div class="schedule">
        <a href="#" class="text_wrap">
          <span class="shortcut_txt">도서관 일정</span>
          <span class="shortcut_txt_sub">살펴보기</span>
        </a>
      </div>
      <div class="sites">
        <a href="#" class="text_wrap">
          <span class="shortcut_txt">추천사이트</span>
        </a>
      </div>
      <div class="faq">
        <a href="#" class="text_wrap">
          <span class="shortcut_txt">자주하는 질문</span>
        </a>
      </div>
      <div class="ask">
        <a href="#" class="text_wrap">
          <span class="shortcut_txt">사서에게<br>물어보세요</span>
          <span class="shortcut_txt_sub">지식정보 검색</span>
        </a>
      </div>
    </div>
  </div>
  <div class="books_section js-books_section">
    <div class="center_wrap">
      <ul class="category_tabs js-data_tabs">
        <li class="tab on" data-tab="best" tabindex="0">대출베스트</li>
        <li class="tab" data-tab="recommend" tabindex="0">추천도서</li>
        <li class="tab" data-tab="new" tabindex="0">신착도서</li>
      </ul>
      <div class="books_list_wrap on js-data_box" data-content="best">
        <ul class="books_list">
        </ul>
        <a href="#" title="더보기" class="more_link"><img src="images/more_btn_black.png" alt="더보기"></a>
      </div>
      <div class="books_list_wrap js-data_box" data-content="recommend">
        <ul class="books_list">
        </ul>
        <a href="#" title="더보기" class="more_link"><img src="images/more_btn_black.png" alt="더보기"></a>
      </div>
      <div class="books_list_wrap js-data_box" data-content="new">
        <ul class="books_list">
        </ul>
        <a href="#" title="더보기" class="more_link"><img src="images/more_btn_black.png" alt="더보기"></a>
      </div>
    </div>
  </div>
  <div class="banner_and_familysite center_wrap">
    <div class="banner_section js-banner_section">
      <div class="slider_wrap">
        <ul class="slider js-slider animated">
          <li class="slide">
            <a href="https://www.dlibrary.go.kr/" target="_blank">
              <img src="images/banner_01.jpg" alt="국가전자도서관">
            </a>
          </li>
          <li class="slide">
            <a href="https://www.nl.go.kr/" target="_blank">
              <img src="images/banner_02.jpg" alt="국립중앙도서관">
            </a>
          </li>
          <li class="slide">
            <a href="https://lib.daelim.ac.kr/" target="_blank">
              <img src="images/banner_03.jpg" alt="대림대학교 수암도서관">
            </a>
          </li>
          <li class="slide">
            <a href="https://library.sungkyul.ac.kr/" target="_blank">
              <img src="images/banner_04.jpg" alt="성결대학교 학술정보관">
            </a>
          </li>
          <li class="slide">
            <a href="https://www.anyang.go.kr/" target="_blank">
              <img src="images/banner_05.jpg" alt="안양시">
            </a>
          </li>
          <li class="slide">
            <a href="https://www.copyright.or.kr/" target="_blank">
              <img src="images/banner_06.jpg" alt="한국저작권위원회">
            </a>
          </li>
          <li class="slide">
            <a href="https://www.library.kr/" target="_blank">
              <img src="images/banner_07.jpg" alt="경기도사이버도서관">
            </a>
          </li>
          <li class="slide">
            <a href="https://www.nlcy.go.kr/" target="_blank">
              <img src="images/banner_08.jpg" alt="국립어린이청소년도서관">
            </a>
          </li>
        </ul>
      </div>
      <ul class="slider_nav js-slider_nav"></ul>
    </div>
    <div class="familysite_section js-familysite_section">
      <div class="familysite_dropbox js-dropbox">
        <p class="familysite_select js-dropbox_select">관련 사이트
          <span class="arrow_box"><img src="images/arrow_down_black.png" alt="화살표"></span>
        </p>
        <ul class="familysite_list js-dropbox_list">
          <li><a href="https://lib.anyang.go.kr/seoksu/" target="_blank">석수도서관</a></li>
          <li><a href="https://lib.anyang.go.kr/manan/" target="_blank">만안도서관</a></li>
          <li><a href="https://lib.anyang.go.kr/bakdal/" target="_blank">박달도서관</a></li>
          <li><a href="https://lib.anyang.go.kr/hogye/" target="_blank">호계도서관</a></li>
          <li><a href="https://lib.anyang.go.kr/bisan/" target="_blank">비산도서관</a></li>
          <li><a href="https://lib.anyang.go.kr/child/" target="_blank">어린이도서관</a></li>
          <li><a href="https://lib.anyang.go.kr/beolmal/" target="_blank">벌말도서관</a></li>
          <li><a href="https://lib.anyang.go.kr/gwanyang/" target="_blank">관양도서관</a></li>
          <li><a href="https://lib.anyang.go.kr/samdeok/" target="_blank">삼덕도서관</a></li>
        </ul>
      </div>
    </div>
  </div>
  <?php
    include_once __DIR__. '/include/footer.php';
  ?>

  <script>
  window.addEventListener('load', () => {
    handleDropbox(document.querySelector('.js-search_section'), true);
    visualSlider();
    shortcutIconSlider();
    notice();
    handleTab(document.querySelector('.js-books_section'));
    books();
    bannerSlider();
    handleDropbox(document.querySelector('.js-familysite_section'));
  });
  </script>
</body>

</html>