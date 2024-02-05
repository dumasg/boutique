<?php session_start(); ?>

<h2>Nos produits</h2>
<section>
<?php foreach ($products as $oneProduct){?>
    <h3> <?=$oneProduct ['name']?></h3>

        <img src="<?=$oneProduct ['path_img']?>" alt="text alternatif image"/>

    <div id="submit">
        <button type="submit" value="détail">Voir le détail</button>
    </div>
<?php }; ?>
</section>



<!--<main>-->
<!--    <section>-->
<!--        <h3>--><?php //=$oneProduct ['name']?><!--</h3>-->
<!--        <img src="--><?php //=$oneProduct ['path_img']?><!--" alt="text alternatif pour le lien image"/>-->
<!--        <div class="produit">-->
<!--            -->
<!--        </div>-->
<!--    </section>-->
<!--</main>-->