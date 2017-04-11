<?php include_once('statics/header.php'); ?>

	<!-- main content -->
	<div id="main">
	<div class="mainbox">
		<div class="box1">
			<h1>Contact Us</h1>
		</div>
		<div class="box2 form-group">
			<form class="form" action="http://webdevfoundations.net/scripts/formdemo.asp" method="post">
				<input type="hidden" name="recipients" id="recipient" value="corinne.kakiuchi@gmail.com">
				<input type="hidden" name="subject" id="subject" value="Message from JUSTDESSERTS webpage">
				<input type="hidden" name="thanks_url" id="redirection" value="./thanks.html">

				<input type="text" name="Name" class="form-control" id="name"  placeholder="Name*"  onblur="validateName()" onkeypress="validateName()"><span id='name_error'></span>

				<input type="email" name="Email" class="form-control" id="CustEmail" aria-required="true" aria-invalid="false" placeholder="Email*"  onblur="validateEmail()" onkeypress="validateEmail()"><span id='email_error'></span>

				<input type="text" name="Subject" class="form-control" id="topic"  placeholder="Subject" >

				<textarea name="Message" class="form-control" id="message" cols="40" rows="9" placeholder=" Message*"  onblur="validateMessage()" onkeypress="validateMessage()"></textarea><span id='message_error'></span>

				<input type="submit" class="btn btn-default" value="SEND MESSAGE" onclick='return validateContactForm()'><span id='submit_error'></span>
			</form>
		</div>
	</div>
	</div>

<?php include_once('statics/footer.php'); ?>
