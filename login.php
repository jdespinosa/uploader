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
			
				<label>Username:</label><input type="text" id="txtusername" />
				<label>Password:</label><input type="password" id="txtpassword" />
				
				<p id="err">iInvalid username</p>
				<p class="popup-link">
					<span class="popup-link-text">Forgot Password?</span>
					<div class="popup-link-popup">Teacher can reset password</div>
				</p>
				<input type="button" id="btnlogin" value="Login"/>
			</div>
		</div>
		
	</body>
</html>