<?php
// -------- CART : DISPLAY A LIST OF PRODUCTS WITH QUANTITIES AND PRICE --------
//
// $products : contains the list of products to display (see homeController.php)
// - $cartList (id => qty)
// - $products array of (id, name, path_img, price_ttc)

require '../ressources/views/layouts/header.tpl.php';
?>

    <div class="cartTotalUpRight">
        <div> Panier:
            <?php
            // $cartTotal[0] : contient le prix total du panier
            // $cartTotal[1] : contient le nombre d'articles du panier
            echo $cartTotal[1] . " produit";
            echo $cartTotal[1] > 1 ? 's ' : ' ';
            echo $cartTotal[0] . ' €'
            ?>
            <p style="margin-bottom: 0px;text-align: center">Voir le panier</p>
        </div>
    </div>

    <h2 id="cartTitle">Panier</h2>

    <div >

        <div class="columnTitles" style="font-weight: bold">
            <p class="imgAndName"></p>
            <p>Prix unitaire</p>
            <p>Quantité</p>
            <p>Total</p>
        </div>

        <form class="cartListTopBox" action="/index.php?action=cart" method="post">

            <?php
            foreach ($products as $product) {
                ?>
                <div class="largeProductCard">

                    <div class="imgAndName">
                        <img src="<?= $product['path_img'] ?>"/>
                        <a href="?action=product&id=<?= $product['id'] ?>">
                            <p>  <?= $product["name"] ?></p>
                        </a>
                    </div>
                    <p><?= $product['price_ttc'] . " " ?>€</p>
                    <!-- Quantité : -->

                    <p>
                        <input class="quantityBox"
                               type="number" step="1"
                               name="newCart[<?= $product['id'] ?>]"
                               value="<?=$cartList[$product['id']]?>"/>
                    </p>

                    <!-- Prix total du produit : -->

                    <p><?= $product['price_ttc'] * $cartList[$product['id']] ?> €</p>

                </div>

                <?php
            }
            ?>

            <p class="bottomRight">Total <?= $cartTotal[0] ?> €</p>

            <div class="CartButtons">
                <button type="submit">Mettre à jour le panier</button>

                <button onclick="window.location.href='';">
                    Valider le panier
                </button>
            </div>
        </form>

    </div>


<?php
require '../ressources/views/layouts/footer.tpl.php';
?>