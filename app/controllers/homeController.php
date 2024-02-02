<?php
global $pdo;
require  ("../app/persistences/productsData.php");

//fonction d'affichage des articles
$products = productList($pdo);

require ("../ressources/views/home.tpl.php");
require ("../css/style.css");