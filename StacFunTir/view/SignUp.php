<div class="container usersTableContainer text-center shadow rounded col-xs-10 col-md-8 pt-3">
    <div><h3 class="bg-dark p-2 rounded text-light">Inscription</h3></div>
        <form action="" method="POST">
            <div>
                <label class="text-uppercase text-dark" for="">Prénom</label>
            </div>
            <div>
                <input class="col-md-8 col-xs-12 col-10 text-center border-0 border-bottom p-2" type="text" name="firstname" placeholder="prénom"
                    value="<?= $firstname ?>" required="">
            </div>
            <div>
                <label class="text-uppercase text-dark" for="">Nom</label>
            </div>
            <div>
                <input class="col-md-8 col-xs-12 col-10 text-center border-0 border-bottom p-2" type="text" name="lastname" placeholder="nom"
                    value="<?= $lastname ?>" required="">
            </div>
            <div>
                <label class="text-uppercase text-dark" for="">Licence FFTIR</label>
            </div>
            <div>
                <input class="col-md-8 col-xs-12 col-10 text-center border-0 border-bottom p-2" type="text" name="licensefftir"
                    placeholder="n° de licence FFTIR" value="<?= $licensefftir ?>" required="">
            </div>
            <div>
                <label class="text-uppercase text-dark" for="">E-mail</label>
            </div>
            <div>
                <input class="col-md-8 col-xs-12 col-10 text-center border-0 border-bottom p-2" type="email" name="email"
                    placeholder="ex: john.smith@email.fr" value="<?= $email ?>" required="">
            </div>
            <div>
                <label class="text-uppercase text-dark" for="">Mot de passe</label>
            </div>
            <div>
                <input class="col-md-8 col-xs-12 col-10 text-center border-0 border-bottom p-2" type="password" name="password"
                    value="<?= $password ?>" required="">
            </div>
            <div>
                <label class="text-uppercase text-dark" for="">Confirmer le mot de passe</label>
            </div>
            <div>
                <input class="col-md-8 col-xs-12 col-10 text-center border-0 border-bottom p-2" type="password" name="password"
                    value="<?= $password ?>" required="">
            </div>
        </form>
            <div class="ml-auto mr-auto col-md-4 col-xs-10 mt-5 pb-3">
                <input type="submit" class="btn btn-block btn-success text-uppercase text-light" name="validationInscription"
                    value="Enregistrer">
            </div>
</div>