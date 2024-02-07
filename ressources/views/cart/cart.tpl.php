<?php global $product; ?>

<h2 id="cartTitle">Panier</h2>
<?php foreach ($cart as $cartLine):?>
<div class="cart_product_description">
    <div class="cart_product_detail">
        <div class="cart_product_name">
            <p>NOM</p>
            <?= $cartLine['name'] ?>
        </div>
        <div class="cart_product_price_ht">
            <p>PRIX UNITAIRE HT</p>
            <?= $cartLine["price"] ?>
        </div>
        <div class="cart_product_quantity">
            <p>QUANTITES</p>
            <?= $cartLine["quantity"] ?>
        </div>
        <div class="cart_product_total_price">
            <p>TOTAL PRICE</p>
            <?= $cartLine["totalPrice"] ?>
        </div>
    </div>
</div>
<?php endforeach; ?>
