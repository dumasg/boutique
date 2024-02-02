<div class="home__product">
    <h2>Les derniers produits</h2>
    <div class="home__product_grid">
        <?php for ($i = 0; $i < count($products); $i++) : ?>
            <div class="home__product_card">
                <div class="home__product_card_picture">
                    <img src="<?= $products[$i]["path_img"] ?>" alt="iPhone" />
                </div>
                <p><?= $products[$i]["name"] ?></p>
                <a href="index.php?action=product&id=<?= $products[$i]["id"] ?>">More info</a>
            </div>
        <?php endfor; ?>
    </div>
</div>