<?php
function initCart()
{
    session_start();
    if (!isset($_SESSION['cart']) || sizeof($_SESSION['cart'])==0) {
        $_SESSION['cart'] = null;
    }
}

function resetCart()
{
    $_SESSION['cart'] = null;
}

function fakeCart()
{
    $_SESSION['cart'] = [
        1 => 1,
        3 => 1,
        5 => 2,
        9 => 1
    ];
}

function totalCart($products, $cartList)
{
    $total = 0;
    foreach ($products as $product) {
        $total += $product['price_ttc'] * $cartList[$product['id']];
    }
    return [$total, sizeof($products)];
}

function addProductCart($id)
{
    if (isset($_SESSION['cart'][$id])) {
        // on a déjà ce produit dans le panier : on augmente juste sa quantité
        $_SESSION['cart'][$id]++;
    } else {
        $_SESSION['cart'][$id] = 1;
    }
}

function updateProductCart($newCart)
{
    $_SESSION['cart'] = $newCart;
    foreach ($newCart as $id => $quantity) {
        if ($quantity == 0) {
            unset($_SESSION['cart'][$id]);
        }
    }
}

function deleteProductCart($deleteCart)
{
    foreach ($deleteCart as $id => $deleteBool) {
        if ($deleteBool) {
            unset($_SESSION['cart'][$id]);
        }
    }
}