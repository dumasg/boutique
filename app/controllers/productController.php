<?php

$idArticle = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_URL);

$article = selectArticle($pdo, $idArticle);

require ("../ressources/views/product/show.tpl.php");
