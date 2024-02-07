<?php

$articles = selectAllProduct($pdo);
require ("../ressources/views/home.tpl.php");

