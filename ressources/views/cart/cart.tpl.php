<?php
    $totalOrder = 0;
?>
<div class="container">
    <div class="containerCart">
        <?php if (!isset($cart)){ ?>
            <h1 class="title_page">Votre panier est vide</h1>
        <?php }else{ ?>
        <h1 class="title_page">Votre panier</h1>
        <form action="/?action=updateCart" method="post">
            <div class="grid_row row_title">
                <div class="grid_item grid_item_container_title">
                    <p class="grid_item_title">Article</p>
                </div>
                <div class="grid_item grid_item_container_title">
                    <p class="grid_item_title">Désignation</p>
                </div>
                <div class="grid_item grid_item_container_title">
                    <p class="grid_item_title">Prix unitaire</p>
                </div>
                <div class="grid_item grid_item_container_title">
                    <p class="grid_item_title">Quantité</p>
                </div>
                <div class="grid_item grid_item_container_title">
                    <p class="grid_item_title">Total</p>
                </div>
                <div class="grid_item grid_item_container_title">
                    <p class="grid_item_title"></p>
                </div>
            </div>
            <?php foreach ($cart as $key => $product) { ?>
                <div class="grid_row">
                    <div class="grid_item grid_item_img">
                        <img src="<?= $product['path_img'] ?>" alt="">
                    </div>
                    <div class="grid_item"><p><?= $product['name'] ?></p></div>
                    <div class="grid_item"><span><?= $product['price_ttc'] ?> €</span></div>
                    <div class="grid_item">
                        <input type="number" name="<?= "id=".$product['id']?>" value="<?= $product['qte'] ?>">
                    </div>
                    <div class="grid_item"><span><?= $product['total'] ?> €</span></div>
                    <div class="grid_item"><a href="?action=cart&id=<?= $product['id'] ?>&delete=true">Supprimer</a></div>

                </div>
                <?php
                $totalOrder += $product['total'];
            } ?>
            <?php } ?>
            <div class="grid_row_total">
                <div class="grid_item grid_item_container_title">
                    <p class="grid_item_title"></p>
                </div>
                <div class="grid_item grid_item_container_title">
                    <p class="grid_item_title"></p>
                </div>
                <div class="grid_item grid_item_container_title">
                    <p class="grid_item_title"></p>
                </div>
                <div class="grid_item grid_item_container_title">
                    <p class="grid_item_title"></p>
                </div>
                <div class="grid_item grid_item_container_totalOrder">
                    <p class="grid_item_title">Total : <?= $totalOrder ?> € </p>
                </div>
            </div>
            <div class="container_btn_delete_cart">
                <button type="reset" onclick="window.location.href='?action=deleteCard'" class="btn btn-danger">Supprimer mon panier
                </button>
                <button type="submit" class="btn btn-primary">Mettre à jour mon panier
                </button>
            </div>
        </form>
    </div>
