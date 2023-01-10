# 프로젝트명 : 평촌도서관 홈페이지 리뉴얼

# 배포 : [닷홈(웹호스팅 - php지원)](http://pyeongchonlib.dothome.co.kr/index.php "닷홈으로 이동")

# 기술 스택 : HTML5, CSS(SCSS), Javascript(Vanilla), PHP

# 개발 인원 : 1명

# 구현 기능
1. 사용자 기억 : localStorage에 현재 사용자를 저장하여 새로고침시에도 사용자를 기억
1. 회원가입 : 
  - RegExp 활용하여 유효성 검사
  - DB와 localStorage에 있는 사용자 아이디 중복 검사(AJAX, REST API)
  - DB와 중복 검사시 비동기 방식을 async/await 으로 처리하여 동기로 처리
  - 모든 검사 통과 시 localStorage에 사용자 정보 저장 및 홈으로 이동
1. 로그인 : 
  - 로그인 시 DB와 localStorage에 저장된 아이디인지 검사
  - 저장된 아이디인 경우 비밀번호 대조
  - 모든 검사 통과 시 localStorage에 현재 사용자로 저장하고 홈으로 이동
  - 저장된 현재 사용자 아이디 표시 및 로그인/회원가입 숨기기(DOM element 조작)
1. 로그아웃 :  
  - 로그아웃 시 localStorage에 저장된 사용자 이름 삭제 및 홈으로 이동
  - 로그인/회원가입 보이기
1. 슬라이더 : 페이드 인/아웃, 컨트롤러(화살표)+무한 루프, 네이게이션(dot)+자동 무한 루프 구현
1. 데이터 탭 : HTML data- 속성/dataset 프로퍼티 활용
1. 드롭박스

# 상세 설명 :
- 헤더/푸터를 PHP include로 분리하여 관리가 용이  
- [가짜 DB](https://my-json-server.typicode.com/dev-yun0525/fakedb/todos)  
백엔드 서버 부재로 불러오기만 가능한 가짜 DB 연동(데이터 수정 불가) -> 새로 가입한 사용자는 localStorage에 정보 저장
