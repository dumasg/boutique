<?php
function initCart()
{
    session_start();
//    if (!isset($_SESSION['cart'])) { //on vérifie l'existance du panier, sinon on le crée
//       ; //initialisation du panier
//    }
}

//fonction "fakeCart" avec les données fictives du panier
//fonction désactivée
function fakeCart()
{
//    $_SESSION['cart'] = [
//        0=>[
//            'idProduct' => 1,
//            'quantity' => 6,
//        ],
//        1=>[
//            'idProduct' => 2,
//            'quantity' => 3,
//        ],
//    ];
}

//fonction ajouter au panier
function addProductCart($productId, $selectQuantity)
{
    if (isset($_SESSION['cart'])){ //test si le panier est initialisé
        foreach ($_SESSION['cart'] as $value) {
            if ($productId === $value['id']) { //test si le produit existe
                $_SESSION['cart'][$selectQuantity][$productId] += $selectQuantity; //si oui ajouter la quantité du produit existant ======> a modifier ne fonctionne pas
            }else{ //sinon ajouter le produit au panier
                if ($productId === $value['id']){
                    $_SESSION['cart'][] = [
                        'id'=> $productId,
                        'quantity'=>$selectQuantity
                    ];
                }
            }
        }
    }else{
        $_SESSION['cart'][] = [
            'id'=> $productId,
            'quantity'=>$selectQuantity
        ];
    }
    var_dump($_SESSION['cart']);
}

