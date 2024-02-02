<?php

function selectAllProduct (PDO $pdo){
    $querySelectAllProduct = "SELECT id, name, description, path_img, price_ttc FROM products";
    $stmt = $pdo->query($querySelectAllProduct);
    $result =  $stmt ->fetchAll();
    return $result;
}

function selectArticle(PDO $pdo, $idArticle){
    $querySelectArticle = "SELECT name, description, path_img, price_ttc, price_ht
    FROM products
    WHERE id = :id";
    PDOStatement : $stmt = $pdo->prepare($querySelectArticle);
    $stmt->execute(["id" => $idArticle]);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}