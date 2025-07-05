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
    <?php include("./includes/templates/public/header.php") ?>

    <!-- banner  -->
    <section class="banner">
        <div class="container">
            <div class="content">
                <div class="box b-img-1">
                    <div class="box-img"><img src="./assets/img/banner-image-3.png" alt=""></div>
                </div>
                <div class="box">
                    <h1>Shop</h1>
                </div>
                <div class="box b-img-1">
                    <div class="box-img"><img src="./assets/img/banner-image-1.png" alt=""></div>
                </div>
            </div>
        </div>
    </section>
    <!-- end banner  -->
     

    <!-- shop  -->
    <section class="section shop">
        <div class="container">
            <div class="filter">
                <ul class="list">
                    <span><i class="fa-solid fa-filter"></i></span>
                    <li><i class="fa-solid fa-table-cells-large"></i></li>
                    <li><i class="fa-solid fa-list"></i></li>
                    <p>Showing 01 - 09 of 30 Results</p>
                </ul>

                <div class="sort">
                    <p>Sort By:</p>
                    <select name="" id="" class="sort-by">
                        <option value="">Price:</option>
                        <option value="">Hight to Low</option>
                        <option value="">Low to hight</option>
                    </select>
                </div>
            </div>

            <?php
            include("./includes/db.php");

            // Basic settings 
            $itemsPerPage = 9;                          // how many products per page
            $page        = isset($_GET['page']) && $_GET['page'] > 0
                ? (int) $_GET['page'] : 1;   // current page or 1
            $offset      = ($page - 1) * $itemsPerPage; // row to start from

            // Total products for page count 
            $totalRowsRes = mysqli_query($conn, "SELECT COUNT(*) AS total FROM products");
            $totalRows    = (int) mysqli_fetch_assoc($totalRowsRes)['total'];
            $totalPages   = ceil($totalRows / $itemsPerPage);

            $sql     = "SELECT * FROM products ORDER BY id ASC LIMIT $itemsPerPage OFFSET $offset";
            $results = mysqli_query($conn, $sql);

            echo '<div class="wrapper">';
            while ($data = mysqli_fetch_array($results)) { ?>
                <div class="container-box">
                    <div class="card">
                        <div class="box-img">
                            <img src="./<?= $data['photo']; ?>" alt="" class="img-box">
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
                            <h3><?= $data['title']; ?></h3>
                            <p><?= $data['description']; ?></p>
                            <ul class="ratings">
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-regular fa-star"></i></li>
                            </ul>
                            <h3>R<?= $data['price']; ?></h3>

                            <form action="addToCart.php" class="form" method="post">
                                 <input type="hidden" name="product_id" value="<?php echo $data['id']; ?>">
                                <div class="buttons">
                                    <input type="submit" value="Add to Cart" name="cart" class="btn">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            <?php }
            echo '</div>';

            if ($totalPages > 1): ?>
                <ul class="pagination">
                    <!-- Prev -->
                    <?php if ($page > 1): ?>
                        <li><a href="?page=<?= $page - 1; ?>">‹ Prev</a></li>
                    <?php endif; ?>

                    <!-- Page numbers (max 7 links: current ±3) -->
                    <?php
                    $start = max(1, $page - 3);
                    $end   = min($totalPages, $page + 3);

                    for ($i = $start; $i <= $end; $i++):
                    ?>
                        <li class="<?= $i == $page ? 'active' : ''; ?>">
                            <a href="?page=<?= $i; ?>"><?= $i; ?></a>
                        </li>
                    <?php endfor; ?>

                    <!-- Next -->
                    <?php if ($page < $totalPages): ?>
                        <li><a href="?page=<?= $page + 1; ?>">Next ›</a></li>
                    <?php endif; ?>
                </ul>
            <?php endif; ?>

        </div>
    </section>
    <!--end shop  -->

       <!-- footer -->
   <?php include("./includes/templates/public/footer.php") ?>

         <!-- scroll top -->
   <?php include("./includes/templates/public/scrollTop.php") ?>

      <!-- js  -->
    <script src="./assets/js/script.js"></script>
</body>

</html>