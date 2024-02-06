<h2>Nos produits</h2>
<section>
    <?php foreach ($products as $oneProduct): ?>
        <article>
            <h3> <?= $oneProduct ['name'] ?></h3>
            <img src="<?= $oneProduct ['path_img'] ?>" alt="text alternatif image"/>
            <div id="submit">
                <button value="détail"><a href="/index.php?action=product&id=<?=$oneProduct['id']?>"> Voir le détail</a></button>
            </div>
        </article>
    <?php endforeach; ?>
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