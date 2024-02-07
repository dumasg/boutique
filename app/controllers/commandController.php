<?php
require '../app/persistences/shopData.php';
require '../app/persistences/cart.php';
require '../app/persistences/command.php';

// initCart
initCart();

// $cartList contains a list of : (id => qty) :
$cartList = $_SESSION['cart'];

// redundant test : if we reach this page, it means there is something in the cart !

if (isset($cartList)) {
    $ids = array_keys($cartList);
    $products = getCartProducts($pdo, $ids);
    $cartTotal = totalCart($products, $cartList); // array : total(€), nbProducts

    $notInStock = productsSoldOut($pdo, $cartList); // contains array of ids for which stock=0

    if (isset($notInStock)) {
        // Display CART with error message
        $errorMessage = "ATTENTION : certains produits ne sont plus en stock ! Veuillez changer les quantités.";
        require '../ressources/views/cart/showCart.tpl.php';

    } else {
        // Update stock, generate a command for the customer
        processOrder($pdo, $cartList,$notInStock);

        // Say thank you, ask to pay
        require '../ressources/views/cart/thankyou.tpl.php';


    }

}