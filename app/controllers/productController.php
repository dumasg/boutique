<?php
require_once "../app/persistences/productData.php";

try {
    $product = getProduct($db, $_GET["id"]);
} catch (Exception $e) {
    echo 'Exception reçue : ',  $e->getMessage(), "\n";
}

require_once "../ressources/views/product/show.tpl.php";
