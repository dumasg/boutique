<?php // demarrer la session
session_start();
//stocker des données de session
$_session["email"] = "X"; //valeur de la variable à modifier
$_session["passewords"] = "Y"; //valeur de la variable à modifier


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