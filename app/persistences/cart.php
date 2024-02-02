<?php
function initCart()
{
}

function fakeCart()
{
    $arr = array(
        array(
            "name" => "iPhone",
            "price_ht" => "600",
            "quantity" => "1",
            "price_tva" => "750",
            'path_img' => "img/product/iphone-xr.png"
        ),

        array(
            "name" => "iPhone 25",
            "price_ht" => "7500",
            "quantity" => "98",
            "price_tva" => "10000",
            'path_img' => "img/product/iphone-xr.png"
        )
    );

    return $arr;
}

function totalCart($products)
{
    $arr = [
        "quantity" => null,
        "total_price" => null,
    ];

    foreach ($products as $data) {
        $arr["quantity"] = $arr["quantity"] + $data["quantity"];
        $arr["total_price"] = $arr["total_price"] + $data["price_tva"];
    }

    return $arr;
}
