<?php
require ("../ressources/view/product/show.php");
require ("../app/persistances/productsData.php");
//require "../public/css/products.css";

global $pdo;
global $productsId;

if ($_SERVER['REQUEST_METHOD'] == 'GET')
    selectedProduct($pdo, $productsId);
header('location : /?action=home');

require ('../ressources/views/layouts/footer.php');
