<?php

//lien vers les différentes pages de controller
$routes = [
    'home' => "../app/controllers/homeController.php",
    'product' => '../app/controllers/productsController.php',
    'cart' => '../app/controllers/cartController.php',
];

$action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$action = $action == '' ? 'home' : $action; // condition si $action == 'null' ?(alors) afficher home : (sinon) $action;
require $routes[$action];