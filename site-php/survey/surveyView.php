<?php
    include '../connect/connect.php';
    include '../connect/session.php';

    $sql = "SELECT kind FROM mySurvey";
    $result = $connect -> query($sql);

    if( $result ){
        $surveyDataCount = $result -> num_rows;

        $offline = 0;
        $store = 0;
        $website = 0;
        $friends = 0;
        $academy = 0;
        $etc = 0;

        if($surveyDataCount > 0){
            for($i=0; $i<$surveyDataCount; $i++){
                $surveyData = $result -> fetch_array(MYSQLI_ASSOC);

                switch($surveyData['kind']){
                    case 'offline':
                        $offline++;
                        break;
                    case 'store':
                        $store++;
                        break;
                    case 'website':
                        $website++;
                        break;
                    case 'friends':
                        $friends++;
                        break;
                    case 'academy':
                        $academy++;
                        break;
                    case 'etc':
                        $etc++;
                        break;
                }
            }
        } else {
            echo "데이터가 없네요";
            exit;
        }
    } else {
        echo "에러발생";
        exit;
    }
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
            <section id="mainContent" class="gray">
                <h2 class="screen_out">회원가입 컨텐츠</h2>
                <article class="content-article">
                    <h2>설문조사 결과</h2>
                    총 참여 인원 - <?=$$surveyDataCount?><br>
                    오프라인 서점 - <?=$offline?><br>
                    오프라인 서점 - <?=$store?><br>
                    오프라인 서점 - <?=$website?><br>
                    오프라인 서점 - <?=$academy?><br>
                    오프라인 서점 - <?=$etc?><br>


                    <a href="surveyResult.php">JSON 파일보기</a>
                    <a href="surveyChart.php">차트로 보기보기</a>
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