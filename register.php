<?php include_once('statics/header.php'); ?>

<!--Register-->
	<section>
	<div id="main">
		<div class="mainbox_register">
			<div class="registerhead"><h2>Register Now</h2></div>
			<div class="box2_register">
				<form class="form" action="http://webdevfoundations.net/scripts/formdemo.asp" method="post">
					<div class="form-group">
						<input type="hidden" name="recipients" class="form-control" id="recipient" value="corinne.kakiuchi@gmail.com">
						<input type="hidden" name="subject" class="form-control" id="subject" value="Message from JUSTDESSERTS webpage">
						<input type="hidden" name="thanks_url" class="form-control" id="redirection" value="./thanks.html">

						<input type="text" name="ID" class="form-control" id="username" placeholder="Username*" required onblur="validUserName()" onkeypress="validUserName()"><span id='uname_error'></span>

						<input type="password" name="Password" class="form-control" id="password" aria-required="true" placeholder="Password*" required onblur="validPassword()" onkeypress="validPassword()"><span id='pword_error'></span>

						<input type="password" name="confirmPassword"  class="form-control" id="confirmPassword" aria-required="true" placeholder="Confirm Password*" required onblur="validConfirmPassword()" onkeypress="validConfirmPassword()"><span id='cpword_error'></span>

						<input type="email" name="Email" class="form-control" id="CustEmail" placeholder="Email*" required onblur="validCustEmail()" onkeypress="validCustEmail()"><span id='cemail_error' ></span>

						<input type="email" name="confirmEmail" class="form-control" id="confCustEmail" placeholder="Confirm Email*" required onblur="validConfCustEmail()" onkeypress="validConfCustEmail()"><span id='confcemail_error'></span>

						<input type="submit" class="btn btn-default" value="Register"  onclick='return validateRegisterForm()'><span id='submit-error'></span>
					</div>
				</form>
			</div>
		</div>
	</div>
	</section>

<?php include_once('statics/footer.php'); ?>
