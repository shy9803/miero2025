      </article>
    </section>
  </main>

  <!-- 하단 푸터 영역 -->
  <footer>
    <div class="f_inner">
      <nav class="f_navi">
        <dl>
          <dt><a href="#" title="미에로">미에로</a></dt>
          <dd><a href="#" title="브랜드 스토리">브랜드 스토리</a></dd>
          <dd><a href="#" title="식이섬유 스토리">식이섬유 스토리</a></dd>
        </dl>
        <dl>
          <dt><a href="#" title="제품소개">제품소개</a></dt>
          <dd><a href="#" title="미에로화이바">미에로화이바</a></dd>
          <dd><a href="#" title="미에로화이바 SPARKLING ZERO SUGAR">미에로화이바 SPARKLING ZERO SUGAR</a></dd>
          <dd><a href="#" title="헬씨올리고">헬씨올리고</a></dd>
        </dl>
        <dl>
          <dt><a href="#" title="미에로 스토리">미에로 스토리</a></dt>
          <dd><a href="#" title="TV광고">TV광고</a></dd>
          <dd><a href="#" title="인쇄광고">인쇄광고</a></dd>
          <dd><a href="#" title="프로모션">프로모션</a></dd>
        </dl>
        <dl>
          <dt><a href="#" title="미에로 이벤트">미에로 이벤트</a></dt>
          <dd><a href="#" title="진행중인 이벤트">진행중인 이벤트</a></dd>
          <dd><a href="#" title="당첨자 발표">당첨자 발표</a></dd>
        </dl>
        <dl>
          <dt><a href="http://shyport.dothome.co.kr/bbs/bbs/board.php?bo_table=mi_notice" title="공지사항">공지사항</a></dt>
          <dd><a href="http://shyport.dothome.co.kr/bbs/bbs/board.php?bo_table=mi_notice" title="NEWS&Notice">News&amp;Notice</a></dd>
        </dl>
        <dl>
          <dt><a href="#" title="현대약품">현대약품</a></dt>
          <dd>&nbsp;</dd>
        </dl>
        <dl>
          <dt>Connect with us</a></dt>
          <dd>
            <a href="#" title="페이스북"><i class="fab fa-facebook-f"></i></a>
            <a href="#" title="인스타그램"><i class="fab fa-instagram"></i></a>
            <a href="#" title="유튜브"><i class="fab fa-youtube"></i></a>
          </dd>
        </dl>
      </nav>
    </div>
    <a href="#" title="위로 바로가기" class="t_btn">
      <img src="../../../miero2025/images/top_up.png" alt="위로 바로가기">
    </a>
    <address>
      <h2>
        <a href="index.html" title="메인페이지로 바로가기">
          <img src="../../../miero2025/images/logo2.png" alt="하단로고">
        </a>
      </h2>
      <p>copyright&copy; 2025 MIERO FIBER. All Rights Reserved.</p>
    </address>
  </footer>

  <!-- 제이쿼리 라이브러리 -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

  <script>
    $(document).ready(function(){
      // 1. 변수 선언
      let mnu = $('nav.gnb > ul > li > a'); // 메인 메뉴

      // 2. 메인메뉴 클릭시 서브메뉴 보이게/보일 때 클릭하면 숨기게
      mnu.click(function(){
        // $('.sub').hide(); // 보이는 서브 메뉴는 모두 숨기고 => toggle 오류 발생
        // $(this).next().toggle(); // 선택한 메인 메뉴의 다음 요소 sub가 보이거나 숨기게 한다.

        // 선택한 a요소의 다음 요소인 .sub를 나오거나 숨기게하고, 부모 요소의 형제 요소인 li 태그의 자손 .sub를 숨긴다.
        $(this).next().toggle().parent().siblings().find('.sub').hide();
      });

      // main을 클릭하면 .sub를 숨긴다.
      $('main').click(function(){
        $('.sub').hide();
      });
    });
  </script>
</body>
</html>