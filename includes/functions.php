<?php
function getCartCount() {
    $cart = $_SESSION['cart'] ?? [];
    return array_sum($cart);
}
?>

<?php
function getWishlistCount() {
    $wishlist = $_SESSION['wishlist'] ?? [];
    return array_sum($wishlist);
}
?>

