"use strict";

handleNav();

// href 값이 '#'인 A 태그 이동 차단
document.addEventListener("click", (e) => {
  const homeURL = "http://localhost:3000/index.php#";
  if (e.target.href === homeURL || e.target.parentNode.href === homeURL) {
    e.preventDefault();
  }
});

/**
 * up down 슬라이드 애니메이션 토글
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

// 네비게이션 gnb
function handleNav() {
  const $hamburger = document.querySelector(".js-hamburger_menu");
  const $nav = document.querySelector(".js-nav");
  const $depthTitles = document.querySelectorAll(".js-depth1_title");
  const $depth2Elms = document.querySelectorAll(".js-depth2_wrap");

  const CLASSNAME_ON = "on";
  const CLASSNAME_SHOW = "show";

  // DOM 요소마다 'on' class 제거
  function removeClassOn(arr) {
    arr.forEach((elm) => {
      elm.classList.remove(CLASSNAME_ON);
    });
  }

  // 모든 js-depth2_wrap 숨김
  function hideAllDepth2() {
    $depth2Elms.forEach((elm) => {
      elm.style.height = 0;
    });
  }

  // 모바일 햄버거 메뉴 토글
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

  $hamburger.addEventListener("click", toggleHamburger);

  //모바일 아코디언 nav 메뉴
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

/**
 * 드롭박스 기능
 * @param area DOM element 영역 지정
 * @param {boolean} copyItemTxt 선택한 아이템 텍스트 복사(기본 false)
 */
function handleDropbox(area, copyItemTxt = false) {
  const $dropbox = area.querySelector(".js-dropbox");
  const $toggleBtn = area.querySelector(".js-dropbox_select");
  const $itemList = area.querySelector(".js-dropbox_list");

  const CLASSNAME_ON = "on";

  function toggleItemList() {
    $dropbox.classList.toggle(CLASSNAME_ON);
  }

  function handleItemSelect(e) {
    if (copyItemTxt) {
      const itemTxt = e.target.textContent;
      $toggleBtn.childNodes[0].nodeValue = itemTxt;
    }
    if (e.target.matches("li")) {
      $dropbox.classList.remove(CLASSNAME_ON);
    }
  }

  function closeDropbox(e) {
    if (e.target !== $toggleBtn && e.target !== $itemList) {
      $dropbox.classList.remove(CLASSNAME_ON);
    }
  }

  $toggleBtn.addEventListener("click", toggleItemList);
  $itemList.addEventListener("click", handleItemSelect);
  document.body.addEventListener("click", closeDropbox);
}

// fade in and out 슬라이더(랜딩 페이지 비주얼)
function visualSlider() {
  const CLASSNAME_ON = "on";
  const $firstSlide = document.querySelector(".visual_section .slider_item:first-child");

  function slide() {
    const $currentSlide = document.querySelector(`.visual_section .${CLASSNAME_ON}`);

    if ($currentSlide) {
      $currentSlide.classList.remove(CLASSNAME_ON);

      const $nextSlide = $currentSlide.nextElementSibling;

      $nextSlide ? $nextSlide.classList.add(CLASSNAME_ON) : $firstSlide.classList.add(CLASSNAME_ON);
    } else {
      $firstSlide.classList.add(CLASSNAME_ON);
    }
  }

  slide();
  setInterval(slide, 2000);
}

// 루프 loop 슬라이더(랜딩 페이지 바로가기 아이콘)
function shortcutIconSlider() {
  const $area = document.querySelector(".js-shortcut_icon_section");
  const $slider = $area.querySelector(".js-slider");
  const $slides = [...$slider.querySelectorAll("li")];
  const $fragment = new DocumentFragment();
  const $fragment2 = new DocumentFragment();
  const $prevBtn = $area.querySelector(".js-prev_btn");
  const $nextBtn = $area.querySelector(".js-next_btn");
  let currentIdx = 0;
  const slidesCount = $slides.length;
  const slideWidth = $slides[0].offsetWidth;
  const initSliderWidth = slideWidth * slidesCount;

  const CLASSNAME_ANIMATED = "animated";
  const CLASSNAME_CLONE = "clone";

  //슬라이드 복사하여 앞에 추가
  $slides.forEach((elm) => {
    const clone = elm.cloneNode(true);
    clone.classList.add(CLASSNAME_CLONE);
    $fragment.appendChild(clone);
  });
  $slider.prepend($fragment);

  //슬라이드 복사하여 뒤에 추가
  $slides.forEach((elm) => {
    const clone = elm.cloneNode(true);
    clone.classList.add(CLASSNAME_CLONE);
    $fragment2.appendChild(clone);
  });
  $slider.appendChild($fragment2);

  //슬라이더 시작 위치 지정
  $slider.style.transform = `translateX(-${initSliderWidth}px)`;

  //슬라이더 시작 위치 지정 후 css transition 부여
  setTimeout(() => {
    $slider.classList.add(CLASSNAME_ANIMATED);
  }, 100);

  //슬라이더 위치 초기화
  function resetSliderPosition() {
    $slider.classList.remove(CLASSNAME_ANIMATED);
    currentIdx = 0;
    $slider.style.left = 0;
  }

  //슬라이더 이동
  function moveSlide(index) {
    $slider.style.left = -index * slideWidth;
    if (index === slidesCount || index === -slidesCount) {
      setTimeout(resetSliderPosition, 200);
    }
    $slider.classList.add(CLASSNAME_ANIMATED);
  }

  $prevBtn.addEventListener("click", () => {
    moveSlide(--currentIdx);
  });

  $nextBtn.addEventListener("click", () => {
    moveSlide(++currentIdx);
  });
}

