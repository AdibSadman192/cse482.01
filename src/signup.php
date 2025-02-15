<!DOCTYPE html>
<html lang="en">
<?php
include "../config/db_connection.php";
session_start();
?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Sign up - Online.Service</title>
    <link rel="stylesheet" href="../public/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../public/assets/css/edit-profile.css">
    <link rel="stylesheet" href="../public/assets/css/cards.css">
    <link rel="stylesheet" href="../public/assets/css/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.css">
    <link rel="stylesheet" href="../public/assets/css/slider.css">
</head>

<body>
    <!--navbar-->
    <nav class="navbar navbar-light navbar-expand-md fixed-top navbar-shrink py-3" id="mainNav">
        <div class="container">
             <!--navbar logo-->
            <a class="navbar-brand d-flex align-items-center" href="../index.php"><span class="bs-icon-sm bs-icon-circle bs-icon-primary shadow d-flex justify-content-center align-items-center me-2 bs-icon"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-bezier">
                        <path fill-rule="evenodd" d="M0 10.5A1.5 1.5 0 0 1 1.5 9h1A1.5 1.5 0 0 1 4 10.5v1A1.5 1.5 0 0 1 2.5 13h-1A1.5 1.5 0 0 1 0 11.5v-1zm1.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zm10.5.5A1.5 1.5 0 0 1 13.5 9h1a1.5 1.5 0 0 1 1.5 1.5v1a1.5 1.5 0 0 1-1.5 1.5h-1a1.5 1.5 0 0 1-1.5-1.5v-1zm1.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zm-10.5 1.358A1.5 1.5 0 0 0 10 5.5v-1h4.134a1 1 0 1 1 0 1h-2.668a6.517 6.517 0 0 1 2.72 3.5H13.5c-.123 0-.243.015-.358.043a5.517 5.517 0 0 0-3.185-3.185z"></path>
                        <path d="M6 4.5H1.866a1 1 0 1 0 0 1h2.668A6.517 6.517 0 0 0 1.814 9H2.5c.123 0 .244.015.358.043a5.517 5.517 0 0 1 3.185-3.185A1.503 1.503 0 0 1 6 5.5v-1zm3.957 1.358A1.5 1.5 0 0 0 10 5.5v-1h4.134a1 1 0 1 1 0 1h-2.668a6.517 6.517 0 0 1 2.72 3.5H13.5c-.123 0-.243.015-.358.043a5.517 5.517 0 0 0-3.185-3.185z"></path>
                    </svg></span><span>Online.Service</span></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item"><a class="nav-link" href="../index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="../services.php">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="../packages.php">Packages</a></li>
                    <li class="nav-item"><a class="nav-link" href="../contacts.php">Contacts</a></li>
                </ul><a class="btn btn-primary shadow" role="button" href="../login.php">Log in</a>
            </div>
        </div>
    </nav>
    
    <section class="py-5">
        <div class="container-fluid" style="position:absolute; left:0; right:0; top: 50%; transform: translateY(-50%); -ms-transform: translateY(-50%); -moz-transform: translateY(-50%); -webkit-transform: translateY(-50%); -o-transform: translateY(-50%);">
            <div class="row text-center d-flex d-xl-flex justify-content-center justify-content-xl-center" style="padding-left: 62px;margin-left: -39px;margin-right: -33px;padding-right: 54px;margin-bottom: 2px;margin-top: 50px;padding-top: 143px;">
                <div class="col-sm-12 col-lg-10 col-xl-9 col-xxl-7 bg-white shadow-lg" style="border-radius: 5px;">
    
                    <div class="p-5">
                        <div class="text-center">
                            <h4 class="text-dark mb-4">Create an Account!</h4>
                        </div>
                        <form class="user" action="../insertuser.php" method="POST" >
                            <div class="mb-3"><input class="form-control form-control-user" type="text" name="username" placeholder="Username" required=""></div>
                            <div class="mb-3"><input class="form-control form-control-user" type="text" name="number" placeholder="Phone Number" required=""></div>
                            
                                <div class="mb-3">
                                    <label for="select">Select location:</label>
                                <select class="form-control" id="select" name="location">
                                    <option value="gulsan">Gulsan</option>
                                    <option value="dhandmondi">Dhanmondi</option>
                                    <option value="uttara">Uttara</option>
                                    <option value="mirpur">Mirpur</option>
                                </select>
                            </div>
                            <br>
                            <div class="mb-3"><input class="form-control form-control-user" type="text" name="address" placeholder="Address" required=""></div>
                            <div class="mb-3"><input class="form-control form-control-user" type="email" id="email" name="email" placeholder="Email Address" required=""></div>
                            <div class="row mb-3">
                                <div class="col-sm-6 mb-3 mb-sm-0"><input class="form-control form-control-user" type="password" id="password"  name="password" placeholder="Password" required=""></div>
                                <div class="col-sm-6"><input class="form-control form-control-user" type="password" id="verifyPassword" name="password" placeholder="Repeat Password" required=""></div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-6 mb-3 mb-sm-0"><input class="form-control form-control-user" type="text" name="customer_name" placeholder=" Full Name" required=""></div>
                            </div>
                            <div class="row mb-3">
                                <p id="emailErrorMsg" class="text-danger" style="display:none;">Paragraph</p>
                                <p id="passwordErrorMsg" class="text-danger" style="display:none;">Paragraph</p>
                            </div>
                            
                            <button class="btn btn-primary d-block btn-user w-100" id="submitBtn" value="submit" type="input" name="submit">Register Account</button> 
                            <hr>
                            <div class="mb-3"></div>
                        </form>
                        <div class="text-center"><a class="small" href="../resetpassword.php">Forgot Password?</a></div>
                        <div class="text-center"><a class="small" href="../login.php">Already have an account? Login!</a></div>
                    </div>
                </div>
            </div>
    </section>
    <!-- form validation-->
    <script>
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
</script>
    </div>
    <div></div>
    <!--Javascripts-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../public/assets/js/main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.js"></script>
    <script src="https://geodata.solutions/includes/countrystate.js"></script>
    <script src="../public/assets/js/slider.js"></script>
    <script src="//code.tidio.co/dcuugxi51ylnumlxw9bji5gjqpsjcyta.js" async></script>
</body>

</html>