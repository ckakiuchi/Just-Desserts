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
					<form id="login_form" action="#" method="post">
						<input type="hidden" name="userData">
						<table cellspacing="0">
								<tr>
									<td class="login_header">
										<label for="email">Username / Email</label>
									</td>
									<td class="login_header">
										<label for="pass">Password</label>
									</td>
								</tr>
								<tr>
									<td>
										<input class="form-control" type="text" name="loginname" id="loginname">
									</td>
									<td>
										<input class="form-control" type="password" name="loginpass" id="loginpass">
									</td>
									<td>
										<input type="submit" class="btn btn-default" name="Login" value="Login" id="submitbutton" onclick="return validateUser()">
									</td>
								</tr>
								<tr id="tr_register">
									<td colspan="2" id="linktoregister">
										<a href="./register.php">Register here</a>
									</td>
								</tr>
						</table>
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
