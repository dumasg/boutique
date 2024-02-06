<?php
require '../app/persistences/shopData.php' ;
require '../app/persistences/cart.php';

// initCart
initCart();
//resetCart();
//================================= REMOVE THIS LINE AFTER 'add product to cart' IS IMPLEMENTED
//fakeCart();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $productId = filter_input(INPUT_POST, 'productId', FILTER_VALIDATE_INT);
    $deleteCart = filter_input(INPUT_POST, 'deleteCart', FILTER_VALIDATE_BOOL, FILTER_REQUIRE_ARRAY);
    if (isset($productId)) {
        addProductCart($productId);
    } elseif (isset($deleteCart)) {
        deleteProductCart($deleteCart);
    } else {
        $newCart = filter_input(INPUT_POST, 'newCart',
            FILTER_VALIDATE_INT,
            FILTER_REQUIRE_ARRAY);
        updateProductCart($newCart);
    }
}

// $cartList contains a list of : (id => qty) :
$cartList = $_SESSION['cart'] ;

$ids = array_keys($cartList);
$products = getCartProducts($pdo, $ids);
$cartTotal = totalCart($products, $cartList); // array : total(€), nbProducts

// Display cart : will use the contents of :
// - $cartList (id => qty)
// - $products (id, name, path_img, price_ttc)

require '../ressources/views/cart/showCart.tpl.php';

