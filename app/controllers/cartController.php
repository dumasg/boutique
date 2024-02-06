<?php
global $pdo;
echo 'cartController';
require("../app/persistences/cartData.php");
require("../app/persistences/productsData.php");

initCart();
fakeCart();

$cart = [
//    0=>['id' => 3,
//        'name' => 0,
//        'price' => 0,
//        'quantity' => 0,
//        'totalPrice' => 0,
//    ],
//    1=>['id' => 2,
//        'name' => 0,
//        'price' => 0,
//        'quantity' => 0,
//        'totalPrice' => 0,
//    ]
];

foreach ($_SESSION['cart'] as $cartLine){
    $productId = $cartLine['idProduct'];
    $product = getProduct($pdo, $productId);
    $cart[]=[
        'id' => $productId,
        'name' => $product['name'],
        'price' => $product['price_ttc'],
        'quantity' => $cartLine['quantity'],
        'totalPrice' => ($product['price_ttc'] * $cartLine['quantity']),
    ];
}

require("../ressources/views/cart/cart.tpl.php");