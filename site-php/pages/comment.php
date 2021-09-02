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
                    <section class="section-tutorial">
                        <h4>인기강의</h4>
                        <p>가장 인기 있는 강의입니다.</p>
                        <ul class="tutorial-list">
                            <li>
                                <a href="#">
                                    <img src="https://t1.kakaocdn.net/kakaocorp/kakaocorp/admin/tech/c3602337017800001.jpg?type=thumb&opt=C630x472" alt="dd">
                                </a>
                                <div class="item">
                                    <strong>포트폴리오를 만드는 가장 쉬운 방법입니다.</strong>
                                    <span class="keyword">
                                        <span>#초보</span><span>#mysql</span><span>#사이트</span>
                                    </span>
                                </div>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="https://t1.kakaocdn.net/kakaocorp/kakaocorp/admin/history/41f0c3c0017a00001.png?type=thumb&opt=C630x472" alt="dd">
                                </a>
                                <div class="item">
                                    <strong>변화를 만드는 AI, 카카오 i</strong>
                                    <span class="keyword">
                                        <span>#초보</span><span>#mysql</span><span>#사이트</span>
                                    </span>
                                </div>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="https://t1.kakaocdn.net/kakaocorp/kakaocorp/admin/service/78d09478017900001.jpeg?type=thumb&opt=C630x472" alt="dd">
                                </a>
                                <div class="item">
                                    <strong>학원을 선택할 때 가장 중요한 것은?</strong>
                                    <span class="keyword">
                                        <span>#학원</span><span>#국비지원</span><span>#사이트</span>
                                    </span>
                                </div>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="https://t1.kakaocdn.net/kakaocorp/kakaocorp/admin/history/300b85ed017900001.png?type=thumb&opt=C630x472" alt="dd">
                                </a>
                                <div class="item">
                                    <strong>내가 퍼블리셔를 하는 이유는? 프론트앤드 개발자를 하는 이유는?</strong>
                                    <span class="keyword">
                                        <span>#퍼블리셔</span><span>#mysql</span><span>#사이트</span>
                                    </span>
                                </div>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="https://t1.kakaocdn.net/kakaocorp/kakaocorp/admin/socialimpact/c368a158017800001.jpg?type=thumb&opt=C630x472" alt="dd">
                                </a>
                                <div class="item">
                                    <strong>그냥 내가 좋아하니까 하는거예요~ 이유 없어요~ 그게 다예요</strong>
                                    <span class="keyword">
                                        <span>#초보</span><span>#mysql</span><span>#사이트</span>
                                    </span>
                                </div>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="https://t1.kakaocdn.net/kakaocorp/kakaocorp/admin/service/79977762017900001.jpg?type=thumb&opt=C630x472" alt="dd">
                                </a>
                                <div class="item">
                                    <strong>메일 보내기 작업하는 법 같이 배워요~</strong>
                                    <span class="keyword">
                                        <span>#PHP</span><span>#mysql</span><span>#사이트</span>
                                    </span>
                                </div>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="https://t1.kakaocdn.net/kakaocorp/kakaocorp/admin/service/798c7299017900001.jpg?type=thumb&opt=C630x472" alt="dd">
                                </a>
                                <div class="item">
                                    <strong>이 기능 엄청 편한데.. 사용할 줄 아나요? 같이 사용해보세요!</strong>
                                    <span class="keyword">
                                        <span>#초보</span><span>#mysql</span><span>#사이트</span>
                                    </span>
                                </div>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="https://t1.kakaocdn.net/kakaocorp/kakaocorp/admin/tech/c3649085017800001.jpg?type=thumb&opt=C630x472" alt="dd">
                                </a>
                                <div class="item">
                                    <strong>포트폴리오 인터뷰 영상~ 같이 편하게 이야기 해봐요!</strong>
                                    <span class="keyword">
                                        <span>#초보</span><span>#mysql</span><span>#사이트</span>
                                    </span>
                                </div>
                            </li>
                        </ul>
                    </section> 
                </article>  
                <article class="flow-article">
                    <h3 class="screen_out">나도 한마디 하기</h3>
                    <section id="comment" class="section-comment">
                        <h4>나도 한마디!</h4>
                        <p>50자 이내로 자유롭게 글을 쓸 수 있습니다.</p>
                        <div class="comment-form">
                            <form name="comment" method="post" action="../comment/commentSave.php">
                                <fieldset>
                                    <legend class="screen_out">댓글 영역</legend>
                                    <div class="comment-wrap">
                                        <div>
                                            <label for="youName" class="screen_out">이름</label>
                                            <input type="text" name="youName" id="youName" placeholder="이름" autocomplete="off" required>
                                        </div>
                                        <div class="text">
                                            <label for="youText" class="screen_out">댓글 쓰기</label>
                                            <input type="text" name="youText" id="youText" placeholder="한마디 적어주세요!" autocomplete="off" maxlength="50" required>
                                        </div>
                                        <button type="submit" value="댓글 달기">go</button>
                                    </div>
                                </fieldset>
                            </form>
                        </div>

                        <div class="comment-list">

                            <?php
                                include "../connect/connect.php";

                                //$sql = "SELECT * FROM myComment";
                                //$sql = "SELECT * FROM myComment ORDER by ID DESC";
                                $sql = "SELECT * FROM myComment ORDER by ID DESC LIMIT 10";

                                $result = mysqli_query($connect, $sql);
    
                                while($date = mysqli_fetch_array($result)){
                            ?>
                                <div>
                                    <p><?=$date['youText']?></p>
                                    <div class="icon">
                                        <img src="../assets/img/stu01.png" alt="이정아">
                                        <span><?=$date['youName']?></span>
                                        <span><?=date('Y-m-d H:i', $date['regTime'])?></span>
                                    </div>
                                </div>
                            <?    
                                }
                            ?>

                        </div>
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