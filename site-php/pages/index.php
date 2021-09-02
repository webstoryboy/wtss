<?php
    include '../connect/connect.php';
    include '../connect/session.php';
?>

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
                    <h3>웹스토리보이 강의</h3>
                    <p>웹디자이너, 웹퍼블리셔, 프론트앤드 개발자를 위한 포트폴리오 강의</p>
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
                        </ul>
                    </section>
                    <section class="section-couse">
                        <h4 class="screen_out">튜토리얼</h4>
                        <ul class="couse-list">
                            <li>
                                <img src="http://designbase.co.kr/wp-content/themes/designbase/assets/svg/icon-sketch.svg" alt="">
                                <span>HTML</span>
                            </li>
                            <li>
                                <img src="http://designbase.co.kr/wp-content/themes/designbase/assets/svg/icon-photoshop.svg" alt="">
                                <span>CSS</span>
                            </li>
                            <li>
                                <img src="http://designbase.co.kr/wp-content/themes/designbase/assets/svg/icon-sketch.svg" alt="">
                                <span>웹표준</span>
                            </li>
                            <li>
                                <img src="http://designbase.co.kr/wp-content/themes/designbase/assets/svg/icon-sketch.svg" alt="">
                                <span>반응형</span>
                            </li>
                            <li>
                                <img src="http://designbase.co.kr/wp-content/themes/designbase/assets/svg/icon-sketch.svg" alt="">
                                <span>패랠랙스</span>
                            </li>
                            <li>
                                <img src="http://designbase.co.kr/wp-content/themes/designbase/assets/svg/icon-sketch.svg" alt="">
                                <span>제이쿼리</span>
                            </li>
                            <li>
                                <img src="http://designbase.co.kr/wp-content/themes/designbase/assets/svg/icon-sketch.svg" alt="">
                                <span>자바스크립트</span>
                            </li>
                            <li>
                                <img src="http://designbase.co.kr/wp-content/themes/designbase/assets/svg/icon-sketch.svg" alt="">
                                <span>jquery</span>
                            </li>
                            <li>
                                <img src="http://designbase.co.kr/wp-content/themes/designbase/assets/svg/icon-sketch.svg" alt="">
                                <span>jquery</span>
                            </li>
                            <li>
                                <img src="http://designbase.co.kr/wp-content/themes/designbase/assets/svg/icon-sketch.svg" alt="">
                                <span>jquery</span>
                            </li>
                            <li>
                                <img src="http://designbase.co.kr/wp-content/themes/designbase/assets/svg/icon-sketch.svg" alt="">
                                <span>jquery</span>
                            </li>
                            <li>
                                <img src="http://designbase.co.kr/wp-content/themes/designbase/assets/svg/icon-sketch.svg" alt="">
                                <span>jquery</span>
                            </li>
                        </ul>
                    </section>
                    <section class="section-tutorial mt90">
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
                    <h3 class="screen_out">웹스토리보이 강의 설명</h3>
                    <section class="section-intro">
                        <h4 class="screen_out">강의 소개</h4>
                        <div class="youtube-intro">
                            <div>
                                <iframe src="https://www.youtube.com/embed/1vb2A9cTb1I" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            <div>
                                <h5>포트폴리오는 어떻게 만들어야 할까?</h5>
                                <p>포트폴리오 만드는 과정을 인터뷰 합니다. 힘들었던 점과 좋았던 점 등을 얘기하며, 
                                    포폴 과정의 노하우를 공유합니다.
                                </p>
                                <div class="interview">
                                    <div class="icon">
                                        <a href="https://www.youtube.com/watch?v=gGlVkOiYRus&list=PL4UVBBIc6giLLag20uIwHlHsG83q3PYa5" target="_blank">
                                            <img src="../assets/img/stu01.png" alt="이정아">
                                            <span>#이정아</span>
                                        </a>
                                    </div>
                                    <div class="icon">
                                        <a href="https://www.youtube.com/watch?v=gGlVkOiYRus&list=PL4UVBBIc6giLLag20uIwHlHsG83q3PYa5" target="_blank">
                                            <img src="../assets/img/stu02.jpg" alt="서지현">
                                            <span>#서지현</span>
                                        </a>
                                    </div> 
                                    <div class="icon">
                                        <a href="https://www.youtube.com/watch?v=NWHIwQlptgM&list=PL4UVBBIc6giLLag20uIwHlHsG83q3PYa5&index=3" target="_blank">
                                            <img src="http://designbase.co.kr/wp-content/uploads/2020/09/illust-profile-02.webp" alt="이소연">
                                            <span>#이소연</span>
                                        </a>
                                    </div> 
                                    <div class="icon">
                                        <a href="https://www.youtube.com/watch?v=NWHIwQlptgM&list=PL4UVBBIc6giLLag20uIwHlHsG83q3PYa5&index=3" target="_blank">
                                            <img src="../assets/img/stu03.jpg" alt="이다빈">
                                            <span>#이다빈</span>
                                        </a>
                                    </div> 
                                    <div class="icon">
                                        <a href="https://www.youtube.com/watch?v=NWHIwQlptgM&list=PL4UVBBIc6giLLag20uIwHlHsG83q3PYa5&index=3" target="_blank">
                                            <img src="../assets/img/stu04.jpg" alt="김민정">
                                            <span>#김민정</span>
                                        </a>
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </section>
                </article>
                <article class="content-article">
                    <h3 class="screen_out">웹스토리보이 포트폴리오</h3>
                    <section class="section-port">
                        <h4>포트폴리오</h4>
                        <p>포트폴리오를 소개합니다.</p>
                        <ul class="port-list">
                            <li>
                                <a href="#">
                                    <img src="https://t1.kakaocdn.net/kakaocorp/kakaocorp/admin/service/78d09478017900001.jpeg?type=thumb&opt=C630x472" alt="dd">
                                </a>
                                <div class="item">
                                    <strong>웹 퍼블리셔 취업!</strong>
                                    <span class="keyword">
                                        <span>#이정아</span>
                                    </span>
                                </div>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="https://t1.kakaocdn.net/kakaocorp/kakaocorp/admin/service/798c7299017900001.jpg?type=thumb&opt=C630x472" alt="dd">
                                </a>
                                <div class="item">
                                    <strong>웹 퍼블리셔 취업! 포트폴리오</strong>
                                    <span class="keyword">
                                        <span>#서지현</span>
                                    </span>
                                </div>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="https://t1.kakaocdn.net/kakaocorp/kakaocorp/admin/service/79977762017900001.jpg?type=thumb&opt=C630x472" alt="dd">
                                </a>
                                <div class="item">
                                    <strong>프론트앤드 개발자 취업! 포트폴리오</strong>
                                    <span class="keyword">
                                        <span>#초보</span><span>#mysql</span><span>#사이트</span>
                                    </span>
                                </div>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="https://t1.kakaocdn.net/kakaocorp/kakaocorp/admin/socialimpact/c3712f9a017800001.jpg?type=thumb&opt=C630x472" alt="dd">
                                </a>
                                <div class="item">
                                    <strong>포트폴리오를 만드는 가장 쉬운 방법입니다.</strong>
                                    <span class="keyword">
                                        <span>#이정아</span>
                                    </span>
                                </div>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="https://t1.kakaocdn.net/kakaocorp/kakaocorp/admin/service/7a444447017900001.jpg?type=thumb&opt=C630x472" alt="dd">
                                </a>
                                <div class="item">
                                    <strong>프론트앤드 개발자 합격!!</strong>
                                    <span class="keyword">
                                        <span>#초보</span><span>#mysql</span><span>#사이트</span>
                                    </span>
                                </div>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="https://t1.kakaocdn.net/kakaocorp/kakaocorp/admin/socialimpact/c368a158017800001.jpg?type=thumb&opt=C630x472" alt="dd">
                                </a>
                                <div class="item">
                                    <strong>포트폴리오를 만드는 가장 쉬운 방법입니다.</strong>
                                    <span class="keyword">
                                        <span>#초보</span><span>#mysql</span><span>#사이트</span>
                                    </span>
                                </div>
                            </li>
                        </ul>
                        <a href="#" class="more">포트폴리오 더보기</a>
                    </section>
                </article>
                <article class="flow-article">
                    <h3 class="screen_out">리뷰 후기</h3>
                    <section class="section-review">
                        <h4>후기</h4>
                        <p>스터디, 유튜브, 국비지원 후기입니다.</p>
                        <div class="review-title">
                            <ul>
                                <li class="active"><a href="#">유튜브</a></li>
                                <li><a href="#">스터디</a></li>
                                <li><a href="#">국비</a></li>
                            </ul>
                        </div>
                        <div class="review-list">
                            <div>
                                <p>구세주십니다 선생님 ㅠㅠㅠㅠㅠㅠ!!!!!!!!!</p>
                                <div class="icon">
                                    <img src="../assets/img/stu01.png" alt="이정아">
                                    <span>#이정아</span>
                                </div>
                            </div>
                            <div>
                                <p>선생님 항상 좋은 강의 감사합니닷!
                                    항상 잘 보고 있답니당👍</p>
                                <div class="icon">
                                    <img src="../assets/img/stu01.png" alt="이정아">
                                    <span>#ksys**</span>
                                </div>
                            </div>
                            <div>
                                <p>와,,,, 선생님 당신은 천재이신가요,,,, 과제 주신 것 혼자 풀어보려고 했는데 정말 막막하더라구요ㅠㅠ 따라할 때는 막연하게 할 수 있을 것 같았는데,,,, 이번 영상에서 감탄하고 갑니다 열심히 할게요!</p>
                                <div class="icon">
                                    <img src="../assets/img/stu01.png" alt="이정아">
                                    <span>#강다*</span>
                                </div>
                            </div>
                            <div>
                                <p>랜선 스승님 늘 좋은강의 감사드립니다 ㅎㅎ 기능사셤도 쌤꺼 듣고 한방에 통과했습당 ㅎㅎㅎㅎ 스크립트 공부도 열심히 해볼게욧!</p>
                                <div class="icon">
                                    <img src="../assets/img/stu01.png" alt="이정아">
                                    <span>#박선*</span>
                                </div>
                            </div>
                            <div>
                                <p>완강했습니다 !!!
                                    정말 이런 귀한 영상 올려주셔서 감사합니다 :)
                                    학원에서 6개월동안 배우고 선생님 강의도 들으니까 정리가 되는 느낌입니다
                                    웹표준형 사이트에 대해 잘 배웠습니다~
                                    감사합니다 :)</p>
                                <div class="icon">
                                    <img src="../assets/img/stu01.png" alt="이정아">
                                    <span>#ssongga**</span>
                                </div>
                            </div>
                            <div>
                                <p>학원에서 기초 다 배우고 어떤식으로 공부해야할지 몰랐는데 알게되서 너무 좋아요!
                                    웹표준부터 지금까지 쭉 따라서 하고있습니다. 항상 감사합니다!</p>
                                <div class="icon">
                                    <img src="../assets/img/stu01.png" alt="이정아">
                                    <span>#HE*</span>
                                </div>
                            </div>
                            <div>
                                <p>감사합니다~! 강의 영상 보고 합격했어요 ^^</p>
                                <div class="icon">
                                    <img src="../assets/img/stu01.png" alt="이정아">
                                    <span>#S*</span>
                                </div>
                            </div>
                            <div>
                                <p>강의 1강부터, 쭉 정독하면서 따라하고, 스크립트만 외워서 갔는데, 합격했어용, 웹디자인기능사 준비하시는 분들 다른거 다필요없고, 이거들으세용, // 지금 다른공부 하고 있어서, 웹표준도 10강까지 듣다 말았는뎅,  실무에서 엄청 도움됨, 웹스토리보이님거 저는 강의 다 정독하려고용, 모두 모두 화이팅하세용.</p>
                                <div class="icon">
                                    <img src="../assets/img/stu01.png" alt="이정아">
                                    <span>#강예*</span>
                                </div>
                            </div>
                        </div>
                    </section>
                </article>

                <article class="content-article">
                    <h3 class="screen_out">레퍼런스</h3>
                    <section class="section-refer">
                        <h4>참고 사이트</h4>
                        <p>포트폴리오에 필요한 사이트입니다.</p>
                        <div class="refer-list">
                            <div>
                                <strong>레퍼런스 관련 사이트</strong>
                                <ul>
                                    <li>
                                        <a href="#">reference <span class="screen_out">사이트 바로가기</span></a>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 9 9" class="link_target">
                                            <g fill="none" fill-rule="evenodd">
                                                <path stroke="black" d="M1.795 1.074L7.942 1.074 7.942 7.221M7.942 1.074L1.378 7.638" />
                                            </g>
                                        </svg>
                                    </li>
                                    <li>
                                        <a href="#">tutorial <span class="screen_out">사이트 바로가기</span></a>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 9 9" class="link_target">
                                            <g fill="none" fill-rule="evenodd">
                                                <path stroke="black" d="M1.795 1.074L7.942 1.074 7.942 7.221M7.942 1.074L1.378 7.638" />
                                            </g>
                                        </svg>
                                    </li>
                                    <li>
                                        <a href="#">refer <span class="screen_out">사이트 바로가기</span></a>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 9 9" class="link_target">
                                            <g fill="none" fill-rule="evenodd">
                                                <path stroke="black" d="M1.795 1.074L7.942 1.074 7.942 7.221M7.942 1.074L1.378 7.638" />
                                            </g>
                                        </svg>
                                    </li>
                                    <li>
                                        <a href="#">HTML <span class="screen_out">사이트 바로가기</span></a>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 9 9" class="link_target">
                                            <g fill="none" fill-rule="evenodd">
                                                <path stroke="black" d="M1.795 1.074L7.942 1.074 7.942 7.221M7.942 1.074L1.378 7.638" />
                                            </g>
                                        </svg>
                                    </li>
                                    <li>
                                        <a href="#">CSS <span class="screen_out">사이트 바로가기</span></a>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 9 9" class="link_target">
                                            <g fill="none" fill-rule="evenodd">
                                                <path stroke="black" d="M1.795 1.074L7.942 1.074 7.942 7.221M7.942 1.074L1.378 7.638" />
                                            </g>
                                        </svg>
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <strong>레퍼런스 관련 사이트</strong>
                                <ul>
                                    <li>
                                        <a href="#">reference <span class="screen_out">사이트 바로가기</span></a>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 9 9" class="link_target">
                                            <g fill="none" fill-rule="evenodd">
                                                <path stroke="black" d="M1.795 1.074L7.942 1.074 7.942 7.221M7.942 1.074L1.378 7.638" />
                                            </g>
                                        </svg>
                                    </li>
                                    <li>
                                        <a href="#">tutorial <span class="screen_out">사이트 바로가기</span></a>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 9 9" class="link_target">
                                            <g fill="none" fill-rule="evenodd">
                                                <path stroke="black" d="M1.795 1.074L7.942 1.074 7.942 7.221M7.942 1.074L1.378 7.638" />
                                            </g>
                                        </svg>
                                    </li>
                                    <li>
                                        <a href="#">refer <span class="screen_out">사이트 바로가기</span></a>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 9 9" class="link_target">
                                            <g fill="none" fill-rule="evenodd">
                                                <path stroke="black" d="M1.795 1.074L7.942 1.074 7.942 7.221M7.942 1.074L1.378 7.638" />
                                            </g>
                                        </svg>
                                    </li>
                                    <li>
                                        <a href="#">HTML <span class="screen_out">사이트 바로가기</span></a>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 9 9" class="link_target">
                                            <g fill="none" fill-rule="evenodd">
                                                <path stroke="black" d="M1.795 1.074L7.942 1.074 7.942 7.221M7.942 1.074L1.378 7.638" />
                                            </g>
                                        </svg>
                                    </li>
                                    <li>
                                        <a href="#">CSS <span class="screen_out">사이트 바로가기</span></a>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 9 9" class="link_target">
                                            <g fill="none" fill-rule="evenodd">
                                                <path stroke="black" d="M1.795 1.074L7.942 1.074 7.942 7.221M7.942 1.074L1.378 7.638" />
                                            </g>
                                        </svg>
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <strong>레퍼런스 관련 사이트</strong>
                                <ul>
                                    <li>
                                        <a href="#">reference <span class="screen_out">사이트 바로가기</span></a>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 9 9" class="link_target">
                                            <g fill="none" fill-rule="evenodd">
                                                <path stroke="black" d="M1.795 1.074L7.942 1.074 7.942 7.221M7.942 1.074L1.378 7.638" />
                                            </g>
                                        </svg>
                                    </li>
                                    <li>
                                        <a href="#">tutorial <span class="screen_out">사이트 바로가기</span></a>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 9 9" class="link_target">
                                            <g fill="none" fill-rule="evenodd">
                                                <path stroke="black" d="M1.795 1.074L7.942 1.074 7.942 7.221M7.942 1.074L1.378 7.638" />
                                            </g>
                                        </svg>
                                    </li>
                                    <li>
                                        <a href="#">refer <span class="screen_out">사이트 바로가기</span></a>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 9 9" class="link_target">
                                            <g fill="none" fill-rule="evenodd">
                                                <path stroke="black" d="M1.795 1.074L7.942 1.074 7.942 7.221M7.942 1.074L1.378 7.638" />
                                            </g>
                                        </svg>
                                    </li>
                                    <li>
                                        <a href="#">HTML <span class="screen_out">사이트 바로가기</span></a>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 9 9" class="link_target">
                                            <g fill="none" fill-rule="evenodd">
                                                <path stroke="black" d="M1.795 1.074L7.942 1.074 7.942 7.221M7.942 1.074L1.378 7.638" />
                                            </g>
                                        </svg>
                                    </li>
                                    <li>
                                        <a href="#">CSS <span class="screen_out">사이트 바로가기</span></a>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 9 9" class="link_target">
                                            <g fill="none" fill-rule="evenodd">
                                                <path stroke="black" d="M1.795 1.074L7.942 1.074 7.942 7.221M7.942 1.074L1.378 7.638" />
                                            </g>
                                        </svg>
                                    </li>
                                </ul>
                            </div>
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