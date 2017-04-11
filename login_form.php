
<?php
	if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
		echo '<ul class="err">';
		foreach($_SESSION['ERRMSG_ARR'] as $msg) {
			echo '<li>',$msg,'</li>';
		}
		echo '</ul>';
		unset($_SESSION['ERRMSG_ARR']);
	}
?>
<form id="loginForm" name="loginForm" method="post" action="login.php">
  <table width="300" border="0" align="center" cellpadding="2" cellspacing="0">
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
					<input class="textfield" type="text" name="login" id="login">
				</td>
				<td>
					<input class="textfield" type="password" name="password" id="password">
				</td>
				<td>
					<input type="submit" name="Submit" value="Submit" id="submitbutton" class="btn btn-default">
				</td>
			</tr>
			<tr id="tr_register">
				<td colspan="2" id="linktoregister">
					<a href="./register.php">Register here</a>
				</td>
			</tr>
	</table>
</form>
