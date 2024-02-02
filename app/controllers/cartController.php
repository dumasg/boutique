<?php
require_once "../app/persistences/cart.php";

try {
    $products = fakeCart($db);
    $_SESSION["cart"] = totalCart($products);
} catch (Exception $e) {
    echo 'Exception reçue : ',  $e->getMessage(), "\n";
}

require_once "../ressources/views/cart/index.tpl.php";
