<body>

<section>
    <h3> <?=$product ['name']?></h3>
    <div><img src="<?=$product ['path_img']?>" alt="text alternatif image"/>
    </div>
    <div>
        <p><?=$product ['description']?></p>
    </div>
    <form action="index.php?action=cart" method="post" class="needs-validation">

        <div class="container border rounded-3 bg-light bg-opacity-75 gy-3 my-5" id="formule">
            <div class="container">
                <div class="p-3 text-primary-emphasis text-center mt-3 mb-5">
                </div>
                <div class="row">
                    <div>
                        <input type="hidden" name ='id' value="<?=$product['id']?>">
                    </div>
                    <div>
                        <label for="quantity" class="form-label">Quantité</label>
                        <input type="number" class="form-control" name="quantity" id="quantity">
                    </div>
                </div>
            </div>
            <div class="container">
                <div id="submit">
                    <button type="submit" value="ENVOYER">Ajouter au panier</button>
                </div>
            </div>
        </div>
    </form>
   </section>
</body>

