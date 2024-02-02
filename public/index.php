<?php
include '../config/database.php';
require ("../ressources/views/layouts/header.php");

//lien vers les différentes pages de controller
$routes = [
    'home' => "../app/controllers/homeController.php",
    'products' => '../app/controllers/productsController.php',
];

$action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$articlesId = filter_input(INPUT_GET, "id",FILTER_SANITIZE_NUMBER_INT);
$action = $action == '' ? 'home' : $action; // condition si $action == 'null' ?(alors) afficher home : (sinon) $action;
require $routes[$action];

require ("../ressources/views/layouts/footer.php");