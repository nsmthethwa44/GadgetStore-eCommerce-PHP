<section class="section categories">
    <div class="container swiper category">
        <div class="content swiper-wrapper">
              <?php 
                    include("./includes/db.php");
                    $sql = "SELECT * FROM categories";
                    $results = mysqli_query($conn, $sql);

                    while($data = mysqli_fetch_array($results)){
                        ?>
                        <div class="box swiper-slide">
                            <div class="box-img"><img src="./<?php echo $data['photo']; ?>" alt="" class="img-box"></div>
                                <h3><?php echo $data["category"]?></h3>
                                <p>45 Products</p>
                        </div>
                <?php } ?>
        </div>
    </div>
</section>