<?php


$userByCookie = explode("//", $_COOKIE['autoConnection'])[0];

if (!($userByCookie === "gerem@gmail.com")){
    header("Location: /");
    exit();
}else{
    echo "je peux etre sur cette page";
    require ("../ressources/views/adminPanel.tpl.php");
}