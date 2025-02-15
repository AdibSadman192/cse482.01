<!DOCTYPE html>
<html lang="en">
<?php
include "../config/db_connection.php";
session_start();

?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - Online.Service</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/edit-profile.css">
    <link rel="stylesheet" href="assets/css/cards.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/slider.css">
    <link rel="stylesheet" href="assets/css/cookies.css">
   
</head>

<body style="/*background: url(&quot;design.jpg&quot;);*/background-position: 0 -60px;">
   <!--navbar-->
    <nav class="navbar navbar-light navbar-expand-md fixed-top navbar-shrink py-3" id="mainNav">
        <div class="container">
           <!--navbar logo-->
          <a class="navbar-brand d-flex align-items-center" href="index.php"><span class="bs-icon-sm bs-icon-circle bs-icon-primary shadow d-flex justify-content-center align-items-center me-2 bs-icon"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-bezier">
                        <path fill-rule="evenodd" d="M0 10.5A1.5 1.5 0 0 1 1.5 9h1A1.5 1.5 0 0 1 4 10.5v1A1.5 1.5 0 0 1 2.5 13h-1A1.5 1.5 0 0 1 0 11.5v-1zm1.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zm10.5.5A1.5 1.5 0 0 1 13.5 9h1a1.5 1.5 0 0 1 1.5 1.5v1a1.5 1.5 0 0 1-1.5 1.5h-1a1.5 1.5 0 0 1-1.5-1.5v-1zm1.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zM6 4.5A1.5 1.5 0 0 1 7.5 3h1A1.5 1.5 0 0 1 10 4.5v1A1.5 1.5 0 0 1 8.5 7h-1A1.5 1.5 0 0 1 6 5.5v-1zM7.5 4a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1z"></path>
                        <path d="M6 4.5H1.866a1 1.866 0 1 0 0 1h2.668A6.517 6.517 0 0 0 1.814 9H2.5c.123 0 .244.015.358.043a5.517 5.517 0 0 1 3.185-3.185A1.503 1.503 0 0 1 6 5.5v-1zm3.957 1.358A1.5 1.5 0 0 0 10 5.5v-1h4.134a1 1 0 1 1 0 1h-2.668a6.517 6.517 0 0 1 2.72 3.5H13.5c-.123 0-.243.015-.358.043a5.517 5.517 0 0 0-3.185-3.185z"></path>
                    </svg></span><span>Online.Service</span></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="../src/services.php">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="../src/packages.php">Packages</a></li>
                    <li class="nav-item"><a class="nav-link" href="../src/contacts.php">Contacts</a></li>
                    
                    <?php
                    if(isset($_SESSION["email"])) {
?>
<?php  $_SESSION["email"]; ?>
<li class="nav-item"><a class="nav-link" href="../src/viewprofile.php">Profile</a></li>
<li class="nav-item"><a class="nav-link" href="../src/cart.php">Cart</a></li>

<?php
}
?>
                    
                    <!-- <li class="nav-item"><a class="nav-link" href="cart.php">Cart</a></li> -->
                    <?php
                     
                      
                    if(isset($_SESSION["email"])) {
?>
<?php  $_SESSION["email"]; ?></ul>
<a class="btn btn-primary shadow" role="button" title="logout" href="../src/logout.php">Logout</a>

<?php
}else { ?>
  </ul><a class="btn btn-primary shadow" role="button" href="../src/signup.php">Sign up</a>
<?php }
?>
            </div>
        </div>
    </nav>
    <header class="bg-primary-gradient pt-5"></header>
    <section class="py-5">
      <!-- Swipe Slider -->
        <div class="simple-slider">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide" style="background: url(assets/img/david-pisnoy-46juD4zY1XA-unsplash.jpg) center center / cover no-repeat;"></div>
                    <div class="swiper-slide" style="background: url(assets/img/jimmy-nilsson-masth-f3AySFVo-w0-unsplash.jpg) center center / cover no-repeat;"></div>
                    <div class="swiper-slide" style="background: url(assets/img/carlos-lindner-53wcYH4IOig-unsplash.jpg) center center / cover no-repeat;"></div>
                </div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
    </section>
    <section>

 <!-- Search box -->
<div class="form-outline">
<input class="form-control form-control ps-4 pe-4 rounded-pill" type="text" name="search" id="myInput" placeholder="Search..." />
</div> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#display *").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>




    </section>
