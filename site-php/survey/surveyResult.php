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
            for($i = 0; $i < $surveyDataCount; $i++){
                $surveyData = $result->fetch_array(MYSQLI_ASSOC);

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

            echo json_encode(
                array(
                    'result' => 'ok',
                    'offline' => $offline,
                    'store' => $store,
                    'website' => $website,
                    'friends' => $friends,
                    'academy' => $academy,
                    'etc' => $etc,
                )
            );
        } else {
            echo json_encode(
                array(
                    'result' => 'noData'
                )
            );
        }
    } else {
        echo json_encode(
            array(
                'result' => 'error'
            )
        );
    }
?>