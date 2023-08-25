<?php
  include_once __DIR__. '/include/head.php';
?>

<body>
  <?php
    include_once __DIR__. '/include/gnb.php';
  ?>
  <div class="page_info_wrap">
    <div class="center_wrap">
      <h2 class="page_title">회원가입</h2>
    </div>
  </div>
  <div class="signup_section">
    <div class="center_wrap">
      <form action="/" class="signup_form js-signup_form">
        <label for="userid" class="signup_label">아이디</label>
        <input type="text" id="userid" class="signup_input js-signup_userid" required maxlength="20">
        <span class="error_txt"></span>
        <label for="password" class="signup_label">비밀번호</label>
        <input type="password" id="password" class="signup_input js-signup_password" required maxlength="20">
        <span class="error_txt"></span>
        <label for="password_check" class="signup_label">비밀번호 확인</label>
        <input type="password" id="password_check" class="signup_input js-signup_password_check" required
          maxlength="20">
        <span class="error_txt"></span>
        <button type="submit" class="btn_signup">회원가입</button>
      </form>
      <div class="signup_info">
        <p class="guide1">
          이미 사용 중인 아이디 (임시 DB에 저장) :<br>
          'unity01', 'welcome'
        </p>
        <a href="https://my-json-server.typicode.com/dev-yun0525/fakedb/libUserAccounts" target="_blank"
          class="db_link">임시 DB 바로가기</a>
        <p class="guide2">
          새로 가입한 회원 정보는 로컬 스토리지에 저장되어 로그인에 사용할 수 있습니다.
        </p>
      </div>
    </div>
  </div>
  <?php
    include_once __DIR__. '/include/footer.php';
  ?>

  <script>
  window.addEventListener('load', () => {
    handleAccount('signup');
  });
  </script>
</body>