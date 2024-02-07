<?php
global $pdo;
global $productsId;

//afficher la liste des produits

function productList($pdo)
{
    $listProduct = "SELECT name, path_img, id
        FROM products
        ORDER BY 'name' asc";
    $resultListProduct = $pdo->query($listProduct);
    return $resultListProduct->fetchAll(PDO::FETCH_ASSOC);
}

//afficher un produit
function getProduct(PDO $pdo, $id)
{
    $query = "SELECT *
              FROM products
              WHERE id = $id" ;
    return $pdo->query($query)->fetch(PDO::FETCH_ASSOC);
}