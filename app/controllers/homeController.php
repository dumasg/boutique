<?php


try {
    $products = getAllProducts($pdo);
} catch (Exception $e) {
    echo 'Exception reçue : ',  $e->getMessage(), "\n";
}

require_once "../ressources/views/home.tpl.php";