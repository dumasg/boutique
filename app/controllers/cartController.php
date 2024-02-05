<?php


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $args = array(
        "id" => FILTER_SANITIZE_NUMBER_INT,
        "qte" => FILTER_SANITIZE_NUMBER_INT
    );
    $dataArticle = filter_input_array(INPUT_POST, $args);

    if (!isset($_SESSION['cart'])){
        addOnCart($dataArticle);
    }else{
        $testing = checkingDoublon($dataArticle);
        if ($testing){
            echo "j'ai passé le test". PHP_EOL;
            mergeDoublon($dataArticle);
        }else{
            echo "j'ai pas passé le test". PHP_EOL;
            addOnCart($dataArticle);
        }
    }

    header("Location: /?action=product&id=" . $dataArticle['id']);
    exit();
} else {

    if (isset($_SESSION['cart'])) {
        $cart = array();
        foreach ($_SESSION['cart'] as $key => $product) {
            $cart[] = cartAllProduct($pdo, $product['id']);
            $total = $cart[$key]['price_ttc'] * (int)$product['qte'];
            $cart[$key] += [
                "qte" => $product['qte'],
                "total" => $total
            ];
        }
    }
    require("../ressources/views/cart/cart.tpl.php");
}

function addOnCart(array $dataArticle){
    $_SESSION['cart'][] = [
        "id" => $dataArticle['id'],
        "qte" => (int)$dataArticle['qte']
    ];
}

function checkingDoublon(array $dataArticle){
    foreach ($_SESSION['cart'] as $product){
        if ($product['id'] == $dataArticle['id']){
            return true;
        }
    }
    return false;
}

function mergeDoublon (array $dataArticle){
    foreach ($_SESSION['cart'] as &$product){
        if ($product['id'] == $dataArticle['id']){
            $product['qte'] += (int)$dataArticle['qte'];
        }
    }
}