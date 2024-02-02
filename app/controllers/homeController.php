<?php

require '../app/persistences/shopData.php' ;

// Récupérer les produits
$numerOfProductsToFetch = 6;
$products = getAllProducts($pdo, $numerOfProductsToFetch) ;

// Les afficher

require '../ressources/views/home.php' ;
