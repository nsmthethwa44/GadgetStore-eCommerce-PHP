<?php
session_start();
$product_id = $_POST['product_id'] ?? null;

if (!$product_id) {
    header('Location: index.php');
    exit;
}

// Initialize wishlist if empty
if (!isset($_SESSION['wishlist'])) {
    $_SESSION['wishlist'] = [];
}

// If already added, increase quantity
if (isset($_SESSION['wishlist'][$product_id])) {
    $_SESSION['wishlist'][$product_id]++;
} else {
    $_SESSION['wishlist'][$product_id] = 1;
}

header('Location: wishlist.php');
exit;
?>