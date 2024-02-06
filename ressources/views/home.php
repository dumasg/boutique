<?php
// -------- HOME PAGE : DISPLAY A LIST OF LAST PRODUCTS ADDED TO THE CATALOGUE --------
//
// $products : contains the list of products to display (see homeController.php)

require '../ressources/views/layouts/header.tpl.php';
?>

    <h2 id="lastProductsTitle">Nos poissons du jour</h2>

    <div class="productListTopBox">
        <?php
        foreach ($products as $product) {
        ?>

            <div class="smallProductCard">
                <a href="?action=product&id=<?= $product['id'] ?>">
                    <img src="<?= $product['path_img'] ?>"/>
                </a>

                <a href="?action=product&id=<?= $product['id'] ?>">
                    <p>  <?= $product["name"] ?></p>
                </a>
            </div>

        <?php
        }
        ?>

    </div>

<?php
require '../ressources/views/layouts/footer.tpl.php';
?>