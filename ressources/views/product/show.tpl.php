<div class="container">
    <div class="container_product">
        <div class="container_product_img">
            <img src="<?= $article['path_img'] ?>" alt="">
        </div>
        <div class="container_content_product">
            <div>
                <h1><?= $article['name'] ?></h1>
            </div>
            <div>
                <p><?= $article['description'] ?></p>
            </div>
            <div class="container_product_price">
                <p>Prix TTC : <?= $article['price_ttc'] ?> €</p>
                <span>Prix HT :  <?= $article['price_ht'] ?> €</span>
            </div>
            <form action="?action=cart" method="post" class="container_product_form">
                <div class="container_product_qte">
                    <label for="qte">Quantité</label>
                    <input type="number" name="qte" id="qte">
                </div>
                <div>
                    <button class="btn btn-primary" type="submit">Ajouter au panier</button>
            </form>
        </div>
    </div>
</div>
</div>