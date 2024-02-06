<?php
echo 'cart.php';
function initCart()
{
    session_start();
    if (!isset($_SESSION['cart'])) { //on vérifie l'existance du panier, sinon on le crée
        $_SESSION['cart'] = []; //initialisation du panier
    }
}

//fonction "fakeCart" avec les données fictives du panier
function fakeCart()
{
    $_SESSION['cart'] = [
        0=>[
            'idProduct' => 1,
            'quantity' => 5,
        ],
        1=>[
            'idProduct' => 2,
            'quantity' => 3,
        ],
    ];
}

function totalCart($pdo)
{
    $_SESSION['cart'] = [ //tableau avec le total à afficher dans le header

    ];
}

