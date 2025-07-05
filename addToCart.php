<?php
session_start();
$product_id = $_POST['product_id'] ?? null;

if (!$product_id) {
    header('Location: index.php');
    exit;
}

// Initialize cart if empty
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// If already added, increase quantity
if (isset($_SESSION['cart'][$product_id])) {
    $_SESSION['cart'][$product_id]++;
} else {
    $_SESSION['cart'][$product_id] = 1;
}

header('Location: cart.php');
exit;
?>