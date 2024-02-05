<?php

$arrayID = idProducts();
var_dump($arrayID);

$arrayStock = checkingStockForOrder($pdo, $arrayID);

if (stockGood($arrayStock)){
    echo "je fais la commande le stock est bon";
}else{
    echo "problème de stock";
}


function idProducts(){
    $array = [];
    foreach ($_SESSION['cart'] as $product){
        array_push($array, (int)$product['id']);
    }
    return $array;
}

function stockGood(array $arrayStock){
    foreach ($arrayStock as $product){
        if($product['stock'] <= 0){
            return false;
        }
    }
    return true;
}
