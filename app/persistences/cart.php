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