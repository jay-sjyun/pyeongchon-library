<?php
  include_once __DIR__. '/include/head.php';
?>

<body>
  <?php
    include_once __DIR__. '/include/gnb.php';
  ?>
  <div class="page_info_wrap">
    <div class="center_wrap">
      <h2 class="page_title">로그인</h2>
    </div>
  </div>
  <div class="signin_section">
    <div class="center_wrap">
      <form action="" class="signin_form js-signin_form">
        <label for="userid" class="signin_label">아이디</label>
        <input type="text" id="userid" class="signin_input js-signup_userid" required maxlength="20">
        <span class="error_txt"></span>
        <label for="password" class="signin_label">비밀번호</label>
        <input type="password" id="password" class="signin_input js-signup_password" required maxlength="20">
        <span class="error_txt"></span>
        <button type="submit" class="btn_signin">로그인</button>
        <a href="signup.php" class="btn_signup">회원가입</a>
      </form>
      <div class="signup_info">
        <p class="guide1">
          이미 사용 중인 회원 정보 (임시 DB에 저장) :<br>
          아이디: 'unity01', 비밀번호 '123123'<br>
          아이디: 'welcome', 비밀번호 '123!@#qweQWE'
        </p>
        <a href="https://my-json-server.typicode.com/dev-yun0525/fakedb/libUserAccounts" target="_blank"
          class="db_link">임시 DB 바로가기</a>
        <!-- <p class="guide2">기존에 사용중인 계정정보로 로그인 하시거나, 새로 가입하신 회원은 localStorage에 저장된 정보로 로그인하실 수 있습니다.</p> -->
      </div>
    </div>
  </div>
  <?php
    include_once __DIR__. '/include/footer.php';
  ?>

  <script>
  window.addEventListener('load', () => {
    handleAccount('signin');
  });
  </script>
</body>