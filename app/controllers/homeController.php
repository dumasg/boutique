<?php
echo 'homeController';
global $pdo;
require  ("../app/persistences/productsData.php");

//fonction d'affichage des articles
$products = productList($pdo);

require ("../ressources/views/home.tpl.php");
require ("../public/css/style.css");