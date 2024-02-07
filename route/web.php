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
    require ("../ressources/views/layouts/header.tpl.php");
    require("../app/controllers/" . $routeArray[$i] . "Controller.php");
    require ("../ressources/views/layouts/footer.tpl.php");

}else{
    require ("../ressources/views/layouts/header.tpl.php");
    require ("../ressources/views/errors/notfound.php");
    require ("../ressources/views/layouts/footer.tpl.php");

}