<?php
require '../app/persistences/shopData.php' ;
require '../app/persistences/cart.php';

// initCart
initCart();
//================================= REMOVE THIS LINE AFTER 'add product to cart' IS IMPLEMENTED
fakeCart();

$cartList = $_SESSION['cart'] ;
// $cartList contains a list of : (id => qty)

$ids = array_keys($cartList);
$products = getCartProducts($pdo, $ids);

// $totals = productTotalsCart(); // ===================== CONTINUER ICI
// returns array of (id, name, path_img, price_ttc)

// Display cart : will use the contents of :
// - $cartList (id => qty)
// - $products (id, name, path_img, price_ttc)

require '../ressources/views/cart/index.php';

