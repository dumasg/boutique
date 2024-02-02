<?php
function getAllProducts($db) {
    $query = "SELECT *
    FROM products";
    
    $arr = array();

    foreach ($db->query($query) as $data) {
        array_push($arr, $data);
    }

    return $arr;
}

function getProduct($db, $product_id) {
    $query = "SELECT *
    FROM products 
    WHERE products.id = '$product_id'";
    
    $arr = array();

    foreach ($db->query($query) as $data) {
        array_push($arr, $data);
    }

    return $arr;
}