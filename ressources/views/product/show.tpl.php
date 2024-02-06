<div class="show__product">
    <div class="return-btn">
        <a href="index.php">
            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24">
                <path d="M560-240 320-480l240-240 56 56-184 184 184 184-56 56Z" />
            </svg>
        </a>
    </div>
    <?php for ($i = 0; $i < count($products); $i++) :
        if ($_GET["id"] == $products[$i]["id"]) : ?>
            <h2><?= $products[$i]["name"] ?></h2>
            <div class="show__product_content">
                <div class="show__product_picture">
                    <img src="<?= $products[$i]["path_img"] ?>" alt="iPhone" />
                </div>
                <div class="show__product_description">
                    <p><?= $products[$i]["description"] ?></p>
                    <div class="show__product_price">
                        <p><?= $products[$i]["price_ttc"] ?>€ TTC</p>
                        <form action="index.php?action=cart&id=<?= $_GET["id"] ?>" method="post">
                            <input type="number" id="quantity" name="quantity" min="1" value="1" />
                            <input type="submit" value="ADD CART" />
                        </form>
                    </div>
                </div>
            </div>
    <?php endif;
    endfor; ?>
</div>