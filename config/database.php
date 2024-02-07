<?php

require '../config/const.php';

try {
    $pdo = new PDO('mysql:host=localhost;dbname=boutique', USER, MDP);
}catch (Exception $e){
    echo ($e -> getMessage());
}
