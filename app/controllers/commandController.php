<?php

$arrayID = idProducts();
var_dump($arrayID);

$arrayStock = checkingStockForOrder($pdo, $arrayID);

if (!isset($_GET['statut'])) {
    if (checkingStock($arrayStock)) {
        $idLastOrder = nbreOrder($pdo);
        creationOrder($pdo, $idLastOrder);
        creationAssociationOrderProduct($pdo, $idLastOrder);
        echo "je fais la commande le stock est bon";
    } else {
        header("Location: ?action=command&statut=outstock");
        exit();
    }
}


function idProducts()
{
    $array = [];
    foreach ($_SESSION['cart'] as $product) {
        array_push($array, (int)$product['id']);
    }
    return $array;
}

function checkingStock(array $arrayStock)
{
    foreach ($arrayStock as $product) {
        if ($product['stock'] <= 0) {
            return false;
        }
    }
    return true;
}

function creationOrder(PDO $pdo, $idLastOrder)
{
    $resultOrder = creationOrderInBDD($pdo, $idLastOrder);
    return $resultOrder;
}

function nbreOrder($pdo)
{
    $nbreOfOrder = callForNbreOrder($pdo);
    return $nbreOfOrder + 1;
}

function creationAssociationOrderProduct(PDO $pdo, $idLastOrder)
{
    foreach ($_SESSION['cart'] as $product){
        creationBDDAssoOrderProduct($pdo, $idLastOrder, $product['id'], $product['qte']);
    }
    return true;
}

require "../ressources/views/command.tpl.php";