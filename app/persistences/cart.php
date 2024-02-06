<?php
function initCart()
{
    session_start();
    $_SESSION['cart'] = null;
    // permettra d'utiliser : $_SESSION[‘cart’]
}

function fakeCart()
{
    $_SESSION['cart'] = [
        1 => 1,
        3 => 1,
        5 => 2,
        9 => 1
    ] ;
}

function totalCart($products, $cartList)
{
    $total = 0;
    foreach ($products as $product) {
           $total += $product['price_ttc'] * $cartList[$product['id']];
    }
    return [$total, sizeof($products)];
}