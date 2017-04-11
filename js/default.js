/* set document.getElementById into $ */
function $(id) {
		var element = document.getElementById(id);
		if (element == null )
			alert( 'Programmer error: ' + id + ' does not exist.' );
		return element;
	}

function producePrompt(message, promptLocation, color) {
	$(promptLocation).innerHTML = message;
	$(promptLocation).style.color = color;
}

/*=========================================================*/
// Contact Us Functions
function validateName() {
	var name = $('name').value;
	if(name.length == 0) {
		producePrompt('Please input your name', 'name_error' , 'red')
		return false;
	}
	if (!name.match(/^[A-Za-z]*[A-Za-z]$/)) {
		producePrompt('Name is required.','name_error', '');
		return false;
	}
	producePrompt('','name_error', '');
	return true;
}

function validateEmail () {
	var email = $('CustEmail').value;
	if(email.length == 0) {
		producePrompt('Please input an Email','email_error', 'red');
		return false;
		}
	if(!email.match(/^[A-Za-z\._\-[0-9]*[@][A-Za-z]*[\.][a-z]{2,4}$/)) {
		producePrompt('Email Invalid', 'email_error', 'red');
		return false;
	}
	producePrompt('','email_error', '');
	return true;
}

function validateMessage() {
	var message = $('message').value;
	var required = 30;
	var left = required - message.length;
	if (left > 0) {
		producePrompt(left + ' remaining characters required','message_error','red');
		return false;
	}
	producePrompt('','message_error', '');
	return true;
}

/* validate contact us form upon pressing submit button*/
function validateContactForm() {
	if (!validateName() || !validateEmail() || !validateMessage()) {
		alert('Please correct errors to submit.', 'submit_error', 'red');
		return false;
	}
}

/*=========================================================*/
/* validate registration form */

function validateFirstName() {
	var fname = $('fname').value;
	if(fname.length == 0) {
		producePrompt('Please input your first name', 'firstName_error' , 'red')
		return false;
	}
	if (!fname.match(/^[A-Za-z]*[A-Za-z]$/)) {
		producePrompt('First name is required.','firstName_error', '');
		return false;
	}
	producePrompt('','firstName_error', '');
	return true;
}

function validateLastName() {
	var lname = $('lname').value;
	if(lname.length == 0) {
		producePrompt('Please input your last name', 'lastName_error' , 'red')
		return false;
	}
	if (!lname.match(/^[A-Za-z]*[A-Za-z]$/)) {
		producePrompt('Last name is required.','lastName_error', '');
		return false;
	}
	producePrompt('','lastName_error', '');
	return true;
}

function validUserName() {
	var uname= $('username').value;
	if(uname.length == 0) {
		producePrompt('Username is required', 'uname_error' , 'red');
		return false;
	}
	if (!uname.match(/^[A-Za-z]*[A-Za-z]$/)) {
		producePrompt('Please input a valid username.','uname_error', 'red');
		return false;
	}
	producePrompt('','uname_error', '');
	return true;
}

function validPassword() {
	var pword = $('password').value;
	if (pword.length == 0) {
		producePrompt('Please input a password.','pword_error', 'red');
		return false;
	}
	if (!pword.match(/^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,16}$/)) {
		producePrompt('Please input a valid password(A-Z, a-z, 0-9, a special character and 6-16 characters).','pword_error', 'red');
		return false;
	}
	producePrompt('','pword_error', '');
	return true;
}

function validConfirmPassword() {
	var pword = $('password').value;
	var cpword = $('confirmPassword').value;
	if (cpword.length == 0) {
		producePrompt('Please re-enter your password.','cpword_error', 'red');
		return false;
	}
	if (pword != cpword) {
		producePrompt('Please re-enter your password.','cpword_error', 'red');
		return false;
	}
	producePrompt('','cpword_error', '');
	return true;
}

// function validCustEmail() {
// 	var cemail = $('CustEmail').value;
// 	if (cemail.length == 0) {
// 		producePrompt('Please input an Email.','cemail_error', 'red');
// 		return false;
// 	}
// 	if (!cemail.match(/^[A-Za-z\._\-[0-9]*[@][A-Za-z]*[\.][a-z]{2,4}$/)) {
// 		producePrompt('Please input a valid Email Address.','cemail_error', 'red');
// 		return false;
// 	}
// 	producePrompt('','cemail_error', '');
// 	return true;
// }
//
// function validConfCustEmail() {
// 	var cemail = $('CustEmail').value;
// 	var confcemail = $('confCustEmail').value;
// 	if (confcemail.length == 0) {
// 		producePrompt('Please reinput your Email.','confcemail_error', 'red');
// 		return false;
// 	}
// 	if (confcemail != cemail) {
// 		producePrompt('Please reinput your Email.','confcemail_error', 'red');
// 		return false;
// 	}
// 	producePrompt('','confcemail_error', '');
// 	return true;
// }

/* validate contact us form upon pressing submit button*/
function validateRegisterForm() {
	if (!validUserName() || !validPassword() || !validConfirmPassword() || !validateLastName() || !validateFirstName()) {
		alert('Please correct errors to submit.');
		return false;
	}
}

/* validate username and password */
function validateUser() {
	var uname = $('loginname').value;
	var pword = $('loginpass').value;
    if(uname == "byu" && pword == "byu" ) {
        alert( "Login Succesful" );
		return true;
    } else {
        alert( "Username or Password is incorrect" );
		return false;
    }
}

/* validate and post comments */
function postComment() {
	var comments = $('taComments').value;
	var posting = $('posts');
	if(comments == 0) {
		alert('Please input a comment first');
		return false;
	}
	posting.innerHTML = comments;
	return false;
}
