<?php
	include 'functions.php';
	require_once('config.php');
	session_start();

// Connect to server and select database.
($GLOBALS["___mysqli_ston"] = mysqli_connect(DB_HOST,  DB_USER,  DB_PASSWORD))or die("cannot connect, error: ".((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
((bool)mysqli_query($GLOBALS["___mysqli_ston"], "USE " . constant('DB_DATABASE')))or die("cannot select DB, error: ".((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
$tbl_name="topic"; // Table name
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<script  src="js/default.js" type="text/javascript"></script>
	<title>Contact Us</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="styles/base2.css">
</head>
<body>

<!-- navigation bar / header -->
	<header>
		<div class = "banner">
			<div class="navigation">
				<div class="logo">
					<div class="logo_img">
						<a href="./index.php">
						<img src="images/logo2.png">
						</a>
					</div>
				</div>
				<div class="login_box">
					<form id="loginForm" name="loginForm" action="login.php" method="post">
						<!-- <input type="hidden" name="userData"> -->
						<?php
							if (isLoggedIn()){
								// shows username while user is currently loggedin
								echo '&nbsp<br/>';
								echo 'Currently logged-in as:<br/> <strong>'.$_SESSION['SESS_FIRST_NAME'].'</strong><br/>';
								echo '<a href="logout.php"><button type="button" class="btn btn-default">Logout</button></a>&nbsp&nbsp&nbsp&nbsp';
								echo '<a href="forum.php"><button type="button" class="btn btn-default">Forums</button></a><br/><br/>';
							} else {
								include_once('login_form.php');
							}
						?>

					</form>
				</div>

				<!-- navigation -->
				<div class = "navigationbar">
					<div class="navbar">
						<a href="./index.php" class="buttom" target="_self">Home</a>
						<a href="./about.php" class="buttom" target="_self">About Us</a>
						<a href="./recipes.php" class="buttom" target="_self">Our Services</a>
						<a href="./contact.php" class="buttom" target="_self">Contact Us</a>
					</div>
				</div><!-- end navigation -->
			</div>
		</div>
	</header><br>
