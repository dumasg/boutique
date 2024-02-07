<?php
function initCart()
{
    if (!isset($_SESSION)) {
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

function totalCart($db)
{
    $query = "SELECT id, price_ttc
    FROM products";

    foreach ($db->query($query) as $data) {
        foreach ($_SESSION["cart"] as $value) {
            if ($data["id"] == $value["id"]) {
                if (empty($_SESSION["totalCart"])) {
                    array_push($_SESSION["totalCart"], ["quantity" => intval($value["quantity"]), "price_ttc" => intval($data["price_ttc"] * $value["quantity"])]);
                } 
                // else {
                //     $_SESSION["totalCart"][0]["quantity"] += intval($value["quantity"]);
                //     $_SESSION["totalCart"][0]["price_ttc"] += intval($data["price_ttc"] * $value["quantity"]);
                // }
            }
        }
    }
}

function addProductCart($id, $quantity)
{
    $isExists = false;
    if (!empty($id) && !empty($quantity)) {
        if (empty($_SESSION["cart"])) {
            array_push($_SESSION["cart"], ["id" => intval($id), "quantity" => intval($quantity)]);
        } else {
            for ($i = 0; $i < count($_SESSION["cart"]); $i++) {
                if ($id == $_SESSION["cart"][$i]["id"]) {
                    $isExists = true;
                    break;
                }
            }

            for ($i = 0; $i < count($_SESSION["cart"]); $i++) {
                if ($isExists) {
                    if ($id == $_SESSION["cart"][$i]["id"]) {
                        $_SESSION["cart"][$i]["quantity"] += intval($quantity);
                        break;
                    }
                } else {
                    array_push($_SESSION["cart"], ["id" => intval($id), "quantity" => intval($quantity)]);
                    break;
                }
            }
        }

        header("Location: index.php?action=cart");
    }
}

function updateProductCart($session, $post)
{
    // var_dump($session);
    if (!empty($session) && !empty($post)) {
        for ($i = 0; $i < count($session); $i++) {
            foreach ($post as $key => $value) {
                if ($session[$i]["id"] == $key) {
                    // $_SESSION["cart"][$i]["quantity"] = intval($value["quantity"]);
                }
            }
            /// delete product if quantity equal 0;
        }

        // foreach ($id as $i) {
        //     foreach ($quantity as $key => $q) {
        //         if ($i["id"] == $key) {
        //             // $arr_c = array_column($_SESSION["cart"], "id");
        //             // echo array_search($key, $arr_c);
        //             echo $_SESSION["cart"][$key]["id"];
        //             // $_SESSION["cart"][$key]["quantity"] = $q["quantity"];
        //         }
        //     }
        // }

        header("Location: index.php?action=cart");
    }

    // for ($i = 0; $i < count($id); $i++) {
    //     if ($id[$i]["id"] == array_keys($quantity)[$i]) {
    //         // echo $quantity[$value["id"]]["quantity"] . "<br>";
    //         // echo "test";
    //     }
    // }
}