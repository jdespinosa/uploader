<?php
	require_once "../config/db.php";
	
	$db = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
	
	if( $db->connect_errno ){
		die("Sorry, cannot connect to database");
		
	}
	else{
	//	echo ("Connected to database");
		
	}
?>