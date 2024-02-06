<?php
function initCart()
{
    if (!isset($_SESSION["cart"])) {
        $_SESSION["cart"] = array();
    }

    if (!isset($_SESSION["totalCart"])) {
        $_SESSION["totalCart"] = array();
    }
}

function fakeCart($db, $int)
{
    $query = "SELECT p.id, po.quantity
    FROM products as p
    INNER JOIN products_orders as po
    ON po.products_id = p.id
    WHERE po.orders_id = '$int'";

    $arr = array();

    foreach ($db->query($query) as $data) {
        array_push($arr, $data);
    }

    return $arr;
}

function totalCart($db, $session)
{
    $query = "SELECT p.id, p.price_ttc
    FROM products as p";

    $arr = [];

    foreach ($db->query($query) as $data) {
        foreach ($session as $value) {
            if ($data["id"] === $value["id"]) {
                $arr["quantity"] += $value["quantity"];
                $arr["price_ttc"] += ($data["price_ttc"] * $value["quantity"]);
            }
        }
    }

    return $arr;
}