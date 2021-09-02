<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

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
                    <h2>안내</h2>
                    <?php
                        include "../connect/connect.php";

                        //메세지 출력
                        function msg($alert){
                            echo "<p class='sub'>{$alert}</p>";
                        }
 
                        $youEmail = $_POST['youEmail'];
                        $youPass = $_POST['youPass'];
                        $youPassC = $_POST['youPassC'];
                        $youName = $_POST['youName'];
                        $youBirth = $_POST['youBirth'];
                        $youNumber = $_POST['youNumber'];
                        $regTime = time();


                        // 데이터 입력
                        // $sql = "INSERT INTO myMember(youEmail, youName, youPass, youBirth, youNumber, regTime) 
                        //         VALUES('$youEmail', '$youName', '$youPass', '$youBirth', '$youNumber', '$regTime')";

                        // $result = $connect -> query($sql);

                        // echo "<pre>";
                        // var_dump($_POST);
                        // echo "</pre>";
                        
                        //echo $youEmail, $youPass, $youPassC, $youName, $youBirth, $youNumber, $regTime;

                        
                        
                        //유효성 검사
                        //이메일 검사 : 정규식 표현
                        // $check_email = preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i", $youEmail);

                        // if( $check_email == false ){
                        //     echo "이메일이 잘못되었습니다. <br> 올바른 이메일을 적어주세요!";
                        // }

                        
                        //이메일 검사 : 내장 함수
                        //var_dump(filter_var('sample@example.com', FILTER_VALIDATE_EMAIL));

                        $check_email = filter_var($youEmail, FILTER_VALIDATE_EMAIL);

                        if( $check_email == false ){
                            msg("이메일이 잘못되었습니다. <br> 올바른 이메일을 적어주세요!");
                            exit;
                        }

                        //비밀번호 
                        if( $youPass !== $youPassC ){
                            msg("비밀번호가 일치하지 않습니다. <br> 다시 한번 확인해주세요!");
                            exit;
                        }

                        //비밀번호 암호화
                        //$youPass = sha1('web'.$youPass);

                        //이름 검사
                        $check_name = preg_match("/^[가-힣]{1,}$/", $youName);

                        if( $check_name == false ){
                            msg("이름이 정확하지 않습니다. <br> 한글로 적어주세요!");
                            exit;
                        }

                        //생년월일 유효성 검사
                        $check_birth = preg_match("/^(19[0-9][0-9]|20\d{2})-(0[0-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/", $youBirth);

                        if( $check_birth == false ){
                            msg("생년월일이 잘못되었습니다. <br> 올바른 생년월일(YYYY-MM-DD) 적어주세요!");
                            exit;
                        }

                        //휴대폰 번호 유효성 검사
                        $check_number = preg_match("/^(010|011|016|017|018|019)-[0-9]{3,4}-[0-9]{4}/", $youNumber);

                        if( $check_number == false ){
                            msg("번호가 잘못되었습니다. <br> 올바른 번호(000-0000-0000)를 적어주세요!");
                            exit;
                        }

                        //이메일 중복 검사
                        $isEmailCheck = false;

                        $sql = "SELECT youEmail FROM myMember WHERE youEmail = '$youEmail'";
                        $result = $connect -> query($sql);

                        if( $result ) {
                            $count =  $result -> num_rows;

                            //echo $count;

                            if( $count == 0 ){
                                $isEmailCheck = true;
                            } else {
                                msg("회원가입을 했었네요!!. 로그인을 해주세요!");
                                exit;
                            }
                        } else {
                            msg("에러 발생01: 관리자에게 문의하세요");
                            exit;
                        }

                        //휴대폰 중복 검사
                        $isNumberCheck = false;

                        $sql = "SELECT youNumber FROM myMember WHERE youNumber = '$youNumber'";
                        $result = $connect -> query($sql);

                        if( $result ) {
                            $count =  $result -> num_rows;

                            //echo $count;

                            if( $count == 0 ){
                                $isNumberCheck = true;
                            } else {
                                msg("회원가입을 했었네요!!. 로그인을 해주세요!");
                                exit;
                            }
                        } else {
                            msg("에러 발생02: 관리자에게 문의하세요");
                            exit;
                        }


                        //회원 가입
                        if( $isEmailCheck == true && $isNumberCheck == true ){
                            $sql = "INSERT INTO myMember(youEmail, youName, youPass, youBirth, youNumber, regTime) 
                                VALUES('$youEmail', '$youName', '$youPass', '$youBirth', '$youNumber', '$regTime')";

                            $result = $connect -> query($sql);

                            if( $result ){
                                msg('회원가입을 축하합니다. 로그인해주세요!') ;
                                $_SESSION['memberID'] = $connect -> insert_id;
                                $_SESSION['youName'] = $youName;
                            } else {
                                msg("에러 발생: error02");
                            }
                        } else {
                            msg("다시 한번 확인하고 회원가입해주세요!");
                        }

                        // if( $result ){
                        //     echo "good";
                        // } else {
                        //     echo "bad";
                        // }
                    ?>
                </div>

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