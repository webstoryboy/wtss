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
                        include '../connect/connect.php';
                        include '../connect/session.php';

                        $youEmail = $_POST['youEmail'];
                        $youPass = $_POST['youPass'];

                        //echo $youEmail, $youPass;

                        //메세지 출력
                        function msg($alert){
                            echo "<p class='sub'>{$alert}</p>";
                        }

                        //이메일 검사
                        if( !filter_var($youEmail, FILTER_VALIDATE_EMAIL) ){
                            msg("이메일이 잘못되었습니다. <br> 올바른 이메일을 적어주세요!");
                            exit;
                        }

                        //비밀번호 검사 
                        if($youPass == null || $youPass == ''){
                            msg('비밀번호를 입력해 주세요.');
                            exit;
                        }

                        //데이터 조회
                        $sql = "SELECT memberID, youEmail, youName, youPass FROM myMember WHERE youEmail = '$youEmail' AND youPass = '$youPass'";
                        $result = $connect -> query($sql);

                        if( $result ){
                            if( $result -> num_rows == 0 ){
                                msg('로그인 정보가 없습니다. 회원가입 해주세요!!');
                            } else {
                                $memberInfo = $result -> fetch_array(MYSQLI_ASSOC);
                                // $memberCount = $result -> num_rows;

                                // echo $memberCount ."<br>";
                                // echo "<br>";
                                // var_dump($memberInfo);
                                // echo "<br>";

                                $_SESSION['memberID'] = $memberInfo['memberID'];
                                $_SESSION['youEmail'] = $memberInfo['youEmail'];
                                $_SESSION['youName'] = $memberInfo['youName'];
                                Header("Location: ../pages/index.php");

                                // echo "<br>";
                                // var_dump($_SESSION);
                                // echo "<br>";
                            }
                        } else {
                            msg('에러발생 : 관리자에게 문의하세요!!');
                        }
                    ?>
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

