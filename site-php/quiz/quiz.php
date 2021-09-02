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
                <h2 class="screen_out">퀴즈 컨텐츠</h2>
                <article class="content-article">
                    <h3>퀴즈</h3>
                    <p>당신의 실력을 테스트 하세요</p>
                    <section class="section-quiz">
                        <h4 class="screen_out">메인 컨텐츠</h4>
                        <ul class="list2">
                            <li><a href="#">자바스트립트 기초 : 변수편</li>
                        </ul>
                        <div class="quizs">
                            <div id="sample1" class="sample">
                                <h2>01. 다음의 결과값을 선택하시오. <span class="dot"></span></h2>
                                <div class="code">
<pre class="line-numbers"><code class="language-js">{
    var x = 100; 
    var y = 200; 
    var z = "javascript"; 

    document.write(x);
    document.write(y);
    document.write(z);
}
</code></pre>
                                </div>
                            </div>
                        </div>
                    </section>
                    
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