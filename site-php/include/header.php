<h1><a href="../pages/main.php">PHP</a></h1>
<nav>
    <h2 class="screen_out">메인 메뉴</h2>
    <ul>
        <li><a href="../pages/comment.php" ping="../connect/ping.php?linkNum=1">나도 한마디</a></li>
        <li><a href="../survey/survey.php">설문조사</a></li>
        <li><a href="../blog/blog.php">블로그</a></li>
        <li><a href="../board/board.php">게시판</a></li>
        <li><a href="../quiz/quiz.php">퀴즈</a></li>
        <li><a href="../contact/contact.php">연락하기</a></li>
    </ul>
</nav>
<div class="member">
    <strong class="screen_out">회원 정보 영역</strong>
    <ul>
    <?php if( isset($_SESSION['memberID']) ){ ?>
        <li><?=$_SESSION['youName']?>님 환영합니다.</li>
        <li><a href="../login/logout.php">로그아웃</a></li>
    <?php } else { ?>    
        <li><a href="../login/login.php">로그인</a></li>
        <li><a href="../login/join.php">회원가입</a></li>       
    <?php } ?> 
    </ul>
</div>
