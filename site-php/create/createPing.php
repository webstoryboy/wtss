<?php
	include '../connect/connect.php';

	$sql = "CREATE TABLE myPing (";
	$sql .= "pingID int(10) unsigned NOT NULL AUTO_INCREMENT,";
	$sql .= "mainNum int(10) NOT NULL,";
	$sql .= "commentNum int(10) NOT NULL,";
	$sql .= "blogNum int(10) NOT NULL,";
	$sql .= "noticeNum int(10) NOT NULL,";
	$sql .= "contactNum int(10) NOT NULL,";
	$sql .= "regTime DATETIME NOT NULL,";
	$sql .= "PRIMARY KEY (pingID)";
	$sql .= ") CHARSET=utf8";

	$result = $connect -> query($sql);

	if($result){
		echo "Create myPing Complete";
	} else {
		echo "Create myPing False";
	}
?>