<?php
    include "../connect/connect.php";

    $sql = "CREATE TABLE myMember (";
	$sql .= "memberID int(10) unsigned NOT NULL AUTO_INCREMENT,";
	$sql .= "youEmail varchar(40) NOT NULL,";
	$sql .= "youName varchar(10) NOT NULL,";
	$sql .= "youPass varchar(20) NOT NULL,";
	$sql .= "youBirth varchar(10) NOT NULL,";
	$sql .= "youNumber varchar(11) NOT NULL,";
	$sql .= "regTime int(11) NOT NULL,";
	$sql .= "PRIMARY KEY (memberID)";
	$sql .= ") CHARSET=utf8";

    $result = $connect -> query($sql);

    if( $result ){  
        echo "Create Table Complete";
    } else {
        echo "Create table false";
    }
?>