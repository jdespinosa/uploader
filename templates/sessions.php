<?php
	// check if user has logged in
	
	session_start();
	if( strpos(basename($_SERVER['PHP_SELF']), "login.php") != false  ){
		echo "HERE";
		if( isset($_SESSION["user"]) ){
			// redirect to main page
			header("Location:index.php");
		}
	} 
    else if (  strpos(basename($_SERVER['PHP_SELF']), "login.php") != false && !isset($_SESSION["user"]) ) {
        header("Location:login.php");
    }
?>