<?php

$dirArray = scandir("../app/controllers");

$routeArray = array();


foreach ($dirArray as $file){
    if(!($file == "." || $file == "..")){
        $routeArray[] = explode("Controller", $file)[0];
    }
}

$route = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_URL);
$route = $route ?? "home";

if (array_search($route, $routeArray) !== false){
    $i = array_search($route, $routeArray);
    require("../app/controllers/" . $routeArray[$i] . "Controller.php");
}else{
    require ("../ressources/views/errors/404.php");
}