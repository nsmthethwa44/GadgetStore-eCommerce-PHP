<?php
session_start();
require './includes/db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gadget Store System</title>
     <link rel="stylesheet" href="./assets/css/all.css">
      <link rel="stylesheet" href="./assets/css/all.min.css">
      <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>

    <!-- header  -->
   <?php include("./includes/templates/public/header.php")?>

   <!-- banner  -->
    <section class="banner">
        <div class="container">
            <div class="content">
                <div class="box b-img-1"><div class="box-img"><img src="./assets/img/banner-image-3.png" alt=""></div></div>
                <div class="box">
                    <h1>My Account</h1>
                </div>
                <div class="box b-img-1"><div class="box-img"><img src="./assets/img/banner-image-1.png" alt=""></div></div>
            </div>
        </div>
    </section>
    <!-- end banner  -->

    <!-- login & Register  account  -->
     <section class="section account">
        <div class="container">

            <div class="content">
            <div class="box">
                <h2>Login</h2>
                <p>Please Enter your detail to Sign In.</p>
                <div class="link-accounts">
                    <a href="#" class="link"><img src="./assets/img/google_30px.png" alt="">Login With Google</a>
                    <a href="#" class="link"><img src="./assets/img/facebook_30px.png" alt="">Login With Facebook</a>
                </div>
                <div class="divider"><span>Or</span></div>

                <form action="" class="form">
                    <input type="text" class="textBox" placeholder="Your Email" required>
                    <input type="text" class="textBox" placeholder="Password" required>

                    <div class="remember-pass">
                        <span><input type="checkbox" name="" id="">Remember Me</span>
                        <a href="#">Forgot Password</a>
                    </div>

                    <div class="buttons">
                        <input type="submit" value="Sign In" class="btn">
                    </div>
                </form>
            </div>
            <div class="box">
                 <h2>Register</h2>
                <p>Please Enter your detail to Sign Up.</p>
                 <div class="link-accounts">
                    <a href="#" class="link"><img src="./assets/img/google_30px.png" alt="">Login With Google</a>
                    <a href="#" class="link"><img src="./assets/img/facebook_30px.png" alt="">Login With Facebook</a>
                </div>
                <div class="divider"><span>Or</span></div>
                
                <form action="" class="form">
                  <div class="input-box">
                        <input type="text" class="textBox" placeholder="First Name" required>
                    <input type="text" class="textBox" placeholder="Last Name" required>
                  </div>
                      <input type="text" class="textBox" placeholder="Your Email" required>
                    <input type="text" class="textBox" placeholder="Password" required>

                    <p>Your personal information helps improve your experience on our site, manage your account, 
                        and fulfill other purposes as detailed in our <span><a href="#">privacy policy</a></span>.</p>

                    <div class="buttons">
                        <input type="submit" value="Sign Up" class="btn">
                    </div>
                </form>
            </div>
            </div>

        </div>
     </section>
    <!-- end login & Register account  -->

    <!-- footer -->
   <?php include("./includes/templates/public/footer.php") ?>

         <!-- scroll top -->
   <?php include("./includes/templates/public/scrollTop.php") ?>

      <!-- script  -->
   <script src="./assets/js/script.js"></script>
    
</body>
</html>