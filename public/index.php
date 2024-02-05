<?php


include '../config/database.php';

$routes = [
    "product"   => '../app/controllers/showController.php',
    "cart"      => '../app/controllers/cartController.php',
];

$p = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

if (array_key_exists($p, $routes)) {
//    ob_start();
    require $routes[$p];
//    $render = ob_get_clean();
//    echo $render;
} else {
    if (empty($p)) {
        include '../app/controllers/homeController.php';
    } else {
        http_response_code(404);
        include '../ressources/views/errors/404.php';
        exit;
    }
}
