<?php

function selectAllProduct (PDO $pdo){
    $querySelectAllProduct = "SELECT id, name, description, path_img, price_ttc FROM products";
    $stmt = $pdo->query($querySelectAllProduct);
    $result =  $stmt ->fetchAll();
    return $result;
}

function selectArticle(PDO $pdo, $idArticle){
    $querySelectArticle = "SELECT id, name, description, path_img, price_ttc, price_ht
    FROM products
    WHERE id = :id";
    PDOStatement : $stmt = $pdo->prepare($querySelectArticle);
    $stmt->execute(["id" => $idArticle]);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}

function cartAllProduct(PDO $pdo, $idProduct){
    $queryCallDataProduct = "
    SELECT id, name, path_img, price_ttc
    FROM products
    WHERE id =:id";
    PDOStatement : $stmt = $pdo->prepare($queryCallDataProduct);
    $stmt->execute(['id' => $idProduct]);
    $result = array();
    foreach ($stmt as $row){
        $result = [
            "id" => $row['id'],
            "name" => $row['name'],
            "path_img" => $row['path_img'],
            "price_ttc" => $row['price_ttc']
        ];
    }
    //$result = $stmt->fetchAll();
    return $result;
}