<br> 
    <div class="pricing1 py-5 bg-light">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8 text-center">
        <h3 class="mt-3 font-weight-medium mb-1">Your Personal Assistant</h3>
        <h6 class="subtitle">One-stop solution for your services. Order any service, anytime.</h6>
        
      </div>
    </div>
    <!-- Row  -->
    <div class="row mt-5"  id="display">
      <!-- Column -->

      <?php
    
     $link = mysqli_connect("localhost", "root", "", "online_service_agency");
      $query = "SELECT * FROM home_packages;";
            $result = mysqli_query($link, $query);
            if(mysqli_num_rows($result) > 0){
      while($row = mysqli_fetch_assoc($result)) {
        ?>
      <div class="col-lg-3 col-md-6">
        <div class="card text-center card-shadow on-hover border-0 mb-4">
          <div class="card-body font-14">
            <h5 class="mt-3 mb-1 font-weight-medium"><?php echo $row['hpackages_name'];?></h5>
            <h6 class="subtitle font-weight-normal">For <?php echo $row['hmonth'];?> Months</h6>
            <div class="pricing my-3">
              <sup>৳</sup>
              <span class="monthly display-5"><?php echo $row['hprice']; ?></span>
              <small class="monthly">/mo</small>
             <span class="d-block">Save <span class="font-weight-medium">৳<?php echo $row['hsaving']; ?></span></span>
            </div>
            <ul class="list-inline">
              <li class="d-block py-2"><?php echo $row['hdetails']; ?></li>
              <li class="d-block py-2"><?php echo $row['hdetails1']; ?></li>
              <li class="d-block py-2"><?php echo $row['hdetails2']; ?></li>
              <li class="d-block py-2">&nbsp;</li>
              <li class="d-block py-2">&nbsp;</li>
            </ul>
            <div class="bottom-btn">
            <?php
                    if(isset($_SESSION["email"])) {
              ?>
              <?php  $_SESSION["email"]; ?><a class="btn btn-success-gradiant btn-md text-white btn-block" href="../src/cart.php" name="add"><span>Add To Cart</span></a>
              <?php
              }else { ?>
                <a class="btn btn-success-gradiant btn-md text-white btn-block" href="../src/signup.php"><span>Add To Cart</span></a>
              <?php }
              ?>
             
            </div>
          </div>
        </div>
      </div>
      <?php 
      }
            }
      ?>
    </div>
  </div>
</div>
<!-- cookies -->
<div class="wrapper">
    <img src="#" alt="">
    <div class="contents">
      <header>Cookies Consent</header>
      <p>This website use cookies to ensure you get the best experience on our website.</p>
      <div class="buttons">
        <button class="items">I understand</button>
        <a href="#" class="items">Learn more</a>
      </div>
    </div>
  </div>

<!-- footer -->
    <footer class="text-center">
        <div class="container text-muted py-4 py-lg-5">
            <ul class="list-inline">
                <li class="list-inline-item me-4"></li>
                <li class="list-inline-item me-4"></li>
                <li class="list-inline-item"></li>
            </ul>
            <ul class="list-inline">
                <li class="list-inline-item me-4"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-facebook">
                        <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"></path>
                    </svg></li>
                <li class="list-inline-item me-4"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-twitter">
                        <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"></path>
                    </svg></li>
                <li class="list-inline-item"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-instagram">
                        <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"></path>
                    </svg></li>
            </ul>
            <p class="mb-0">Copyright  2022 Online.Service</p>
        </div>
    </footer>
    <section></section>


    <!--Javascripts-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.js"></script>
    <script src="https://geodata.solutions/includes/countrystate.js"></script>
    <script src="assets/js/slider.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/search.js"></script>
    <script type="text/javascript" src="assets/js/jquery.js"></script>

    <script src="//code.tidio.co/dcuugxi51ylnumlxw9bji5gjqpsjcyta.js" async></script>
    <script>
    const cookieBox = document.querySelector(".wrapper"),
    acceptBtn = cookieBox.querySelector("button");
    acceptBtn.onclick = ()=>{
      //setting cookie for 1 month, after one month it'll be expired automatically
      document.cookie = "Cookies=Online.Service; max-age="+60*60*24*30;
      if(document.cookie){ //if cookie is set
        cookieBox.classList.add("hide"); //hide cookie box
      }else{ //if cookie not set then alert an error
        alert("Cookie can't be set! Please unblock this site from the cookie setting of your browser.");
      }
    }
    let checkCookie = document.cookie.indexOf("Cookies=Online.Service"); //checking our cookie
    //if cookie is set then hide the cookie box else show it
    checkCookie != -1 ? cookieBox.classList.add("hide") : cookieBox.classList.remove("hide");
  </script>
  </body>

</html>