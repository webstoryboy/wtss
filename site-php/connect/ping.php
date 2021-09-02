<?php
    include '../connect/connect.php';

    $linkNum = (int) $_GET['linkNum'];

    if($linkNum == 0){
        exit;
    }

    $sql = "INSERT INTO myPing(linkNum, regTime) VALUES('1', NOW())";
    $result = $connect -> query($sql);

    if( $result ){
        echo "good";
    } else {
        echo "bad";
    }
?>