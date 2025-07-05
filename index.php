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
     <link rel="stylesheet" href="./assets/swiper-bundle.min.css">
     <link rel="stylesheet" href="./assets/css/all.css">
      <link rel="stylesheet" href="./assets/css/all.min.css">
      <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
   <!-- header  -->
   <?php include("./includes/templates/public/header.php")?>

<!-- hero  -->
   <?php include("./sections/hero.php") ?>

   <!-- categories  -->
   <?php include("./sections/categories.php") ?>

   <!-- featured products  -->
   <?php include("./sections/featured.php") ?>

   <!-- popular products  -->
   <?php include("./sections/popular.php") ?>

 <!-- cat  -->
   <?php include("./sections/cta.php") ?>

   <!-- recommended products -->
   <?php include("./sections/recommended.php") ?>

   <!-- marquee -->
   <?php include("./sections/marquee.php") ?>

   <!-- recent blog -->
   <?php include("./sections/blog.php") ?>

   <!-- recent blog -->
   <?php include("./sections/countDown.php") ?>

    <!-- subscribe -->
   <?php include("./sections/subscribe.php") ?>

      <!-- footer -->
   <?php include("./includes/templates/public/footer.php") ?>

   
      <!-- scroll top -->
   <?php include("./includes/templates/public/scrollTop.php") ?>

   <!-- js  -->
    <script src="./assets/swiper-bundle.min.js"></script>
    <script src="./assets/js/script.js"></script>

</body>
</html>