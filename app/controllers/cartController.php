<?php
require_once "../app/persistences/productData.php";
require_once "../app/persistences/cart.php";

try {
    initCart();

    // $_SESSION["cart"] = null;
    // $_SESSION["cart"] = fakeCart($db, 1);
    $productsCart = getAllProducts($db);
    if (isset($_GET["id"]) && isset($_POST["quantity"])) {
        addProductCart($_GET["id"], $_POST["quantity"]);
    }
    // updateProductCart($_SESSION["cart"], $_POST["quantity"]);
    totalCart($db);
} catch (Exception $e) {
    echo 'Exception reçue : ',  $e->getMessage(), "\n";
}

var_dump($_SESSION["cart"]) . "<br>";
var_dump($_SESSION["totalCart"]);

require_once "../ressources/views/cart/cart.tpl.php";
