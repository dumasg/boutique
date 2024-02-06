<div class="container_form_connexion">
    <form action="/?action=signup" method="post">
        <?php if ($_GET['connection'] == 'failed'){ ?>
            <div>
                <h4 class="alter_no_connection">Impossible de vous connectez ! Vérifiez votre email et votre mot de passe</h4>
            </div>
        <?php } ?>

        <div class="div_form">
            <label for="email">Email</label>
            <input id="email" name="email" type="email">
        </div>
        <div class="div_form">
            <label for="password">Mot de passe</label>
            <input id="password" name="password" type="password">
        </div>
        <div>
            <button class="btn btn-primary">Connexion</button>
        </div>
    </form>
</div>