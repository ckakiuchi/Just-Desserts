<?php include_once('statics/header.php'); ?>

<!--Register-->
	<div id="main">
		<div class="mainbox_register">
			<div class="registerhead"><h2>Register Now</h2></div>
			<div class="box2_register">
				<form class="form" action="forum/register.php" method="post">
					<div class="form-group">
						<input type="hidden" name="recipients" class="form-control" id="recipient" value="corinne.kakiuchi@gmail.com">
						<input type="hidden" name="subject" class="form-control" id="subject" value="Message from JUSTDESSERTS webpage">
						<input type="hidden" name="thanks_url" class="form-control" id="redirection" value="./thanks.html">

						<input type="text" name="fname" class="form-control" id="fname" placeholder="First Name*" required onblur="validateFirstName()" onkeypress="validateFirstName()"><span id='firstName_error' ></span>

						<input type="text" name="lname" class="form-control" id="lname" placeholder="Last Name*" required onblur="validateLastName()" onkeypress="validateLastName()"><span id='lastName_error'></span>

						<input type="text" name="login" class="form-control" id="username" placeholder="Username*" required onblur="validUserName()" onkeypress="validUserName()"><span id='uname_error'></span>

						<input type="password" name="password" class="form-control" id="password" aria-required="true" placeholder="Password*" required onblur="validPassword()" onkeypress="validPassword()"><span id='pword_error'></span>

						<input type="password" name="cpassword"  class="form-control" id="confirmPassword" aria-required="true" placeholder="Confirm Password*" required onblur="validConfirmPassword()" onkeypress="validConfirmPassword()"><span id='cpword_error'></span>

						<input type="submit" class="btn btn-default" value="Register"><span id='submit-error'></span>
					</div>
				</form>
			</div>
		</div>
	</div>

<?php include_once('statics/footer.php'); ?>
<!-- <input type="text" name="ID" class="form-control" id="username" placeholder="Username*" required onblur="validUserName()" onkeypress="validUserName()"><span id='uname_error'></span>

<input type="password" name="Password" class="form-control" id="password" aria-required="true" placeholder="Password*" required onblur="validPassword()" onkeypress="validPassword()"><span id='pword_error'></span>

<input type="password" name="confirmPassword"  class="form-control" id="confirmPassword" aria-required="true" placeholder="Confirm Password*" required onblur="validConfirmPassword()" onkeypress="validConfirmPassword()"><span id='cpword_error'></span>

<input type="email" name="Email" class="form-control" id="CustEmail" placeholder="Email*" required onblur="validCustEmail()" onkeypress="validCustEmail()"><span id='cemail_error' ></span>

<input type="email" name="confirmEmail" class="form-control" id="confCustEmail" placeholder="Confirm Email*" required onblur="validConfCustEmail()" onkeypress="validConfCustEmail()"><span id='confcemail_error'></span>

<input type="submit" class="btn btn-default" value="Register"  onclick='return validateRegisterForm()'><span id='submit-error'></span> -->
