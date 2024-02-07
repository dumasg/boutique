<?php session_start();

require  ("../app/persistences/productsData.php");

global $pdo;
global $productsId;
//afficher un produit
$productId = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
$product = getProduct($pdo, $productId);

require ("../ressources/views/product/show.php");







