<section class="recommended section">
    <div class="container">
        <div class="title-filter">
            <h3>Recommended Products</h3>
             <a href="" class="more-items">See More <i class="fa-solid fa-arrow-right-long"></i></a>
        </div>

              <div class="wrapper">
                    <?php 
                    include("./includes/db.php");
                    $sql = "SELECT * FROM products  ORDER BY id ASC LIMIT 4, 6";
                    $results = mysqli_query($conn, $sql);

                    while($data = mysqli_fetch_array($results)){
                        ?>
                            <div class="container-box">
                               <div class="card">
                                 <div class="box-img">
                                    <img src="./<?php echo $data["photo"];?>" alt="" class="img-box">
                                    <ul class="more">
                                      <li>
                                        <form action="addToWishlist.php" class="form" method="post">
                                            <input type="hidden" name="product_id" value="<?php echo $data['id']; ?>">
                                           <button type="submit" name="wishlist" class="btn"><i class="fa-regular fa-heart"></i></button>
                                        </form>
                                        </li>
                                        <li><button class="view-btn btn" data-id="<?= $data['id']; ?>"><i class="fa-regular fa-eye"></i></button></li>
                                        <li><i class="fa-solid fa-repeat"></i></li>
                                    </ul>
                                </div>
                                <div class="text">
                                    <h3><?php echo $data["title"] ?></h3>
                                    <p><?php echo $data["description"] ?></p>
                                    <ul class="ratings">
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-regular fa-star"></i></li>
                                    </ul>
                                    <h3>R<?php echo $data["price"] ?></h3>
                                    <form action="addToCart.php" class="form" method="post">
                                         <input type="hidden" name="product_id" value="<?php echo $data['id']; ?>">
                                        <div class="buttons">
                                            <input type="submit" value="Add to Cart" name="cart" class="btn">
                                        </div>
                                    </form>
                                </div>
                               </div>
                            </div>
                        <?php } ?>
                </div>
    </div>
</section>