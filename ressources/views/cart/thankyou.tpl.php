<?php
// -------- CART : DISPLAY A LIST OF PRODUCTS WITH QUANTITIES AND PRICE --------
//
// $products : contains the list of products to display (see homeController.php)
// - $cartList (id => qty)
// - $products array of (id, name, path_img, price_ttc)

require '../ressources/views/layouts/header.tpl.php';
?>

<?php if (isset($cartList)) { ?>

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

    <?php if ($allProductsAreInStock) { ?>

        <h2 id="cartTitle">Commande XXX</h2>

        <div>

            <p>Merci pour votre commande !</p>
            <br>
            <button>PAYER</button>

        </div>

    <?php } else { ?>

        <p class="emptyCart"> CERTAINS PRODUITS NE SONT PLUS EN STOCK ! </p>

<?php } else { ?>
    <p class="emptyCart"> VOTRE PANIER EST VIDE ! </p>
<?php } ?>


<?php
require '../ressources/views/layouts/footer.tpl.php';
?>