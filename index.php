<?php 
	require "templates/constants.php";
	require "templates/sessions.php";
	// require "utilities/getUploads.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title><?= SITE_TITLE ?></title>
</head>
	<script type="text/javascript" src="js/upload.js"></script>
<body>
	<?php require "templates/header.php"; ?>
	
	<div class="container">
	
		<p>Welcome, <span class="user"><?=$_SESSION["name"] ?></span></p>
		
		<div class="upload-form">
			<p class="title">Upload a file</p>
			<p class="description"></p>
			<input type="text" id="txtkey" placeholder="Submission Key"/><span class="status" id="spstat"></span><br/>
			<input type="file" id="flupload" /><br/>
			<input type="button" id="btnsubmit" value="upload"/>
		</div>
		
	</div>
	
</body>



</html>