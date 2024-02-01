<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta description="">

    <title><?= strtoupper(array_search($paths[$filterURI], $paths)); ?></title>

    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php require_once "header.tpl.php"; ?>
    <main>
    <?php require_once $paths[$filterURI]; ?>
    </main>
    <?php require_once "footer.tpl.php"; ?>
</body>

</html>