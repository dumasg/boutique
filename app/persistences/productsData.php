<?php
global $pdo;
global $productsId;

//afficher la liste des produits

function productList($pdo)
{
    $listProduct = "SELECT name, description
        FROM products
        ORDER BY name asc";
    $resultListProduct = $pdo->query($listProduct);
    return $resultListProduct->fetchAll(PDO::FETCH_ASSOC);
}

//afficher un produit
function selectedProduct($pdo,$productsId)
{
    $selectProduct = "SELECT *
        FROM products
        INNER JOIN tva on products.id = tva.id
        WHERE products.id = $productsId";
    $resultSelectProduct = $pdo->query($selectProduct);
    return $resultSelectProduct->fetchAll(PDO::FETCH_ASSOC);
}
