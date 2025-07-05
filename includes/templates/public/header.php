<?php
require 'includes/db.php';
require 'includes/functions.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gadget Store</title>
</head>

<body>
    <header class="header frontend-header">
        <div class="top">
            <div class="container">
                <p>Welcome to Worldwide Electronic Store</p>

                <ul>
                    <li><i class="fa-solid fa-location-dot"></i>Store Locator</li>
                    <li><i class="fa-solid fa-truck"></i>Order Tracking</li>
                    <li><i class="fa-solid fa-question"></i>FAQs</li>
                </ul>
            </div>
        </div>

        <div class="container">
            <div class="divider"></div>
        </div>

        <div class="middle">
            <div class="container">
                <div class="m-top">
                    <div class="logo">
                        <a href="index.php">
                            <h2>Gadget<span>Store</span></h2>
                        </a>
                    </div>

                    <div class="input-search">
                        <input type="text" class="search" placeholder="Search item...">
                        <div class="buttons">
                            <button class="btn">Search</button>
                        </div>
                    </div>

                    <div class="user">
                        <a href="account.php"><i class="fa-regular fa-user"></i>Account</a>
                        <div class="icon"><a href="wishlist.php"><i class="fa-regular fa-heart"></i><span><?= getWishlistCount(); ?></span></a></div>
                        <div class="icon"><a href="cart.php"><i class="fa-solid fa-cart-plus"></i><span><?= getCartCount(); ?></span></a></div>
                    </div>
                </div>

                <div class="m-bottom">
                     <div class="input-search">
                        <input type="text" class="search" placeholder="Search item...">
                        <div class="buttons">
                            <button class="btn">Search</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="bottom">
            <div class="container">
                <p class="category">Browse All Categories</p>

                <div class="navbar">
                    <?php $currentPage = basename($_SERVER['PHP_SELF']); ?>

                    <ul class="nav">
                        <li><a href="index.php" class="<?php echo ($currentPage === 'index.php') ? 'active' : ''; ?>">Home</a></li>
                        <li><a href="about.php" class="<?php echo ($currentPage === 'about.php') ? 'active' : ''; ?>">About</a></li>
                        <li><a href="shop.php" class="<?php echo ($currentPage === 'shop.php') ? 'active' : ''; ?>">Shop</a></li>
                        <li><a href="blog.php" class="<?php echo ($currentPage === 'blog.php') ? 'active' : ''; ?>">Blog</a></li>
                        <li><a href="contact.php" class="<?php echo ($currentPage === 'contact.php') ? 'active' : ''; ?>">Contact Us</a></li>
                    </ul>

                    <div class="close-menu"><i class="fa-solid fa-xmark"></i></div>
                </div>

                <p class="sales">Sale R20 off Your First Order</p>

                <div class="open-menu"><i class="fa-solid fa-bars"></i></div>
            </div>
        </div>
    </header>
</body>

</html>