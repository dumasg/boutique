<?php

function checkingStockForOrder(PDO $pdo, array $products): false|array
{

    if (empty($products)) return false;
    $in = str_repeat('?,', count($products) - 1) . '?';
    $sql = "SELECT id, stock FROM products WHERE id IN ($in)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute($products);
    return $stmt->fetchAll();
}

function creationOrderInBDD(PDO $pdo, int $idLastOrder): bool {
    $stringOrder = "cmd_".$idLastOrder."_Gerem";
    $queryCreationOrder = "
        INSERT INTO orders (number, date_delivery, customers_id)
        VALUES (?, '16-02-25',1)";
    PDOStatement : $stmt = $pdo->prepare($queryCreationOrder);
    $stmt ->execute([$stringOrder]);
    return true;
}

function callForNbreOrder(PDO $pdo): int|false
{
    $queryCallForNbreOrder = "SELECT id FROM orders ORDER BY id DESC LIMIT 1 ";
    $stmt = $pdo->query($queryCallForNbreOrder);
    $stmt->execute();
    foreach ($stmt->fetch(PDO::FETCH_ASSOC) as $row){
       $result = $row;
    }
    return $result;
}

function creationBDDAssoOrderProduct(PDO $pdo, int $idLastOrder, int $product_id, int $quantity){
    $queryAddOrderProduct = "
        INSERT INTO products_orders (orders_id, products_id, quantity) 
        VALUES (:order_id, :product_id, :quantity)";
    PDOStatement : $stmt = $pdo->prepare($queryAddOrderProduct);
    $stmt->execute(["order_id" => $idLastOrder, "product_id" => $product_id, "quantity" => $quantity]);
}