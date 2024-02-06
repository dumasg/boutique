<?php
$metaTitle = "Les petits pois sont rouges";
$metaDescription = "Site de vente de poisson";

?>

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=1920, initial-scale=1.0">
    <meta name="description" content="<?= $metaDescription ?>">
    <title>
        <?= $metaTitle ?>
    </title>
    <link rel=" stylesheet" href="css/style.css">
</head>

<!-- ====================== HEADER DU SITE ======================  -->
<body>

<header>

    <h1>Du poisson pour midi !</h1>
    <nav>
        <div><a href="/">Home</a></div>
        <div><a href="/?action=cart">Voir mon panier</a></div>
    </nav>
</header>