/**
 * tab 기능
 * @param area DOM element 영역 지정
 */
function handleTab(area) {
  const $dataTabs = [...area.querySelectorAll(".js-data_tabs li")];
  const $dataBoxes = [...area.querySelectorAll(".js-data_box")];

  const CLASSNAME_ON = "on";

  function showDataContent(e) {
    if (!e.target.hasAttribute("data-tab")) return;
    const category = e.target.dataset.tab;
    //data 값(=category)이 일치하는 databox 를 필터링
    const $targetDataBox = $dataBoxes.filter((elm) => elm.dataset.content === category);

    $dataTabs.forEach((elm) => elm.classList.remove(CLASSNAME_ON));
    e.target.classList.add(CLASSNAME_ON);
    $dataBoxes.forEach((elm) => elm.classList.remove(CLASSNAME_ON));
    $targetDataBox[0].classList.add(CLASSNAME_ON);
  }

  area.addEventListener("click", showDataContent);
}

// 루프 loop 슬라이더 (랜딩 페이지 사이트 배너)
function bannerSlider() {
  const $area = document.querySelector(".js-banner_section");
  const $slider = $area.querySelector(".js-slider");
  const $slides = [...$slider.querySelectorAll("li")];
  const $navigation = $area.querySelector(".js-slider_nav");
  const $cloneFragment = new DocumentFragment();
  const $navFragment = new DocumentFragment();
  let currentIdx = 0;
  const slideWidth = $slides[0].offsetWidth;

  const CLASSNAME_ANIMATED = "animated";
  const CLASSNAME_ON = "on";

  // clone 및 indicator(dots) 추가
  $slides.forEach((elm) => {
    const clone = elm.cloneNode(true);
    clone.classList.add("clone");
    $cloneFragment.appendChild(clone);

    const li = document.createElement("li");
    $navFragment.appendChild(li);
  });
  $slider.appendChild($cloneFragment);
  $navigation.appendChild($navFragment);

  const $navIndicators = [...$navigation.querySelectorAll("li")];

  // 현재 indicator 표시
  function colorNav() {
    const navIdx = currentIdx === $slides.length ? 0 : currentIdx;

    $navIndicators.forEach((elm) => elm.classList.remove(CLASSNAME_ON));
    $navIndicators[navIdx].classList.add(CLASSNAME_ON);
  }

  // 슬라이더 위치 초기화
  function resetSliderPosition() {
    $slider.classList.remove(CLASSNAME_ANIMATED);
    currentIdx = 0;
    $slider.style.left = 0;
  }

  // 슬라이더 이동
  function moveSlide(index) {
    $slider.style.left = -index * slideWidth;
    if (index === $slides.length) {
      setTimeout(resetSliderPosition, 250);
    }
    $slider.classList.add(CLASSNAME_ANIMATED);
  }

  let intervalID;
  /**
   * interval 토글 toggle
   * @param {boolean} startInterval true: 시작 / false: 정지
   */
  function toggleInterval(startInterval) {
    if (startInterval) {
      intervalID = setInterval(() => {
        moveSlide(++currentIdx);
        colorNav();
      }, 1000);
    } else {
      clearInterval(intervalID);
    }
  }

  // indicator 클릭 시 슬라이더 이동
  function handleSliderNav(e) {
    toggleInterval(false);
    if (e.target.matches("li")) {
      currentIdx = $navIndicators.indexOf(e.target);
      moveSlide(currentIdx);
      colorNav();
    }
    toggleInterval(true);
  }

  colorNav(currentIdx);
  toggleInterval(true);
  $navigation.addEventListener("click", handleSliderNav);
}
