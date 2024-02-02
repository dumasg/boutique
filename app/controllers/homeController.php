<?php
global $pdo;
echo 'Bienvenue sur la page de la boutique';
//fonction d'affichage des articles
$product = productList($pdo);
require ("../ressources/views/home.tpl.php");
