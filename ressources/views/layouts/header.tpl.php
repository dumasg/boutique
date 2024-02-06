<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="public/css/style.css">
    <title>Ma boutique</title>
</head>
<body>

<header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">Ma bibliothèque</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
                    aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/">Tendance</a>
                    </li>
                </ul>

                <?php if (isset($_COOKIE['autoConnection'])){ ?>
                    <button onclick="window.location.href='?action=cart'" class="btn btn-success me-3" type="submit">Panier</button>
                    <button onclick="window.location.href='?action=deconnection'" class="btn btn-danger me-3" type="submit">Déconnexion</button>
                <?php }else{ ?>
                    <button onclick="window.location.href='?action=signup'" class="btn btn-primary me-3" type="submit">Connexion</button>
                    <button onclick="window.location.href='?action=login'" class="btn btn-primary me-3" type="submit">Inscription</button>
                    <button onclick="window.location.href='?action=cart'" class="btn btn-success" type="submit">Panier</button>
                <?php } ?>
            </div>
        </div>
    </nav>
</header>