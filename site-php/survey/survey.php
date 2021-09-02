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
                        <form name="join" action="surveySave.php" method="post">
                            <fieldset>
                                <legend>설문조사</legend>
                                <div class="login-box">
                                    <input type="radio" name="surveyKind" value="offline">오프라인 서점<br>
                                    <input type="radio" name="surveyKind" value="store">온라인 서점<br>
                                    <input type="radio" name="surveyKind" value="website">웹사이트 서점<br>
                                    <input type="radio" name="surveyKind" value="friends">지인을 통해서 서점<br>
                                    <input type="radio" name="surveyKind" value="academy">교육기관 서점<br>
                                    <input type="radio" name="surveyKind" value="etc">교육기관 서점<br>
                                </div>
                            </fieldset>
                            <button type="submit" class="login_btn mt10">제출</button>
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