<?php
session_start();
require './includes/db.php';
?>

<?php
$blogs = [
    [
        "id" => "1",
        "imgUrl" => "assets/img/blog-1.png"
    ],
    [
        "id" => "2",
        "imgUrl" => "assets/img/blog-2.png"
    ],
    [
        "id" => "3",
        "imgUrl" => "assets/img/blog-3.png"
    ],
    [
        "id" => "4",
        "imgUrl" => "assets/img/blog-4.png"
    ],
        [
        "id" => "5",
        "imgUrl" => "assets/img/blog-5.jpg"
    ],
    [
        "id" => "6",
        "imgUrl" => "assets/img/blog-6.jpg"
    ],
    [
        "id" => "7",
        "imgUrl" => "assets/img/blog-7.jpg"
    ],
    [
        "id" => "8",
        "imgUrl" => "assets/img/blog-8.jpg"
    ],
        [
        "id" => "9",
        "imgUrl" => "assets/img/blog-9.jpg"
    ],
    [
        "id" => "10",
        "imgUrl" => "assets/img/blog-10.jpg"
    ],
    [
        "id" => "11",
        "imgUrl" => "assets/img/blog-11.jpg"
    ],
    [
        "id" => "12",
        "imgUrl" => "assets/img/blog-12.jpg"
    ],

]
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
                    <h1>Blog</h1>
                </div>
                <div class="box b-img-1"><div class="box-img"><img src="./assets/img/banner-image-1.png" alt=""></div></div>
            </div>
        </div>
    </section>
    <!-- end banner  -->

    <!-- blog  -->
     <section class="blog section">
    <div class="container">
        <div class="content">
            <?php foreach($blogs as $blog) : ?>
            <div class="box">
                    <div class="box-img"><img src="<?php echo $blog["imgUrl"] ?>" alt="" class="img-box"></div>
                    <div class="text">
                        <span>23 April 2025</span>
                        <h3>Lorem ipsum dolor sit amet.</h3>
                        <ul>
                            <li><img src="./assets/img/user.jpg" alt=""> By <span>Admin</span></li>
                            <li><i class="fa-regular fa-comments"></i>Comments</li>
                            <li><i class="fa-regular fa-eye"></i>Views</li>
                        </ul>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vitae, inventore.</p>
                        <a href="#" class="read-more">Read More <i class="fa-solid fa-arrow-right-long"></i></a>
                    </div>
                </div>
            <?php endforeach; ?>
            
        </div>

        <ul class="pagination">
            <li  class="active"><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">Next</a></li>
        </ul>
    </div>
</section>
     <!-- end blog  -->

        <!-- footer -->
   <?php include("./includes/templates/public/footer.php") ?>

         <!-- scroll top -->
   <?php include("./includes/templates/public/scrollTop.php") ?>

      <!-- script  -->
   <script src="./assets/js/script.js"></script>
    
</body>
</html>