"use strict";

const URL = "https://my-json-server.typicode.com/dev-yun0525/fakedb/libUserAccounts";
const LOCALSTORAGE_KEY_LIB_USER = "currentLibUser";
const currentUser = localStorage.getItem(LOCALSTORAGE_KEY_LIB_USER);

handleNav();

// href 값이 '#'인 A 태그 이동 차단
document.addEventListener("click", (e) => {
  const homeURL = "http://pyeongchonlib.dothome.co.kr/index.php#";
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
  const CLASSNAME_HIDDEN = "hidden";

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
      // 'on' class => css transition 처리
      elm.classList.toggle(CLASSNAME_ON);
    }
    function toggleClassShow(elm) {
      // 'show' class => css display 처리
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

  // 모바일 아코디언 nav 메뉴
  $depthTitles.forEach((elm) => {
    // PC 해상도는 무시
    if (screen.width >= 1132) return;
    elm.addEventListener("click", (e) => {
      //이벤트 대상이 아닌 js-depth1_title 배열 취득
      const $otherTitles = [...$depthTitles].filter((title) => !(title === e.target));
      //이벤트 대상의 형제 노드(depth2) 취득
      const $targetDepth2 = elm.nextElementSibling;

      removeClassOn($otherTitles);
      e.target.classList.toggle(CLASSNAME_ON);
      hideAllDepth2();
      toggleSlide($targetDepth2);
    });
  });

  // 로그인 시 유틸리티 메뉴
  if (currentUser !== null) {
    const $utilMenu = screen.width < 768 ? document.querySelector(".js-util_mobile") : document.querySelector(".js-util");
    const $signInMenu = $utilMenu.querySelector(".js-signin_menu");
    const $signUpMenu = $utilMenu.querySelector(".js-signup_menu");

    $signInMenu.classList.add(CLASSNAME_HIDDEN);
    $signUpMenu.classList.add(CLASSNAME_HIDDEN);

    const $signOutMenu = document.createElement("li");
    const img = document.createElement("img");
    img.setAttribute("src", "images/logout.png");
    img.setAttribute("alt", "로그아웃");
    $signOutMenu.append(img);
    const link = document.createElement("a");
    link.textContent = `로그아웃`;
    link.setAttribute("href", "index.php");
    $signOutMenu.append(link);
    // 로그아웃 시 로컬스토리지 데이터 삭제
    $signOutMenu.addEventListener("click", () => {
      localStorage.removeItem(LOCALSTORAGE_KEY_LIB_USER);
    });
    $utilMenu.prepend($signOutMenu);

    const $greeting = document.createElement("li");
    $greeting.textContent = `반갑습니다, ${currentUser}님`;
    $utilMenu.prepend($greeting);
  }
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

// 회원가입 및 로그인
function handleAccount(action) {
  const $signUpForm = document.querySelector(".js-signup_form");
  const $signInForm = document.querySelector(".js-signin_form");
  const $userid = document.querySelector(".js-signup_userid");
  const $password = document.querySelector(".js-signup_password");
  const $passwordCheck = document.querySelector(".js-signup_password_check");

  const ACTION_SIGNUP = "signup";
  const ACTION_SIGNIN = "signin";
  const CLASSNAME_ON = "on";
  const LOCALSTORAGE_KEY_ACCOUNTS = "libUserAccounts";

  // 에러 출력
  function paintError(element, message) {
    element.nextElementSibling.textContent = message;
    element.classList.add(CLASSNAME_ON);
  }

  // 에러 지우기
  function removeError(element) {
    element.nextElementSibling.textContent = "";
    element.classList.remove(CLASSNAME_ON);
  }

  /**
   * 사용자 계정 생성 클래스
   */
  class UserAccount {
    constructor(username, password) {
      this.id = username;
      this.password = password;
    }

    /**
     * 로컬스토리지에 저장 메서드
     */
    saveLocalStorage() {
      let libUserAccounts = JSON.parse(localStorage.getItem(LOCALSTORAGE_KEY_ACCOUNTS)) ?? [];
      libUserAccounts.push(this);
      localStorage.setItem(LOCALSTORAGE_KEY_ACCOUNTS, JSON.stringify(libUserAccounts));
    }
  }

  // Input 유효성 검사
  async function validateInputs() {
    const usernameRegExp = /^(?=.*[a-zA-Z])[a-zA-Z0-9]{6,20}$/g;
    const passwordRegExp = /^[^\s]{6,20}$/g;
    const localStorageAccounts = JSON.parse(localStorage.getItem(LOCALSTORAGE_KEY_ACCOUNTS)) ?? [];
    let duplicatedLocalAccounts = [];

    // DB에서 중복되는 아이디 조회
    const idCheckResponse = await fetch(`${URL}/${$userid.value}`);
    const dbData = await idCheckResponse.json();

    // 로컬스토리지에서 아이디가 중복되는 계정 추출
    localStorageAccounts.forEach((account) => {
      if (account.id === $userid.value) {
        duplicatedLocalAccounts.push(account);
      }
    });

    // 아이디 검사
    if (!usernameRegExp.test($userid.value)) {
      paintError($userid, `아이디는 공백없이 6~20자의 알파벳 또는 알파벳/숫자 조합으로 입력해주세요.`);
    } else if (action === ACTION_SIGNUP && (dbData.id === $userid.value || duplicatedLocalAccounts.length > 0)) {
      paintError($userid, `이미 사용 중인 아이디입니다.`);
    } else if (action === ACTION_SIGNIN && dbData.id !== $userid.value && duplicatedLocalAccounts.length === 0) {
      paintError($userid, `등록되지 않은 아이디입니다.`);
    } else {
      console.log("ID is validated!!!");
      removeError($userid);
    }

    // 비밀번호 검사
    if (action === ACTION_SIGNUP && !passwordRegExp.test($password.value)) {
      paintError($password, `비밀번호는 공백없이 6~20자로 입력해주세요.`);
    } else if (action === ACTION_SIGNIN && $userid.nextElementSibling.textContent !== "") {
      // 등록되지 않은 아이디는 비밀번호 일치 검사 중단
      removeError($password);
    } else if (action === ACTION_SIGNIN && dbData.password !== $password.value && duplicatedLocalAccounts[0]?.password !== $password.value) {
      paintError($password, `비밀번호가 일치하지 않습니다.`);
    } else {
      removeError($password);
    }

    // 유효성 검사 통과 후 로그인
    if (action === ACTION_SIGNIN && $userid.nextElementSibling.textContent === "" && $password.nextElementSibling.textContent === "") {
      localStorage.setItem(LOCALSTORAGE_KEY_LIB_USER, $userid.value);
      setTimeout(() => {
        window.location.href = "index.php";
      }, 200);
    }

    // 회원가입이 아니면 중단/종료
    if (action !== ACTION_SIGNUP) return;

    // 비밀번호 재확인
    if ($password.value !== $passwordCheck.value) {
      paintError($passwordCheck, `비밀번호가 일치하지 않습니다.`);
    } else {
      removeError($passwordCheck);
    }

    // 유효성 검사 통과 후 회원정보 저장
    if ($userid.nextElementSibling.textContent === "" && $password.nextElementSibling.textContent === "" && $passwordCheck.nextElementSibling.textContent === "") {
      // 회원계정 생성
      const userAccount = new UserAccount($userid.value, $password.value);
      userAccount.saveLocalStorage();
      setTimeout(() => {
        alert("회원가입이 완료되었습니다. 로그인해주세요.");
        window.location.href = "index.php";
      }, 200);
    }
  }

  if (action === ACTION_SIGNUP) {
    $signUpForm.addEventListener("submit", (e) => {
      e.preventDefault();
      validateInputs().catch(console.error);
    });
  } else if (action === ACTION_SIGNIN) {
    $signInForm.addEventListener("submit", (e) => {
      e.preventDefault();
      validateInputs().catch(console.error);
    });
  }
}
