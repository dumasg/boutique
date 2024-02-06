<?php
function initCart()
{
    if (!isset($_SESSION["cart"])) {
        $_SESSION["cart"] = [];
    }

    if (!isset($_SESSION["totalCart"])) {
        $_SESSION["totalCart"] = [];
    }
}

function fakeCart($db, $int)
{
    $query = "SELECT p.id, po.quantity
    FROM products as p
    INNER JOIN products_orders as po
    ON po.products_id = p.id
    WHERE po.orders_id = '$int'";

    $arr = [];

    foreach ($db->query($query) as $data) {
        array_push($arr, ["id" => $data["id"], "quantity" => $data["quantity"]]);
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

function addProductCart($id, $quantity)
{
    $isExists = false;
    if (!empty($id) && !empty($quantity)) {
        for ($i = 0; $i < count($_SESSION["cart"]); $i++) {
            if ($id == $_SESSION["cart"][$i]["id"]) {
                $isExists = true;
                break;
            }
        }

        for ($i = 0; $i < count($_SESSION["cart"]); $i++) {
            if (!$isExists) {
                array_push($_SESSION["cart"], ["id" => $id, "quantity" => $quantity]);
                $_SESSION["cart"][$i]["quantity"] += $quantity;
                break;
            } else {
                if ($id == $_SESSION["cart"][$i]["id"]) {
                    $_SESSION["cart"][$i]["quantity"] += $quantity;
                    break;
                }
            }
        }

        header("Location: index.php?action=cart");
    }
}