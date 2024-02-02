<?php $totalOrder = 0; ?>
<div class="container">
    <div class="containerCart">
        <?php if (!isset($cart)){ ?>
            <h1 class="title_page">Votre panier est vide</h1>
        <?php }else{ ?>
        <h1 class="title_page">Votre panier</h1>
        <div class="grid_container">
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
            </div>
            <?php foreach ($cart as $key => $product) { ?>
                <div class="grid_row">
                    <div class="grid_item grid_item_img">
                        <img src="<?= $product['path_img'] ?>" alt="">
                    </div>
                    <div class="grid_item"><p><?= $product['name'] ?></p></div>
                    <div class="grid_item"><span><?= $product['price_ttc'] ?> €</span></div>
                    <div class="grid_item"><span><?= $product['qte'] ?></span></div>
                    <div class="grid_item"><span><?= $product['total'] ?> €</span></div>
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

        </div>
        <div class="container_btn_delete_cart">
            <button onclick="window.location.href='?action=deleteCard'" class="btn btn-danger">Supprimer mon panier
            </button>
        </div>
    </div>
