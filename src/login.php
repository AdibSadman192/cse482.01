<!DOCTYPE html>
<html lang="en">
<?php
include "../config/db_connection.php";
include "userlogincheck.php";
?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Login - Online.Service</title>
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
            <a class="navbar-brand d-flex align-items-center" href="../index.php">
                 <!--navbar logo-->
                <span class="bs-icon-sm bs-icon-circle bs-icon-primary shadow d-flex justify-content-center align-items-center me-2 bs-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-bezier">
                        <path fill-rule="evenodd" d="M0 10.5A1.5 1.5 0 0 1 1.5 9h1A1.5 1.5 0 0 1 4 10.5v1A1.5 1.5 0 0 1 2.5 13h-1A1.5 1.5 0 0 1 0 11.5v-1zm1.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zm10.5.5A1.5 1.5 0 0 1 13.5 9h1a1.5 1.5 0 0 1 1.5 1.5v1a1.5 1.5 0 0 1-1.5 1.5h-1a1.5 1.5 0 0 1-1.5-1.5v-1zm1.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zm-11-4A1.5 1.5 0 0 1 7.5 3h1A1.5 1.5 0 0 1 10 4.5v1A1.5 1.5 0 0 1 8.5 7h-1A1.5 1.5 0 0 1 6 5.5v-1zm1.5 0a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1z"></path>
                        <path d="M6 4.5H1.866a1 1 0 1 0 0 1h2.668A6.517 6.517 0 0 0 1.814 9H2.5c.123 0 .244.015.358.043a5.517 5.517 0 0 1 3.185-3.185A1.503 1.503 0 0 1 6 5.5v-1zm3.957 1.358A1.5 1.5 0 0 0 10 5.5v-1h4.134a1 1 0 1 1 0 1h-2.668a6.517 6.517 0 0 1 2.72 3.5H13.5c-.123 0-.243.015-.358.043a5.517 5.517 0 0 0-3.185-3.185z"></path>
                    </svg></span>
                    
                    <span>Online.Service</span></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item"><a class="nav-link" href="../index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="../services.php">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="../packages.php">Packages</a></li>
                    <li class="nav-item"><a class="nav-link" href="../contacts.php">Contacts</a></li>
                    
                    <?php
                    if(isset($_SESSION["email"])) {
?>
<?php  $_SESSION["email"]; ?></ul><a class="btn btn-primary shadow" role="button" title="logout" href="../logout.php">Logout</a>
<?php
}else { ?>
  </ul><a class="btn btn-primary shadow" role="button" href="../signup.php">Signup</a>
<?php }
?>
            </div>
        </div>
    </nav>
    <section class="py-5">
        <div class="container" style="position:absolute; left:0; right:0; top: 50%; transform: translateY(-50%); -ms-transform: translateY(-50%); -moz-transform: translateY(-50%); -webkit-transform: translateY(-50%); -o-transform: translateY(-50%);">
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-9 col-xl-9 col-xxl-7">
                    <div class="card shadow-lg o-hidden border-0 my-5">
                        <div class="card-body p-0">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="p-5">
                                        <div class="text-center">
                                            <h4 class="text-dark mb-4">Welcome Back!</h4>
                                        </div>
                                        <form class="user" method="POST">
                                            <div class="mb-3"><input class="form-control form-control-user" type="email" id="email" aria-describedby="emailHelp" placeholder="Enter Email Address" name="email"  required=""></div>
                                            <div class="mb-3"><input class="form-control form-control-user" type="password" id="password" placeholder="Password" name="password"   required=""></div>
                                            <div class="row mb-3">
                                                <p id="errorMsg" class="text-danger" style="display:none;">Paragraph</p>
                                            </div><button class="btn btn-primary d-block btn-user w-100" id="submitBtn" type="submit" name=" submit" value="submit">Login</button>
                                            <hr>
                                        </form>
                                        <div class="text-center"><a class="small" href="../resetpassword.php">Forgot Password?</a></div>
                                        <div class="text-center"><a class="small" href="../adminlogin.php">Login As admin</a></div>
                                        <div class="text-center"><a class="small" href="../signup.php">Create an Account!</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    
  <script>
	let email = document.getElementById("email")
	let submitBtn = document.getElementById("submitBtn")
	let errorMsg = document.getElementById('errorMsg')

	function displayErrorMsg(e) {
		errorMsg.style.display = "block"
		errorMsg.innerHTML = e
		submitBtn.disabled = true
	}

	function hideErrorMsg() {
		errorMsg.style.display = "none"
		submitBtn.disabled = false
	}
	
	// Validate email upon change
	email.addEventListener("change", function() {
		// Check if the email is valid using a regular expression (string@string.string)
		if(email.value.match(/^[^@]+@[^@]+\.[^@]+$/))
			hideErrorMsg()
		else
			displayErrorMsg("Invalid email")
	});
</script>
    </div>
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