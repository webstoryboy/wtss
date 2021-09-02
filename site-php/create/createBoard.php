<?php
	include '../connect/connect.php';

	$sql = "CREATE TABLE myBoard (";
	$sql .= "boardID int(10) unsigned NOT NULL AUTO_INCREMENT,";
	$sql .= "memberID int(10) unsigned NOT NULL,";
	$sql .= "boardTitle varchar(50) NOT NULL,";
	$sql .= "boardContent longtext NOT NULL,";
	$sql .= "boardView int(10) unsigned NOT NULL,";
	$sql .= "regTime int(11) unsigned NOT NULL,";
	$sql .= "PRIMARY KEY (boardID)";
	$sql .= ") CHARSET=utf8";

	$result = $connect -> query($sql);

	if($result){
		echo "Create Board Complete";
	} else {
		echo "Create Board False";
	}
?>