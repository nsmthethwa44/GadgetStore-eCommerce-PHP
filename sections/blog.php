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

]
?>

<section class="blog section">
    <div class="container">
        <div class="title-filter">
            <h3>Recent Blog</h3>
            <a href="#" class="more-items">See More <i class="fa-solid fa-arrow-right-long"></i></a>
        </div>

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
    </div>
</section>