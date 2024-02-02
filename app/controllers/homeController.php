<?php
require_once "../app/persistences/productData.php";

try {
    $products = getAllProducts($db);
} catch (Exception $e) {
    echo 'Exception reçue : ',  $e->getMessage(), "\n";
}

require_once "../ressources/views/home.tpl.php";
