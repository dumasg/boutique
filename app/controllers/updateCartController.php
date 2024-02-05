<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $test = [];
    foreach ($_POST as $key => $product){
        $test[] = [
            "id" => explode("=",$key)[1],
            'qte' => $product
        ];
    }

    updateCart($test);

    header("Location: ?action=cart");
    exit();
}

function updateCart (array $dataArticle){


    foreach ($_SESSION['cart'] as &$product){
        foreach ($dataArticle as $updater){
            if ($product['id'] == $updater['id']){
                $product['qte'] = (int)$updater['qte'];
            }
        }

    }
}