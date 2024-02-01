<?php

function selectAllProduct (PDO $pdo){
    $querySelectAllProduct = "SELECT name, description, path_img FROM products";
    $stmt = $pdo->query($querySelectAllProduct);
    $result =  $stmt ->fetchAll();
    return $result;
}