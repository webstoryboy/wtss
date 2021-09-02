<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>

    <link rel="stylesheet" href="../assets/css/fonts.css">
    <link rel="stylesheet" href="../assets/css/var.css">
    <link rel="stylesheet" href="../assets/css/reset.css">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <div id="wrap">

        <!-- header -->
        <header id="header">
            <?php
                include '../include/header.php';
            ?>
        </header>
        <!-- //header -->

        <main>
            <section id="mainContent" class="gray">
                <h2 class="screen_out">회원가입 컨텐츠</h2>
                <article class="content-article">
                    <div class="login-form">
                        <h2>로그인</h2>
                        <form name="login" action="loginSave.php" method="POST">
                            <fieldset>
                                <legend class="screen_out">로그인 입력폼</legend>
                                <div class="login-box">
                                    <div>
                                        <label for="youEmail">이메일</label>
                                        <input type="email" name="youEmail" id="youEmail" class="input_write" placeholder="sample@naver.com" autocomplete="off" autofocus>
                                    </div>
                                    <div>
                                        <label for="youPass">비밀번호</label>
                                        <input type="password" name="youPass" id="youPass" class="input_write" placeholder="비밀번호를 입력해주세요!" autocomplete="off">
                                    </div> 
                                    <div class="info">
                                        <ul class="list">
                                            <li>새로오신 분들은 회원가입을 먼저 해주세요!<a href="join.php" class="link_info">회원 가입</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </fieldset>
                            <button id="btn_submit" type="submit" class="login_btn">로그인</button>
                        </form>
                    </div>
                </article>
            </section>
        </main>

        <!-- footer -->
        <footer id="footer" class="none">
            <?php
                include '../include/footer.php';
            ?>
        </footer>
        <!-- //footer -->

    </div>
    
</body>
</html>