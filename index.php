<?php
  include_once __DIR__. '/include/head.php';
?>

<body>
  <?php
    include_once __DIR__. '/include/gnb.php';
  ?>
  <div class="search_section">
    <div class="search_wrap">
      <h2 class="section_title">도서검색</h2>
      <div class="category_dropbox js-dropbox">
        <p class="category_select js-dropbox_select">분류
          <span class="arrow_box"><img src="images/arrow_down_white.png" alt="화살표"></span>
        </p>
        <ul class="category_list">
          <li>서명</li>
          <li>저자</li>
          <li>출판사</li>
        </ul>
      </div>
      <form class="search_form">
        <input type="text" placeholder="검색어를 입력하세요." class="search_input" />
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
      <ul class="notice_list">
        <li>
          <span class="notice_title">
            <a href="#">2023년 평촌도서관 파트타임 근로자 채용 공고</a>
          </span>
          <span class="notice_date">
            22-12-02
          </span>
        </li>
        <li>
          <span class="notice_title">
            <a href="#">&#91;평촌&#93;짧은 동화 긴생각 독서퀴즈 2022년 11월 당첨자 및 12월 문제 출제서 안내</a>
          </span>
          <span class="notice_date">
            22-12-01
          </span>
        </li>
        <li>
          <span class="notice_title">
            <a href="#">평촌도서관 최영미 시인 특강 취소 안내</a>
          </span>
          <span class="notice_date">
            22-11-29
          </span>
        </li>
        <li>
          <span class="notice_title">
            <a href="#">2022년 평촌도서관 희망도서 마감 안내</a>
          </span>
          <span class="notice_date">
            22-11-29
          </span>
        </li>
        <li>
          <span class="notice_title">
            <a href="#">2023년도 안양시 &#40;평촌,관양,비산,호계,어린이&#41;도서관 청소·안내·시설 기간제근로자 채용 공고</a>
          </span>
          <span class="notice_date">
            22-11-28
          </span>
        </li>
      </ul>
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
          <li>
            <a href="#" class="book_content">
              <div class="book_cover">
                <img src="images/book_best1.jpg" alt="불편한 편의점">
              </div>
              <strong class="book_title">불편한 편의점</strong>
              <span class="book_info">김호연 지음 | 나무옆의자</span>
              <span class="book_date">2021</span>
            </a>
          </li>
          <li>
            <a href="#" class="book_content">
              <div class="book_cover">
                <img src="images/book_best2.jpg" alt="체리새우:비밀글입니다">
              </div>
              <strong class="book_title">체리새우:비밀글입니다</strong>
              <span class="book_info">황영미 지음 | 문학동네</span>
              <span class="book_date">2019</span>
            </a>
          </li>
          <li>
            <a href="#" class="book_content">
              <div class="book_cover">
                <img src="images/book_best3.jpg" alt="이상한 엄마">
              </div>
              <strong class="book_title">이상한 엄마</strong>
              <span class="book_info">백희나 지음 | 책읽는곰</span>
              <span class="book_date">2022</span>
            </a>
          </li>
          <li>
            <a href="#" class="book_content">
              <div class="book_cover">
                <img src="images/book_best4.jpg" alt="페인트">
              </div>
              <strong class="book_title">페인트</strong>
              <span class="book_info">이희영 지음 | 창비</span>
              <span class="book_date">2019</span>
            </a>
          </li>
        </ul>
        <a href="#" title="더보기" class="more_link"><img src="images/more_btn_black.png" alt="더보기"></a>
      </div>
      <div class="books_list_wrap js-data_box" data-content="recommend">
        <ul class="books_list">
          <li>
            <a href="#" class="book_content">
              <div class="book_cover"><img src="images/book_recommend1.jpg" alt="걱정 많은 어른들을 위한 화학 이야기"></div>
              <strong class="book_title">걱정 많은 어른들을 위한 화학 이야기</strong>
              <span class="book_info">윤정인 지음 | 푸른숲</span>
              <span class="book_date">2022</span>
            </a>
          </li>
          <li>
            <a href="#" class="book_content">
              <div class="book_cover"><img src="images/book_recommend2.jpg" alt="기후미식"></div>
              <strong class="book_title">기후미식</strong>
              <span class="book_info">이의철 지음 | 위즈덤하우스</span>
              <span class="book_date">2022</span>
            </a>
          </li>
          <li>
            <a href="#" class="book_content">
              <div class="book_cover"><img src="images/book_recommend3.jpg" alt="얼마나 이상하든"></div>
              <strong class="book_title">얼마나 이상하든</strong>
              <span class="book_info">김희진 지음 | 자음과모음</span>
              <span class="book_date">2021</span>
            </a>
          </li>
          <li>
            <a href="#" class="book_content">
              <div class="book_cover"><img src="images/book_recommend4.jpg" alt="1등은 당신처럼 SNS하지 않는다"></div>
              <strong class="book_title">1등은 당신처럼 SNS하지 않는다</strong>
              <span class="book_info">정진수 지음 | 나비의 활주로</span>
              <span class="book_date">2022</span>
            </a>
          </li>
        </ul>
        <a href="#" title="더보기" class="more_link"><img src="images/more_btn_black.png" alt="더보기"></a>
      </div>
      <div class="books_list_wrap js-data_box" data-content="new">
        <ul class="books_list">
          <li>
            <a href="#" class="book_content">
              <div class="book_cover"><img src="images/book_new1.jpg" alt="초등학생이 좋아하는 동화책 200"></div>
              <strong class="book_title">초등학생이 좋아하는 동화책 200</strong>
              <span class="book_info">이시내 지음 | 북하우스</span>
              <span class="book_date">2022</span>
            </a>
          </li>
          <li>
            <a href="#" class="book_content">
              <div class="book_cover"><img src="images/book_new2.jpg" alt="인생의 허무를 어떻게 할 것인가"></div>
              <strong class="book_title">인생의 허무를 어떻게 할 것인가</strong>
              <span class="book_info">김영민 지음 | 사회평론아카데미</span>
              <span class="book_date">2022</span>
            </a>
          </li>
          <li>
            <a href="#" class="book_content">
              <div class="book_cover"><img src="images/book_new3.jpg" alt="이상한 나라의 책 읽기"></div>
              <strong class="book_title">이상한 나라의 책 읽기</strong>
              <span class="book_info">윤성근 지음 | 드루</span>
              <span class="book_date">2022</span>
            </a>
          </li>
          <li>
            <a href="#" class="book_content">
              <div class="book_cover"><img src="images/book_new4.jpg" alt="필요했어, 이런 미술 수업"></div>
              <strong class="book_title">필요했어, 이런 미술 수업</strong>
              <span class="book_info">조현영 지음 | 다른</span>
              <span class="book_date">2022</span>
            </a>
          </li>
        </ul>
        <a href="#" title="더보기" class="more_link"><img src="images/more_btn_black.png" alt="더보기"></a>
      </div>
    </div>
  </div>

  <!-- <div id="banner_and_family">
    <div class="center_wrap">
      <section id="banner">
        <h2 class="hidden"><a href="#">배너</a></h2>
        <div class="visual">
          <div class="swiper-container banner_swiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <a href="#"><img src="images/banner/banner_01.jpg" alt="banner1" /></a>
              </div>
              <div class="swiper-slide">
                <a href="#"><img src="images/banner/banner_02.jpg" alt="banner2" /></a>
              </div>
              <div class="swiper-slide">
                <a href="#"><img src="images/banner/banner_03.jpg" alt="banner3" /></a>
              </div>
              <div class="swiper-slide">
                <a href="#"><img src="images/banner/banner_04.jpg" alt="banner4" /></a>
              </div>
              <div class="swiper-slide">
                <a href="#"><img src="images/banner/banner_05.jpg" alt="banner5" /></a>
              </div>
              <div class="swiper-slide">
                <a href="#"><img src="images/banner/banner_06.jpg" alt="banner6" /></a>
              </div>
              <div class="swiper-slide">
                <a href="#"><img src="images/banner/banner_07.jpg" alt="banner7" /></a>
              </div>
              <div class="swiper-slide">
                <a href="#"><img src="images/banner/banner_08.jpg" alt="banner8" /></a>
              </div>
            </div>
            <div class="swiper-pagination banner-pagination"></div>
          </div>
        </div>
      </section>
      <section id="family">
        <h2 class="hidden"><a href="#">관련 사이트</a></h2>
        <select class="selectpicker">
          <option value="" disabled selected>관련 사이트</option>
          <option value="0">석수도서관</option>
          <option value="1">만안도서관</option>
          <option value="2">박달도서관</option>
          <option value="3">호계도서관</option>
          <option value="4">비산도서관</option>
          <option value="5">어린이도서관</option>
          <option value="6">벌말도서관</option>
          <option value="7">관양도서관</option>
          <option value="8">삼덕도서관</option>
          <option value="9">안양의 역사</option>
          <option value="10">안양8경</option>
          <option value="11">안양포도</option>
        </select>
      </section>
    </div>
  </div> -->
  <?php
    include_once __DIR__. '/include/footer.php';
  ?>

  <script>
  window.addEventListener('load', () => {
    visualSlider();
    shortcutIconSlider();
    handleTab(document.querySelector('.js-books_section'));
  })
  </script>
</body>

</html>