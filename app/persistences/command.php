<?php

function checkingStockForOrder(PDO $pdo, array $products): false|array{

    if (empty($products)) return false;
    $in = str_repeat('?,', count($products) - 1) . '?';
    $sql = "SELECT id, stock FROM products WHERE id IN ($in)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute($products);
    return $stmt->fetchAll();
}

