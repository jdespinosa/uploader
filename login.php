<?php 
	require "templates/constants.php";
	
	// if user has logged in
	session_start();
	if( isset($_SESSION["user"]) ){
		// redirect to main page
		header("Location:index.php");
	}
	
?>
<!DOCTYPE html>
<html>
	<head>
		<title><?= SITE_TITLE ?></title>
	</head>
	
	<script type="text/javascript" src="js/login.js"></script>
	
	<body>
		<?php require "templates/header.php"; ?>
		
		<div id="content">
			
			<div class="login form">
				<h2>Login </h2>
			
				<input type="text" id="txtusername" />
				<input type="password" id="txtpassword" />
				<input type="button" id="btnlogin" value="Login"/>
				<span id="err"></span>
			</div>
		</div>
		
	</body>
</html>