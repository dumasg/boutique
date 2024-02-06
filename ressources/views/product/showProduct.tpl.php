<?php
require '../ressources/views/layouts/header.tpl.php';
?>

    <div class="productTopBox">
        <h2><?= $product["name"] ?></h2>

        <div class="productCard">
            <img src="<?= $product['path_img'] ?>"/>
            <div class="productDescription">
                <?= $product['description'] ?>
                <div class="priceAndButton">
                    <p><?= $product['price_ttc'] ?> € TTC</p>

                    <form action="/index.php?action=cart" method="post">

                        <input type="hidden" value="<?=$productId?>" name="productId" />
                        <div class="button">
                            <button type="submit">Ajouter au panier</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>

<?php
require '../ressources/views/layouts/footer.tpl.php';
?>