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
                    <h1>About US</h1>
                </div>
                <div class="box b-img-1"><div class="box-img"><img src="./assets/img/banner-image-1.png" alt=""></div></div>
            </div>
        </div>
    </section>
    <!-- end banner  -->

    <!-- about content  -->
     <section class="section about">
        <div class="container">
            <div class="container-box">
                <div class="box">
                    <div class="text-box">
                        <h2>Discover Our Story</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit
                            . Dolore iste similique temporibus facere, vero
                             dicta ratione eligendi harum corrupti delectus. 
                             Distinctio at repellat nobis voluptatum!</p>

                             <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odit fuga enim voluptates facere error nam, unde aliquam corporis dolore. Illum, provident hic distinctio nihil maiores inventore similique necessitatibus 
                                sed natus commodi reprehenderit quo debitis dolorem
                                 quis corrupti assumenda unde qui?</p>
                    </div>

                    <div class="box-img">
                        <img src="./assets/img/about-.jpg" alt="" class="img-box">
                    </div>
                </div>

                 <div class="box">
                     <div class="box-img">
                        <img src="./assets/img/about-2.jpg" alt="" class="img-box">
                    </div>
                    <div class="text-box">
                        <h2>Our Mission and Values</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit
                            . Dolore iste similique temporibus facere, vero
                             dicta ratione eligendi harum corrupti delectus. 
                             Distinctio at repellat nobis voluptatum!</p>

                             <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odit fuga enim voluptates facere error nam, unde aliquam corporis dolore. Illum, provident hic distinctio nihil maiores inventore similique necessitatibus 
                                sed natus commodi reprehenderit quo debitis dolorem
                                 quis corrupti assumenda unde qui?</p>

                                 <ul>
                                    <li>- Quality Products</li>
                                    <li>- Lorem, ipsum dolor.</li>
                                    <li>- Innovation</li>
                                    <li>- Sustainability</li>
                                    <li>- Lorem ipsum dolor sit amet.</li>
                                 </ul>
                    </div>
                </div>


                 <div class="box">
                    <div class="text-box">
                        <h2>Our Mission and Values</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit
                            . Dolore iste similique temporibus facere, vero
                             dicta ratione eligendi harum corrupti delectus. 
                             Distinctio at repellat nobis voluptatum!</p>

                             <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odit fuga enim voluptates facere error nam, unde aliquam corporis dolore. Illum, provident hic distinctio nihil maiores inventore similique necessitatibus 
                                sed natus commodi reprehenderit quo debitis dolorem
                                 quis corrupti assumenda unde qui?</p>

                                  <ul>
                                    <li>- Quality Products</li>
                                    <li>- Lorem, ipsum dolor.</li>
                                    <li>- Innovation</li>
                                    <li>- Sustainability</li>
                                    <li>- Lorem ipsum dolor sit amet.</li>
                                 </ul>
                    </div>

                    <div class="box-img">
                        <img src="./assets/img/about-3.jpg" alt="" class="img-box">
                    </div>
                </div>
                
            </div>
        </div>
     </section>
    <!-- end about content  -->

    <!-- Why Choose Us -->
     <section class="why-choose-us">
        <div class="container">
            <div class="sec-title">
                <h2>Why Choose Us</h2>
            </div>

            <div class="content">
                <div class="box">
                    <i class="fa-solid fa-gear"></i>
                    <h3>Quality Assurance</h3>
                    <p>Lorem ipsum dolor sit amet consectetur. Pellentesque hendrerit phasellus quam massa. Vulputate eget duis.</p>
                </div>
                 <div class="box">
                    <i class="fa-solid fa-people-group"></i>
                    <h3>Lorem ipsum dolor sit.</h3>
                    <p>Lorem ipsum dolor sit amet consectetur. Pellentesque hendrerit phasellus quam massa. Vulputate eget duis.</p>
                </div>
                 <div class="box">
                    <i class="fa-solid fa-shop"></i>
                    <h3>Secure Shopping</h3>
                    <p>Lorem ipsum dolor sit amet consectetur. Pellentesque hendrerit phasellus quam massa. Vulputate eget duis.</p>
                </div>
                 <div class="box">
                    <i class="fa-solid fa-money-bills"></i>
                    <h3>Lorem, ipsum dolor.</h3>
                    <p>Lorem ipsum dolor sit amet consectetur. Pellentesque hendrerit phasellus quam massa. Vulputate eget duis.</p>
                </div>
            </div>
        </div>
     </section>
     <!-- end Why Choose Us -->

      <!-- Meet Our Team -->
       <section class="section team">
        <div class="container">
            <div class="sec-title">
                <h2>Meet Out Team</h2>
            </div>

            <div class="content">
                <div class="box">
                    <div class="box-img"><img src="./assets/img/team-1.jpg" alt="" class="img-box"></div>
                    <div class="text">
                        <h3>Bonnie Bennet</h3>
                        <span>Customer Support</span>
                        <p>Lorem ipsum dolor sit amet consectetur
                             adipisicing elit. Dolores reprehenderit 
                             praesentium, veniam optio rem ipsa?</p>
                    </div>
                </div>
                    <div class="box">
                    <div class="box-img"><img src="./assets/img/team-2.jpg" alt="" class="img-box"></div>
                    <div class="text">
                        <h3>Niklaus</h3>
                        <span>Founder/CEO</span>
                        <p>Lorem ipsum dolor sit amet consectetur
                             adipisicing elit. Dolores reprehenderit 
                             praesentium, veniam optio rem ipsa?</p>
                    </div>
                </div>
                    <div class="box">
                    <div class="box-img"><img src="./assets/img/team-3.jpg" alt="" class="img-box"></div>
                    <div class="text">
                        <h3>Elina Gilbert</h3>
                        <span>Marketing Specialist</span>
                        <p>Lorem ipsum dolor sit amet consectetur
                             adipisicing elit. Dolores reprehenderit 
                             praesentium, veniam optio rem ipsa?</p>
                    </div>
                </div>
                    <div class="box">
                    <div class="box-img"><img src="./assets/img/team-4.jpg" alt="" class="img-box"></div>
                    <div class="text">
                        <h3>Damon</h3>
                        <span>Logistics Coordinator</span>
                        <p>Lorem ipsum dolor sit amet consectetur
                             adipisicing elit. Dolores reprehenderit 
                             praesentium, veniam optio rem ipsa?</p>
                    </div>
                </div>

            </div>
        </div>
       </section>
       <!--end  Meet Our Team -->

       <!-- faqs  -->
        <section class="faq section">
            <div class="container">
                 <div class="sec-title">
                <h2>Frequently Asked Questions</h2>
            </div>

             <div class="faq-container">
                    <div class="faq-column">
                        <div class="faq-item">
                            <h3 class="faq-question">What is your return policy?<span class="icon"><i class="fa-solid fa-plus"></i></span></h3>
                            <p class="faq-answer">Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus consequatur magnam eos soluta asperiores reprehenderit deserunt ratione tenetur quas ducimus?</p>
                        </div>
                        <div class="faq-item">
                            <h3 class="faq-question">Do you offer international shipping?<span class="icon"><i class="fa-solid fa-plus"></i></span></h3>
                            <p class="faq-answer">Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus consequatur magnam eos soluta asperiores reprehenderit deserunt ratione tenetur quas ducimus?</p>
                        </div>
                        <div class="faq-item">
                            <h3 class="faq-question">What payment methods do you accept?<span class="icon"><i class="fa-solid fa-plus"></i></span></h3>
                            <p class="faq-answer">Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus consequatur magnam eos soluta asperiores reprehenderit deserunt ratione tenetur quas ducimus?</p>
                        </div>
                    </div>

                    <div class="faq-column">
                        <div class="faq-item">
                            <h3 class="faq-question">How can I contact customer support?<span class="icon"><i class="fa-solid fa-plus"></i></span></h3>
                            <p class="faq-answer">Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus consequatur magnam eos soluta asperiores reprehenderit deserunt ratione tenetur quas ducimus?</p>
                        </div>
                        <div class="faq-item">
                            <h3 class="faq-question">How can I track my order?<span class="icon"><i class="fa-solid fa-plus"></i></span></h3>
                            <p class="faq-answer">Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus consequatur magnam eos soluta asperiores reprehenderit deserunt ratione tenetur quas ducimus?</p>
                        </div>
                        <div class="faq-item">
                            <h3 class="faq-question">How do I apply a discount code to my order?<span class="icon"><i class="fa-solid fa-plus"></i></span></h3>
                            <p class="faq-answer">Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus consequatur magnam eos soluta asperiores reprehenderit deserunt ratione tenetur quas ducimus?</p>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- end faqs  -->

       <!-- marquee -->
   <div class="marq">
    <?php include("./sections/marquee.php") ?>
   </div>

         <!-- footer -->
   <?php include("./includes/templates/public/footer.php") ?>
   
      <!-- scroll top -->
   <?php include("./includes/templates/public/scrollTop.php") ?>

   <!-- script  -->
   <script src="./assets/js/script.js"></script>

</body>
</html>