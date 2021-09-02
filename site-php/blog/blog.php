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
            <section id="mainContent">
                <h2 class="screen_out">메인 컨텐츠</h2>
                <article class="content-article">
                    <h3>블로그</h3>
                    <p>가장 빠른 새소식 업데이트</p>
                    <section class="section-card">
                        <h4 class="screen_out">메인 컨텐츠</h4>
                        <ul class="card-list">
                            <li>
                                <a href="#">
                                    <img src="https://t1.kakaocdn.net/kakaocorp/kakaocorp/admin/tech/5a8472c1017a00001.png?type=thumb&opt=C630x472" alt="dd">
                                </a>
                                <div class="item">
                                    <strong>웹 표준 사이트 강의</strong>
                                    <span>전 세계 연간 오픈소스 컴포넌트 다운로드 1.5조 건.<br>주요 IT기업의 95%가 오픈소스를 사용하고 있습니다.</span>
                                    <span class="keyword">
                                        <span>#중급</span><span>#무료</span><span>#사이트</span>
                                    </span>
                                </div>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="https://t1.kakaocdn.net/kakaocorp/kakaocorp/admin/tech/c35f7e5d017800001.jpg?type=thumb&opt=C630x472" alt="dd">
                                </a>
                                <div class="item">
                                    <strong>반응형 사이트 강의</strong>
                                    <span>전 세계 연간 오픈소스 컴포넌트 다운로드 1.5조 건.<br>주요 IT기업의 95%가 오픈소스를 사용하고 있습니다.</span>
                                    <span class="keyword">
                                        <span>#php</span><span>#mysql</span><span>#사이트</span>
                                    </span>
                                </div>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="https://t1.kakaocdn.net/kakaocorp/kakaocorp/admin/tech/c3602337017800001.jpg?type=thumb&opt=C630x472" alt="dd">
                                </a>
                                <div class="item">
                                    <strong>패랠랙스 사이트 강의</strong>
                                    <span>전 세계 연간 오픈소스 컴포넌트 다운로드 1.5조 건.<br>주요 IT기업의 95%가 오픈소스를 사용하고 있습니다.</span>
                                    <span class="keyword">
                                        <span>#초보</span><span>#mysql</span><span>#사이트</span>
                                    </span>
                                </div>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="https://t1.kakaocdn.net/kakaocorp/kakaocorp/admin/tech/5a8472c1017a00001.png?type=thumb&opt=C630x472" alt="dd">
                                </a>
                                <div class="item">
                                    <strong>웹 표준 사이트 강의</strong>
                                    <span>전 세계 연간 오픈소스 컴포넌트 다운로드 1.5조 건.<br>주요 IT기업의 95%가 오픈소스를 사용하고 있습니다.</span>
                                    <span class="keyword">
                                        <span>#중급</span><span>#무료</span><span>#사이트</span>
                                    </span>
                                </div>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="https://t1.kakaocdn.net/kakaocorp/kakaocorp/admin/tech/c35f7e5d017800001.jpg?type=thumb&opt=C630x472" alt="dd">
                                </a>
                                <div class="item">
                                    <strong>반응형 사이트 강의</strong>
                                    <span>전 세계 연간 오픈소스 컴포넌트 다운로드 1.5조 건.<br>주요 IT기업의 95%가 오픈소스를 사용하고 있습니다.</span>
                                    <span class="keyword">
                                        <span>#php</span><span>#mysql</span><span>#사이트</span>
                                    </span>
                                </div>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="https://t1.kakaocdn.net/kakaocorp/kakaocorp/admin/tech/c3602337017800001.jpg?type=thumb&opt=C630x472" alt="dd">
                                </a>
                                <div class="item">
                                    <strong>패랠랙스 사이트 강의</strong>
                                    <span>전 세계 연간 오픈소스 컴포넌트 다운로드 1.5조 건.<br>주요 IT기업의 95%가 오픈소스를 사용하고 있습니다.</span>
                                    <span class="keyword">
                                        <span>#초보</span><span>#mysql</span><span>#사이트</span>
                                    </span>
                                </div>
                            </li>
                        </ul>
                    </section>
                    
                </article>
            </section>
        </main>
        <!-- footer -->
        <footer id="footer">
            <?php
                include '../include/footer.php';
            ?>
        </footer>
        <!-- //footer -->
    </div>
    
</body>
</html>