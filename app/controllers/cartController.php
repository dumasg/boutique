<?php


if ($_SERVER['REQUEST_METHOD'] === 'POST'){

    $args = array(
        "id" => FILTER_SANITIZE_NUMBER_INT,
        "qte" => FILTER_SANITIZE_NUMBER_INT
    );

    $dataArticle = filter_input_array(INPUT_POST, $args);

    $_SESSION['cart'][] = [
        "id" => $dataArticle['id'],
        "qte" => $dataArticle['qte']
    ];

    header("Location: /?action=product&id=" . $dataArticle['id']);
    exit();
}
