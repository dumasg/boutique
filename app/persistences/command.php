<?php

function productsSoldOut($pdo, $cartList)
{
    $ids = array_keys($cartList);
    $stockArray = getProductStock($pdo, $ids);
    foreach ($stockArray as $stock) {
        if ($stock['stock'] == 0) {
            $notInStock[]=$stock['id'];
        }
    }
    return $notInStock;
}

function processOrder(PDO $pdo, $cartList)
{
    // reduce stock of each product ordered
    updateStock($pdo, $cartList);

    // create item in 'order' table : get its 'id' = my_id

    // create items in 'products_orders' table :
    // foreach product :
    //      orders_id = my_id
    //      products_id = my product id

}

function updateStock(PDO $pdo, $cartList)
{

}
