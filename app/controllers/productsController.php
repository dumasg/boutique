<?php session_start(); ?>
<?php
echo 'productsController';
require  ("../app/persistences/productsData.php");

global $pdo;
global $productsId;

$productId = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
$product = getProduct($pdo, $productId);

require ("../ressources/views/product/show.php");
require ("../public/css/style.css");  //affiche le contenu du fichier css mais ne l'applique pas
?>





