<?php
    include "../connect/connect.php";

    $sql = "CREATE TABLE myComment (";
	$sql .= "commentID int(10) unsigned NOT NULL AUTO_INCREMENT,";
	$sql .= "youName varchar(20) NOT NULL,";
	$sql .= "youText varchar(200) NOT NULL,";
	$sql .= "regTime int(11) NOT NULL,";
	$sql .= "PRIMARY KEY (ID)";
	$sql .= ") CHARSET=utf8";

    $result = $connect -> query($sql);

    if( $result ){  
        echo "Create Comment Complete";
    } else {
        echo "Create Comment false";
    }
?>