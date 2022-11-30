<?php
  include_once __DIR__. '/include/head.php';
?>

<body>
  <?php
    include_once __DIR__. '/include/gnb.php';
  ?>
  <div class="search_section">
    <div class="search_wrap">
      <h2 class="search_title">도서검색</h2>
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
  <!-- 
  <section id="shortcut_section">
    <h2 class="hidden"><a href="#">서비스 메뉴</a></h2>
    <div class="center_wrap">
      <div class="visual">
        <div class="swiper-container shortcut_swiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <a href="#"><img src="images/shortcut/1_info.png" alt="info" /></a>
              <div class="shortcut_text">도서관이용안내</div>
            </div>
            <div class="swiper-slide">
              <a href="#"><img src="images/shortcut/2_rent.png" alt="book_rent" /></a>
              <div class="shortcut_text">대출현황조회</div>
            </div>
            <div class="swiper-slide">
              <a href="#"><img src="images/shortcut/3_digital.png" alt="digital_library" /></a>
              <div class="shortcut_text">디지털도서관예약</div>
            </div>
            <div class="swiper-slide">
              <a href="#"><img src="images/shortcut/4_seat.png" alt="seat" /></a>
              <div class="shortcut_text">열람실좌석현황</div>
            </div>
            <div class="swiper-slide">
              <a href="#"><img src="images/shortcut/5_wishlist.png" alt="wishlist" /></a>
              <div class="shortcut_text">희망도서신청</div>
            </div>
            <div class="swiper-slide">
              <a href="#"><img src="images/shortcut/6_event.png" alt="event" /></a>
              <div class="shortcut_text">문화행사신청</div>
            </div>
            <div class="swiper-slide">
              <a href="#"><img src="images/shortcut/7_donation.png" alt="book_donation" /></a>
              <div class="shortcut_text">도서기증안내</div>
            </div>
          </div>
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
        </div>
      </div>
    </div>
  </section>
  <div class="center_wrap">
    <section id="notice">
      <div id="notice_title">
        <h2><a href="#">공지사항</a></h2>
        <a href="#"><img src="images/notice/more_btn_black.png" alt="more" /></a>
      </div>
      <hr class="notice_divider" />
      <table>
        <tr>
          <td><a href="#">2020년 평촌도서관 파트타임 근로자 채용 공고</a></td>
          <td class="date">19-12-02</td>
        </tr>
        <tr>
          <td><a href="#">&#91;평촌&#93;짧은 동화 긴생각 독서퀴즈 2019년 11월 당첨자 및 12월 문제 출제서 안내</a></td>
          <td class="date">19-12-01</td>
        </tr>
        <tr>
          <td><a href="#">평촌도서관 최영미 시인 특강 취소 안내</a></td>
          <td class="date">19-11-29</td>
        </tr>
        <tr>
          <td><a href="#">2019년 평촌도서관 희망도서 마감 안내</a></td>
          <td class="date">19-11-29</td>
        </tr>
        <tr>
          <td><a href="#">2020년도 안양시 &#40;평촌,관양,비산,호계,어린이&#41;도서관 청소·안내·시설 기간제근로자 채용 공고</a></td>
          <td class="date">19-11-28</td>
        </tr>
      </table>
    </section>
    <section id="block">
      <h2 class="hidden"><a href="#">바로가기</a></h2>
      <div id="schedule">
        <div class="block_wrap">
          <h3><a href="#">도서관 일정</a></h3>
          <p><a href="#">살펴보기</a></p>
        </div>
      </div>
      <div id="faq">
        <div class="block_wrap">
          <h3><a href="#">자주하는 질문</a></h3>
        </div>
      </div>
      <div id="sites">
        <div class="block_wrap">
          <h3><a href="#">추천사이트</a></h3>
          <a href="#">
            <img src="images/block/more_btn_white.png" alt="more" />
          </a>
        </div>
      </div>
      <div id="ask">
        <div class="block_wrap">
          <h3>
            <a href="#">사서에게<br />물어보세요</a>
          </h3>
          <p><a href="#">지식정보 검색</a></p>
        </div>
      </div>
    </section>
  </div>
  <div id="books">
    <div class="center_wrap">
      <section id="book_best">
        <div class="book_section_head">
          <h2><a href="#">대출 베스트</a></h2>
          <ul class="tab">
            <li class="current" data-tab="general"><a href="#">일반도서</a></li>
            <li id="kid_tab" data-tab="kid"><a href="#">어린이</a></li>
          </ul>
          <a href="#"><img src="images/book/more_btn_black.png" alt="more" /></a>
        </div>
        <div id="general" class="tab_content current">
          <div class="visual">
            <div class="swiper-container book_general_swiper">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <a href="#"><img src="images/book/best1.jpg" alt="book_best1" /></a>
                  <div class="book_title">공부머리 독서법</div>
                  <div class="book_info">최승필 지음 | 책구루<br />2018. 05. 03</div>
                </div>
                <div class="swiper-slide">
                  <a href="#"><img src="images/book/best2.jpg" alt="book_best2" /></a>
                  <div class="book_title">90년생이 온다</div>
                  <div class="book_info">임홍택 지음 | 웨일북<br />2018. 11. 16</div>
                </div>
                <div class="swiper-slide">
                  <a href="#"><img src="images/book/best3.jpg" alt="book_best3" /></a>
                  <div class="book_title">죽음</div>
                  <div class="book_info">베르나르 베르베르 지음 | 열린책들<br />2019. 05. 30</div>
                </div>
              </div>
              <div class="swiper-button-next book-button-next"></div>
              <div class="swiper-button-prev book-button-prev"></div>
            </div>
          </div>
        </div>
        <div id="kid" class="tab_content">
          <div class="visual">
            <div class="swiper-container book_kid_swiper">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <a href="#"><img src="images/book/best_kid1.jpg" alt="book_best_kid1" /></a>
                  <div class="book_title">커다란 양 힐다</div>
                  <div class="book_info">에밀리오 우르베루아가 지음 | 지양사<br />2019. 03. 12</div>
                </div>
                <div class="swiper-slide">
                  <a href="#"><img src="images/book/best_kid2.jpg" alt="book_best_kid2" /></a>
                  <div class="book_title">친구 사귀기</div>
                  <div class="book_info">김영진 지음 | 길벗어린이<br />2018. 03. 20</div>
                </div>
                <div class="swiper-slide">
                  <a href="#"><img src="images/book/best_kid3.jpg" alt="book_best_kid3" /></a>
                  <div class="book_title">못생긴 친구를 소개합니다</div>
                  <div class="book_info">줄리아 도널드슨 글<br />악셀 셰플러 그림 | 비룡소<br />2017. 09. 15</div>
                </div>
              </div>
              <div class="swiper-button-next book-button-next"></div>
              <div class="swiper-button-prev book-button-prev"></div>
            </div>
          </div>
        </div>
      </section>
      <section id="book_recommend">
        <div class="book_section_head">
          <h2><a href="#">추천도서</a></h2>
          <a href=""><img src="images/book/more_btn_black.png" alt="more" /></a>
        </div>
        <div id="recommend">
          <div class="visual">
            <div class="swiper-container book_recommend_swiper">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <a href="#"><img src="images/book/recommend1.jpg" alt="book_recommendation1" /></a>
                  <div class="book_title">요즘 아이들 마음고생의 비밀</div>
                  <div class="book_info">김현수 지음 | 해냄출판사<br />2019. 04. 08</div>
                </div>
                <div class="swiper-slide">
                  <a href="#"><img src="images/book/recommend2.jpg" alt="book_recommendation2" /></a>
                  <div class="book_title">임헌영의 유럽문학기행</div>
                  <div class="book_info">임헌영 지음 | 역사비평사<br />2019. 07. 24</div>
                </div>
                <div class="swiper-slide">
                  <a href="#"><img src="images/book/recommend3.jpg" alt="book_recommendation3" /></a>
                  <div class="book_title">한밤중 달빛 식당</div>
                  <div class="book_info">이분희 글<br />윤태규 그림 | 비룡소<br />2018. 03. 15</div>
                </div>
              </div>
              <div class="swiper-button-next book-button-next"></div>
              <div class="swiper-button-prev book-button-prev"></div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>
  <div id="banner_and_family">
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
    visualSlider()
  })
  </script>
</body>

</html>