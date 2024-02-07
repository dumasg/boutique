<?php

try {
    $products = getProduct($pdo, filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT));
} catch (Exception $e) {
    echo 'Exception reçue : ',  $e->getMessage(), "\n";
}

require_once "../ressources/views/product/show.tpl.php";