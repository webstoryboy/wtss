<?php
    $host = "localhost";
    $user = "richclub9";
    $pw = "Forever0!";
    $db = "richclub9";
    $connect = new mysqli($host, $user, $pw, $db);
    $connect -> set_charset("utf8");

    if(mysqli_connect_errno()){
        echo "database connect false";
    } else {
        //echo "database connect good";
    }
?>