<?php
	// check first post data exists
	// print_r($_POST);
	if( !isset($_POST["username"]) || !isset($_POST["password"])  ){
		echo('{"post":"login","res":"INVALID_DATA"}');
		die();	
	}
	else {
		$uname = $_POST["username"];
		$pwd = $_POST["password"];
	}
	
	require "../templates/database.php";
	
	$query = "SELECT * FROM `student` WHERE	`username`='$uname' AND `password`='$pwd'";
	$res = $db->query($query);
	
	if($res->num_rows == 1 ){
		// create session
		session_start();
		$_SESSION["user"] = $uname;
		
		echo('{"post":"login","res":"OK"}');
	}
	else {
		echo('{"post":"login","res":"FAILED"}');
	}
	
?>