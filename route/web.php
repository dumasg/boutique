<?php

$routeArray = [
    "home",
];

$route = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_URL);
$route = $route ?? "home";

if (array_search($route, $routeArray) !== false){
    $i = array_search($route, $routeArray);
    require("../app/controllers/" . $routeArray[$i] . "Controller.php");
}else{
    require ("../ressources/views/errors/404.php");
}