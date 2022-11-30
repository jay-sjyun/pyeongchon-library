"use strict";

handleNav();

// href 값이 '#'인 A 태그 이동 차단
document.addEventListener("click", (e) => {
  const hrefValue = e.target.getAttribute("href");
  if (hrefValue === "#") {
    e.preventDefault();
  }
});

function handleNav() {
  const $hamburger = document.querySelector(".js-hamburger_menu");
  const $nav = document.querySelector(".js-nav");
  const $depthTitles = document.querySelectorAll(".js-depth1_title");
  const $depth2Elms = document.querySelectorAll(".js-depth2_wrap");

  const CLASSNAME_ON = "on";
  const CLASSNAME_SHOW = "show";

  /**
   * DOM 요소마다 'on' class 제거
   * @param arr DOM elements array
   */
  function removeClassOn(arr) {
    arr.forEach((elm) => {
      elm.classList.remove(CLASSNAME_ON);
    });
  }

  /**모든 js-depth2_wrap 숨김 */
  function hideAllDepth2() {
    $depth2Elms.forEach((elm) => {
      elm.style.height = 0;
    });
  }

  /**모바일 햄버거 메뉴 토글*/
  function toggleHamburger() {
    const $navBg = document.querySelector(".js-nav_bg");

    function toggleClassOn(elm) {
      //'on' class => css transition 처리
      elm.classList.toggle(CLASSNAME_ON);
    }
    function toggleClassShow(elm) {
      //'show' class => css display 처리
      elm.classList.toggle(CLASSNAME_SHOW);
    }

    $navBg.classList.toggle(CLASSNAME_ON);

    if ($nav.classList.contains(CLASSNAME_SHOW)) {
      // 닫을 때 실행
      $hamburger.innerHTML = "전체<br />메뉴";
      removeClassOn($depthTitles);
      hideAllDepth2();
      toggleClassOn($nav);
      setTimeout(() => {
        toggleClassShow($nav);
      }, 600);
      // body scroll 허용 추가
    } else {
      // 열 때 실행
      $hamburger.innerHTML = "메뉴<br />닫기";
      toggleClassShow($nav);
      setTimeout(() => {
        toggleClassOn($nav);
      });
      // body scroll 금지 추가
    }
  }

  /**
   * 상하 슬라이드 애니메이션 토글
   * @param elm DOM element
   */
  function toggleSlide(elm) {
    let num;
    0 === elm.offsetHeight
      ? ((elm.style.height = "auto"),
        (num = elm.offsetHeight),
        (elm.style.height = 0),
        // void operator로 height = 0 캐치
        void elm.offsetHeight,
        (elm.style.height = `${num}px`))
      : (elm.style.height = 0);
  }

  $hamburger.addEventListener("click", toggleHamburger);
  $depthTitles.forEach((elm) => {
    // PC 해상도는 무시
    if (screen.width >= 1132) return;
    elm.addEventListener("click", (e) => {
      //이벤트 대상이 아닌 js-depth1_title 배열 취득
      const $otherTitles = [...$depthTitles].filter((title) => !(title === e.target));
      //이벤트 대상의 형제 노드 취득
      const $targetDepth2 = elm.parentNode.querySelector(".js-depth2_wrap");

      removeClassOn($otherTitles);
      e.target.classList.toggle(CLASSNAME_ON);
      hideAllDepth2();
      toggleSlide($targetDepth2);
    });
  });
}

function visualSlider() {
  const CLASSNAME_ON = "on";
  const firstSlide = document.querySelector(".visual_section .slider_item:first-child");

  function slide() {
    const currentSlide = document.querySelector(`.visual_section .${CLASSNAME_ON}`);

    if (currentSlide) {
      currentSlide.classList.remove(CLASSNAME_ON);

      const nextSlide = currentSlide.nextElementSibling;

      nextSlide ? nextSlide.classList.add(CLASSNAME_ON) : firstSlide.classList.add(CLASSNAME_ON);
    } else {
      firstSlide.classList.add(CLASSNAME_ON);
    }
  }

  slide();
  setInterval(slide, 2000);
}
