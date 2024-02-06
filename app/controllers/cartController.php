<?php
require_once "../app/persistences/productData.php";
require_once "../app/persistences/cart.php";

try {
    initCart();
    $_SESSION["cart"] = fakeCart($db, 1);
    $_SESSION["totalCart"] = totalCart($db, $_SESSION["cart"]);
    $productsCart = getAllProducts($db);
} catch (Exception $e) {
    echo 'Exception reçue : ',  $e->getMessage(), "\n";
}

require_once "../ressources/views/cart/cart.tpl.php";
