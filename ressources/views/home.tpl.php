<div class="container">
    <div class="container_articles">
    <?php foreach ($articles as $key => $value) { ?>
            <div class="card border">
                <div class="card_img">
                    <img src="<?= $value['path_img'] ?>" alt="">
                </div>
                <div class="card_body">
                    <h3><?= $value['name'] ?></h3>
                    <p><?= $value['description'] ?></p>
                    <div class="call_to_action_product">
                        <button class="btn btn-primary">Ajouter au panier</button>
                        <p><?= $value['price_ttc'] ?> €</p>
                    </div>
                </div>
            </div>
    <?php } ?>
    </div>
</div>

