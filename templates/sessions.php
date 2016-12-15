<?php
	// check if user has logged in
	
	session_start();
	if( basename($_SERVER['PHP_SELF']) == "login.php" ){
		echo "HERE";
		dir();
		if( isset($_SESSION["user"]) ){
			// redirect to main page
			header("Location:index.php");
		}
	} 
    else if ( !isset($_SESSION["user"]) ) {
        header("Location:login.php");
    }
?>