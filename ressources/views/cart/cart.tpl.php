<div class="cart__product">
    <div class="return-btn">
        <a href="index.php">
            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24">
                <path d="M560-240 320-480l240-240 56 56-184 184 184 184-56 56Z" />
            </svg>
        </a>
    </div>
    <h2>Panier</h2>
    <?php if (isset($_SESSION["cart"]) && !empty($_SESSION["totalCart"])) : ?>
        <form class="updateCart" action="index.php?action=cart" method="post">
            <?php
            foreach ($productsCart as $data) :
                foreach ($_SESSION["cart"] as $value) :
                    if ($data["id"] == $value["id"]) : ?>
                        <div class="cart__product_content">
                            <div class="cart__product_picture">
                                <img src="<?= $data["path_img"] ?>" alt="iPhone" />
                            </div>
                            <div class="cart__product_detail">
                                <div class="cart__product_name">
                                    <p>NAME</p>
                                    <p><?= $data["name"] ?></p>
                                </div>
                                <div class="cart__product_unit_price">
                                    <p>UNIT PRICE</p>
                                    <p><?= $data["price_ht"] ?>€</p>
                                </div>
                                <div class="cart__product_quantity">
                                    <p>QUANTITY</p>
                                    <input type="number" id="quantity" name="quantity[<?= $data["id"] ?>][quantity]" min="0" value="<?= $value["quantity"] ?>" />
                                </div>
                                <div class="cart__product_total_price">
                                    <p>TOTAL PRICE</p>
                                    <p><?= $data["price_ttc"] ?>€ TTC</p>
                                </div>
                            </div>
                        </div>
            <?php endif;
                endforeach;
            endforeach; ?>
            <div class="cart__total_price">
                <input type="submit" value="MODIFY CART" />
                <p><span>TOTAL</span><?= $_SESSION["totalCart"]["price_ttc"] ?>€ TTC</p>
            </div>
        </form>
        <form class="validateCart" action="" method="post">
            <input type="submit" value="VALIDATE CART" />
        </form>
    <?php else : ?>
        <p class="empty">PANIER VIDE</p>
    <?php endif; ?>
</div>