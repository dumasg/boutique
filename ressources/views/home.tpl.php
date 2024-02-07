<div class="container">
    <h1 class="title_page">Nos derniers ajouts </h1>
    <div class="container_articles">
        <?php foreach ($articles

        as $key => $value) { ?>
        <div class="card border">
            <a href="?action=product&id=<?= $value['id'] ?>">
                <div class="card_img">
                    <img src="<?= $value['path_img'] ?>" alt="">
                </div>
            </a>
            <div class="card_body">
                <h3><?= $value['name'] ?></h3>
                <p><?= $value['description'] ?></p>
                <div class="call_to_action_product">
                    <form action="?action=cart" method="post">
                        <input type="hidden" name="qte" id="qte" value="1">
                        <input type="hidden" name="id" id="id" value="<?= $value['id'] ?>">
                        <button class="btn btn-primary" type="submit">Ajouter au panier</button>
                    </form>
                </div>
                <p><?= $value['price_ttc'] ?> €</p>
            </div>
</div>
<?php } ?>
</div>
</div>
