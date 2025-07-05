<?php
session_start();
require 'includes/db.php';

$cart = $_SESSION['cart'] ?? [];

$product_ids = array_keys($cart);

$items = [];
$total = 0;

if (!empty($product_ids)) {
    // Sanitize IDs and build query
    $ids = implode(',', array_map('intval', $product_ids));
    $sql = "SELECT * FROM products WHERE id IN ($ids)";
    $result = mysqli_query($conn, $sql);

    // ✅ Add error check
    if (!$result) {
        die("Query failed: " . mysqli_error($conn));
    }

    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        $id = $row['id'];

        // ✅ Check if quantity is set in cart to avoid undefined index
        $quantity = $cart[$id] ?? 0;

        $row['quantity'] = $quantity;
        $row['subtotal'] = $quantity * $row['price'];

        $items[] = $row;
        $total += $row['subtotal'];
    }
}
?>


<!DOCTYPE html>
<html>
<head>
 <title>Gadget Store System</title>
     <link rel="stylesheet" href="./assets/css/all.css">
      <link rel="stylesheet" href="./assets/css/all.min.css">
      <link rel="stylesheet" href="./assets/css/style.css">

<!-- <style>
body { font-family:sans-serif; margin:2rem; }
table { width:100%; border-collapse:collapse; margin-bottom:1rem }
td, th { border:1px solid #ccc; padding:10px; text-align:left; }
.total { font-weight:bold; font-size:1.2rem; }
</style> -->
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
                    <h1>Shopping Cart</h1>
                </div>
                <div class="box b-img-1"><div class="box-img"><img src="./assets/img/banner-image-1.png" alt=""></div></div>
            </div>
        </div>
    </section>
    <!-- end banner  -->

    <!-- cart  -->
     <section class="section cart">
        <div class="container">

            <div class="table-container">
                <div class="table-content">
                <?php if (empty($items)): ?>
                    <p>Your cart is empty. <a href="index.php">Go back to shop</a></p>
                <?php else: ?>
                    <table>
                        <thead>
                            <tr>
                                <th>Photo</th>
                                <th>Product</th>
                                <th>Qty</th>
                                <th>Price</th>
                                <th>Subtotal</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        
                        <?php foreach ($items as $item): ?>
                            <tbody>
                            <tr>
                            <td><img src="<?php echo $item["photo"]?>" alt="" class="image"></td>
                            <td><?= htmlspecialchars($item['title']); ?></td>
                            <td><?= $item['quantity']; ?></td>
                            <td>R<?= number_format($item['price'], 2); ?></td>
                            <td>R<?= number_format($item['subtotal'], 2); ?></td>
                            <td>
                                <a href="removeFromCart.php?id=<?= $item['id']; ?>">❌</a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                        <tr>
                            <td colspan="3" class="total">Total</td>
                            <td colspan="2" class="total">R<?= number_format($total, 2); ?></td>
                        </tr>
                            </tbody>
                        
                    </table>
                <?php endif; ?>
                </div>

                <div class="buttons">
                    <a href="index.php" class="btn"><i class="fa-solid fa-left-long"></i>Continue Shopping</a>
                    <a href="account.php" class="btn">Proceed To Checkout<i class="fa-solid fa-right-long"></i></a>
                </div>
            </div>
        </div>
     </section>
     <!-- end cart  -->

   <!-- footer -->
   <?php include("./includes/templates/public/footer.php") ?>

         <!-- scroll top -->
   <?php include("./includes/templates/public/scrollTop.php") ?>

      <!-- script  -->
   <script src="./assets/js/script.js"></script>

</body>
</html>
