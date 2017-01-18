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
			
			<div class="activation form">
				<h2>Account Activation </h2>
			
				<label>id:</label><input type="text" id="txtid"/>
				<label>activation code:</label><input type="text" id="txtactivation"/>
				<div class="help-link">
					<div class="help-link-image"></div>
					<div class="help-link-text">Get this from your teacher</div>
				</div>
				<br/>
				<label>Username:</label><input type="text" id="txtusername" /><div class="" ></div>
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