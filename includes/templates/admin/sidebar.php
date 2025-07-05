<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
   <div class="sidebar">
    <div class="content">
        <div class="logo"><a href="index.php"><h2>Gadget<span>Store</span></h2></a></div>
        <div class="close-sidebar"><i class="fa-solid fa-angle-left"></i></div>

  <?php $currentPage = basename($_SERVER['PHP_SELF']); ?>

<div class="navbar">
    <ul class="nav">
        <li>
            <a href="index.php" class="<?php echo ($currentPage === 'index.php') ? 'active' : ''; ?>">
                <i class="fa-solid fa-layer-group"></i> Dashboard
            </a>
        </li>
        <li>
            <a href="productsManagement.php" class="<?php echo ($currentPage === 'productsManagement.php') ? 'active' : ''; ?>">
                <i class="fa-solid fa-cart-shopping"></i> Product Management
            </a>
        </li>
        <li>
            <a href="category.php" class="<?php echo ($currentPage === 'category.php') ? 'active' : ''; ?>">
                <i class="fa-solid fa-file"></i> Category Management
            </a>
        </li>
        <li>
            <a href="#" class="<?php echo ($currentPage === 'sales.php') ? 'active' : ''; ?>">
                <i class="fa-solid fa-money-bill-1-wave"></i> Sales Management
            </a>
        </li>
        <li>
            <a href="#" class="<?php echo ($currentPage === 'storein.php') ? 'active' : ''; ?>">
                <i class="fa-solid fa-arrow-up-wide-short"></i> Store In Management
            </a>
        </li>
        <li>
            <a href="#" class="<?php echo ($currentPage === 'users.php') ? 'active' : ''; ?>">
                <i class="fa-solid fa-user"></i> User Management
            </a>
        </li>
        <li>
            <a href="logout.php" class="<?php echo ($currentPage === 'logout.php') ? 'active' : ''; ?>">
                <i class="fa-solid fa-right-to-bracket"></i> Logout
            </a>
        </li>
    </ul>
</div>

    </div>
   </div>
</body>
</html>