<?php
function getProduct($db) {
    $query = "SELECT *
    FROM products";
    
    $arr = array();

    foreach ($db->query($query) as $data) {
        array_push($arr, $data);
    }

    return $arr;
}