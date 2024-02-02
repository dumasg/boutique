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
                    <button onclick="window.location.href='';">
                        Ajouter au panier
                    </button>
                </div>
            </div>
        </div>
    </div>

<?php
require '../ressources/views/layouts/footer.tpl.php';
?>