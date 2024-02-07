<div class="container">
    <div class="container_product">
        <div class="container_product_img">
            <img src="<?= $article['path_img'] ?>" alt="">
        </div>
        <div class="container_content_product">
            <div>
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
            </div>

            <form action="?action=cart" method="post" class="container_product_form">
                <div class="container_product_qte">
                    <label for="qte">Quantité</label>
                    <input type="number" name="qte" id="qte">
                </div>
                <div>
                    <input type="hidden" name="id" id="id" value="<?= $article['id'] ?>">
                    <button class="btn btn-primary" type="submit">Ajouter au panier</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>