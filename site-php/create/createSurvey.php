<?php
    include "../connect/connect.php";

    $sql = "CREATE TABLE mySurvey (";
	$sql .= "surveyID int(10) unsigned NOT NULL AUTO_INCREMENT,";
	$sql .= "memberID int(10) unsigned NOT NULL,";
	$sql .= "kind enum('offline','store','website','friends','academy','etc'),";
	$sql .= "regTime int(11) unsigned NOT NULL,";
	$sql .= "PRIMARY KEY (surveyID)";
	$sql .= ") CHARSET=utf8";

    $result = $connect -> query($sql);

    if( $result ){  
        echo "Create Survey Complete";
    } else {
        echo "Create Survey false";
    }
?>