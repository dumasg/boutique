<div class="show__hero">
    <h1>Ma boutique</h1>
    <img src="../img/andras-vas-Bd7gNnWJBkU-unsplash.jpg" alt="Laptop" />
</div>
<div class="show__product">
    <?php for ($i = 0; $i < count($product); $i++) :
        if ($_GET["id"] == $product[$i]["id"]) : ?>
            <h2><?= $product[$i]["name"] ?></h2>
            <div class="show__product_content">
                <div class="show__product_picture">
                    <img src="<?= $product[$i]["path_img"] ?>" alt="iPhone" />
                </div>
                <div class="show__product_description">
                    <p><?= $product[$i]["description"] ?></p>
                    <div class="show__product_price">
                        <p><?= $product[$i]["price_ttc"] ?> € TTC</p>
                        <form action="index.php?action=cart" method="post">
                            <input type="number" id="quantity" name="quantity" min="1" value="1" />
                            <input type="submit" value="ADD CART" />
                        </form>
                    </div>
                </div>
            </div>
    <?php endif;
    endfor; ?>
</div>