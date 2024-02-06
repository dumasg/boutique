<?php
require ("../app/persistences/cart.php");

initCart();
fakeCart();

$cart = $_SESSION['cart'];

require '../ressources/views/cart/index.php';