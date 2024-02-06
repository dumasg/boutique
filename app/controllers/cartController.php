<?php
require '../app/persistences/shopData.php' ;
require '../app/persistences/cart.php';

// initCart
initCart();
//================================= REMOVE THIS LINE AFTER 'add product to cart' IS IMPLEMENTED
//fakeCart();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $productId = filter_input(INPUT_POST, 'productId', FILTER_VALIDATE_INT);
    addProductCart($productId);
}

$cartList = $_SESSION['cart'] ;
// $cartList contains a list of : (id => qty)

$ids = array_keys($cartList);
$products = getCartProducts($pdo, $ids);
$cartTotal = totalCart($products, $cartList); // array : total(€), nbProducts

// Display cart : will use the contents of :
// - $cartList (id => qty)
// - $products (id, name, path_img, price_ttc)

require '../ressources/views/cart/showCart.tpl.php';

