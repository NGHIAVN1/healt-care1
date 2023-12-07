<!DOCTYPE html><html data-bs-theme="light" lang="en"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no"><title>health care</title><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"><link rel="stylesheet" href="/assets/css/styles.min.css?h=d45ecc3232b7eb6ca50bcf9960990024"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/css/theme.bootstrap_4.min.css"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css"></head><body><div class="container"><div class="card"><div class="card-body"></div></div></div><!-- Start: Ludens - Register --><div class="container" style="position:absolute; left:0; right:0; top: 50%; transform: translateY(-50%); -ms-transform: translateY(-50%); -moz-transform: translateY(-50%); -webkit-transform: translateY(-50%); -o-transform: translateY(-50%);"><div class="row d-flex d-xl-flex justify-content-center justify-content-xl-center"><div class="col-sm-12 col-lg-10 col-xl-9 col-xxl-7 bg-white shadow-lg" style="border-radius: 5px;"><div class="p-5"><div class="text-center"><h4 class="text-dark mb-4">Create an Account!</h4></div><!-- Start: Register Form --><form class="user"><!-- Start: Username --><div class="mb-3"><input class="form-control form-control-user" type="text" placeholder="Username" required=""></div><!-- End: Username --><!-- Start: Email --><div class="mb-3"><input class="form-control form-control-user" type="email" id="email" placeholder="Email Address" required=""></div><!-- End: Email --><!-- Start: Password --><div class="row mb-3"><div class="col-sm-6 mb-3 mb-sm-0"><input class="form-control form-control-user" type="password" id="password" placeholder="Password" required=""></div><div class="col-sm-6"><input class="form-control form-control-user" type="password" id="verifyPassword" placeholder="Repeat Password" required=""></div></div><!-- End: Password --><!-- Start: Names --><div class="row mb-3"><div class="col-sm-6 mb-3 mb-sm-0"><input class="form-control form-control-user" type="text" placeholder="First Name" required=""></div><div class="col-sm-6"><input class="form-control form-control-user" type="text" placeholder="Last Name" required=""></div></div><!-- End: Names --><!-- Start: Email Error Message --><div class="row mb-3"><p id="emailErrorMsg" class="text-danger" style="display:none;">Paragraph</p><p id="passwordErrorMsg" class="text-danger" style="display:none;">Paragraph</p></div><!-- End: Email Error Message --><button class="btn btn-primary d-block btn-user w-100" id="submitBtn" type="submit">Register Account</button><hr></form><!-- End: Register Form --><!-- Start: Forgot Password --><div class="text-center"><a class="small" href="forgot-password.html">Forgot Password?</a></div><!-- End: Forgot Password --><!-- Start: Login --><div class="text-center"><a class="small" href="/login.html">Already have an account? Login!</a></div><!-- End: Login --></div></div></div><script>
	let email = document.getElementById("email")
	let password = document.getElementById("password")
	let verifyPassword = document.getElementById("verifyPassword")
	let submitBtn = document.getElementById("submitBtn")
	let emailErrorMsg = document.getElementById('emailErrorMsg')
	let passwordErrorMsg = document.getElementById('passwordErrorMsg')

	function displayErrorMsg(type, msg) {
		if(type == "email") {
			emailErrorMsg.style.display = "block"
			emailErrorMsg.innerHTML = msg
			submitBtn.disabled = true
		}
		else {
			passwordErrorMsg.style.display = "block"
			passwordErrorMsg.innerHTML = msg
			submitBtn.disabled = true
		}
	}

	function hideErrorMsg(type) {
		if(type == "email") {
			emailErrorMsg.style.display = "none"
			emailErrorMsg.innerHTML = ""
			submitBtn.disabled = true
			if(passwordErrorMsg.innerHTML == "")
				submitBtn.disabled = false
		}
		else {
			passwordErrorMsg.style.display = "none"
			passwordErrorMsg.innerHTML = ""
			if(emailErrorMsg.innerHTML == "")
				submitBtn.disabled = false
		}
	}
	
	// Validate password upon change
	password.addEventListener("change", function() {

		// If password has no value, then it won't be changed and no error will be displayed
		if(password.value.length == 0 && verifyPassword.value.length == 0) hideErrorMsg("password")
		
		// If password has a value, then it will be checked. In this case the passwords don't match
		else if(password.value !== verifyPassword.value) displayErrorMsg("password", "Passwords do not match")
		
		// When the passwords match, we check the length
		else {
			// Check if the password has 8 characters or more
			if(password.value.length >= 8)
				hideErrorMsg("password")
			else
				displayErrorMsg("password", "Password must be at least 8 characters long")
		}
	})
	
	verifyPassword.addEventListener("change", function() {
		if(password.value !== verifyPassword.value)
			displayErrorMsg("password", "Passwords do not match")
		else {
			// Check if the password has 8 characters or more
			if(password.value.length >= 8)
				hideErrorMsg("password")
			else
				displayErrorMsg("password", "Password must be at least 8 characters long")
		}
	})

	// Validate email upon change
	email.addEventListener("change", function() {
		// Check if the email is valid using a regular expression (string@string.string)
		if(email.value.match(/^[^@]+@[^@]+\.[^@]+$/))
			hideErrorMsg("email")
		else
			displayErrorMsg("email", "Invalid email")
	});
</script></div><!-- End: Ludens - Register --><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script><script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/js/jquery.tablesorter.js"></script><script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/js/widgets/widget-filter.min.js"></script><script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/js/widgets/widget-storage.min.js"></script><script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script><script src="/assets/js/script.min.js?h=13b77c4c24e2b1bed1889bb37d61cd95"></script></body></html>