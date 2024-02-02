<div class="cart__product">
    <div class="return-btn">
        <a href="index.php">
            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24">
                <path d="M560-240 320-480l240-240 56 56-184 184 184 184-56 56Z" />
            </svg>
        </a>
    </div>
    <h2>Panier</h2>
    <?php for ($i = 0; $i < count($products); $i++) : ?>
    <div class="cart__product_content">
        <div class="cart__product_picture">
            <img src="<?= $products[$i]["path_img"] ?>" alt="iPhone" />
            <img src="img/product/iphone-xr.png" alt="iPhone" />
        </div>
        <div class="cart__product_detail">
            <div class="cart__product_name">
                <p>NAME</p>
                <p><?= $products[$i]["name"] ?></p>
            </div>
            <div class="cart__product_unit_price">
                <p>UNIT PRICE</p>
                <p><?= $products[$i]["price_ht"] ?>€</p>
            </div>
            <div class="cart__product_quantity">
                <p>QUANTITY</p>
                <p><?= $products[$i]["quantity"] ?></p>
            </div>
            <div class="cart__product_total_price">
                <p>TOTAL PRICE</p>
                <p><?= $products[$i]["price_tva"] ?>€ TTC</p>
            </div>
        </div>
    </div>
    <?php endfor; ?>
    <form action="" method="post">
        <input type="submit" value="VALIDATE CART" />
    </form>
</div>