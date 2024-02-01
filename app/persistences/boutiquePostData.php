<?php

function selectAllProduct (PDO $pdo){
    $querySelectAllProduct = "SELECT name, description, path_img, price_ttc FROM products";
    $stmt = $pdo->query($querySelectAllProduct);
    $result =  $stmt ->fetchAll();
    return $result;
}