<?php
require '../app/persistences/shopData.php';

$productId = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
$product = getProduct($pdo, $productId);

// Afficher la page produit :

require '../ressources/views/product/show.php';

