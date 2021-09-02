<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    include '../connect/connect.php';
    include '../connect/session.php';

    $surveyKind = $_POST['surveyKind'];

    switch($surveyKind) {
        case 'offline':
        case 'store':
        case 'website':
        case 'friends':
        case 'academy':
        case 'etc':
            break;
        default:
            echo "입력하지 않음";
            exit;
            break;
    }
    echo $surveyKind;
    $memberID = $_SESSION['memberID'];

    //설문조사 했는지 검사
    $sql = "SELECT surveyID FROM mySurvey WHERE memberID = {$memberID}";
    $result = $connect -> query($sql);

    if( $result ){
        $dataCount = $result -> num_rows;
        if( $dataCount == 0 ){
            $regTime = time();
            $sql = "INSERT INTO mySurvey (memberID, kind, regTime) VALUES ('$memberID', '$surveyKind', '$regTime')";
            $result = $connect -> query($sql);

            if( $result ){
                echo "설문조사 완료<br>";
                echo "<a href='surveyView.php'>설문조사 결과 보기</a>";
                exit;
            } else {
                echo "설문조사 실패";
                exit;
            }
        } else {
            echo "이미 참여 하였음";
            echo "<a href='surveyView.php'>설문조사 결과 보기</a>";
            exit;
        }
    } else {
        echo "저장 실패 관리자 문의";
        exit;
    }
?>
</body>
</html>