<?php
function getProduct(PDO $pdo, $id)
{
    $query = "SELECT *
              FROM products
              WHERE id = " . $id;
    return $pdo->query($query)->fetch(PDO::FETCH_ASSOC);
}

function getProductStock(PDO $pdo, $prodIdList)
{
    $idListString = '(' . implode(",", $prodIdList) . ')';
    $query = "SELECT id, stock
              FROM products
              WHERE id IN " . $idListString;
    return $pdo->query($query)->fetchAll(PDO::FETCH_ASSOC);
}

function updateProductStock(PDO $pdo, $cartList)
{
    $query="UPDATE products
SET stock = '' WHERE id=1;" ;


    $idListString = '(' . implode(",", $prodIdList) . ')';
    $query = "SELECT id, stock
              FROM products
              WHERE id IN " . $idListString;
    return $pdo->query($query)->fetchAll(PDO::FETCH_ASSOC);
}

function getAllProducts(PDO $pdo)
{
    $query = "SELECT id, name, path_img
                FROM products";
    /* Returns an array of product items, so use fetchAll : */
    return $pdo->query($query)->fetchAll(PDO::FETCH_ASSOC);
}

function getLastProducts(PDO $pdo, $number)
{
    $query = "SELECT id, name, path_img
                FROM products
                ORDER BY  id DESC LIMIT $number ;";
    /* Returns an array of product items, so use fetchAll : */
    return $pdo->query($query)->fetchAll(PDO::FETCH_ASSOC);
}

function getCartProducts(PDO $pdo, $prodIdList)
{
    if (isset($prodIdList)) {
        $idListString = '(' . implode(",", $prodIdList) . ')';

        $query = "SELECT id, name, path_img, price_ttc
                FROM products
                WHERE id IN $idListString;";

        /* Returns an array of product items, so use fetchAll : */
        return $pdo->query($query)->fetchAll(PDO::FETCH_ASSOC);
    } else {
        return null;
    }
}
