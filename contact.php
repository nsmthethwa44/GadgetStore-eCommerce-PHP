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
                    <h1>Contact US</h1>
                </div>
                <div class="box b-img-1"><div class="box-img"><img src="./assets/img/banner-image-1.png" alt=""></div></div>
            </div>
        </div>
    </section>
    <!-- end banner  -->

    <!-- contact  -->
     <section class="contact section">
        <div class="container">

            <div class="contact-frame">
                <iframe  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3460.2109285540523!2d31.022532075713045!3d-29.858190222664668!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1ef7a9c83830babf%3A0x54057f4bb7b5b99c!2sWest%20St%2C%204001!5e0!3m2!1sen!2sza!4v1740304921595!5m2!1sen!2sza" class="map-frame"></iframe>
            </div>

            <div class="contact-info">
                <div class="box">
                    <h2>Customer Support</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore, debitis?</p>
                    <form action="" class="form">
                        <div class="input-box">
                            <input type="text" class="textBox" placeholder="First Name" required>
                            <input type="text" class="textBox" placeholder="Last Name" required>
                        </div>
                            <input type="text" class="textBox" placeholder="Your Email" required>
                            <textarea name="" id="" cols="5" rows="5" class="textBox" placeholder="Write Your Message" ></textarea>
                            <div class="buttons">
                                <input type="submit" value="Send Message" class="btn">
                            </div>
                        </form>
                </div>

                <div class="box">
                    <h2>How to Reach Us</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, voluptatum?</p>
                    <ul class="info">
                        <li>
                            <i class="fa-solid fa-location-dot"></i>
                            <div class="text">
                                <h3>Store Location</h3>
                                <p>343 Durban (Smith Street)</p>
                            </div>
                        </li>
                               <li>
                           <i class="fa-solid fa-mobile-screen"></i>
                            <div class="text">
                                <h3>Phone Number</h3>
                                <p>+012 234 6778 / +012 234 6777</p>
                            </div>
                        </li>
                               <li>
                          <i class="fa-solid fa-envelope"></i>
                            <div class="text">
                                <h3>Email Address</h3>
                                <p>info@gadgetstore.com</p>
                            </div>
                        </li>
                    </ul>
                    <div class="sci">
                        <span class="follow">Social Media:</span>
                        <ul class="sci">
                            <li><i class="fa-brands fa-facebook-f"></i></li>
                            <li><i class="fa-brands fa-instagram"></i></li>
                            <li><i class="fa-brands fa-twitter"></i></li>
                            <li><i class="fa-brands fa-linkedin-in"></i></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
     </section>
     <!-- end contact  -->

       <!-- footer -->
   <?php include("./includes/templates/public/footer.php") ?>

         <!-- scroll top -->
   <?php include("./includes/templates/public/scrollTop.php") ?>

      <!-- script  -->
   <script src="./assets/js/script.js"></script>
</body>
</html>