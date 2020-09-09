<?php if (isset($createUsersSuccess)): ?>
    <div class="container usersTableContainer text-center shadow rounded col-xs-10 col-md-8 pt-3 pb-2">
        <div class="row">
            <div class="col-12" role="alert">
                <h3 class="text-center text-success">Compte créé avec succès.</h3>
            </div>
        </div>
    </div>

<?php else: ?>

    <div class="container usersTableContainer text-center shadow rounded col-xs-10 col-md-8 pt-3">
        <div><h3 class="bg-dark p-2 rounded text-light">Inscription</h3></div>
        <form action="" method="POST">
            <div>
                <label class="text-uppercase text-dark" for="">Prénom</label>
            </div>
            <div>
                <input class="col-md-8 col-xs-12 col-10 text-center border-0 border-bottom p-2" type="text" name="firstname" placeholder="prénom"
                    value="<?= $firstname ?>" required="">
                    <div class="text-danger m-auto col-12">
                    <h4>
                    <?php
                    if(isset($errors['firstname'])){
                        echo $errors['firstname'];
                    } ?>
                    </h4>
                    </div>
            </div>
            <div>
                <label class="text-uppercase text-dark" for="">Nom</label>
            </div>
            <div>
                <input class="col-md-8 col-xs-12 col-10 text-center border-0 border-bottom p-2" type="text" name="lastname" placeholder="nom"
                    value="<?= $lastname ?>" required="">
                    <div class="text-danger m-auto col-12">
                    <h4>
                    <?php
                    if(isset($errors['lastname'])){
                        echo $errors['lastname'];
                    } ?>
                    </h4>
                    </div>
            </div>
            <div>
                <label class="text-uppercase text-dark" for="">Licence FFTIR</label>
            </div>
            <div>
                <input class="col-md-8 col-xs-12 col-10 text-center border-0 border-bottom p-2" type="text" name="license"
                    placeholder="n° de licence FFTIR" value="<?= $license ?>" required="">
                    <div class="text-danger m-auto col-12">
                    <h4>
                    <?php
                    if(isset($errors['license'])){
                        echo $errors['license'];
                    } ?>
                    </h4>
                    </div>
            </div>
            <div>
                <label class="text-uppercase text-dark" for="">Mot de passe</label>
            </div>
            <div>
                <input class="col-md-8 col-xs-12 col-10 text-center border-0 border-bottom p-2" type="password" name="password"
                    value="<?= $password ?>" required="">
                    <div class="text-danger m-auto col-12">
                    <h4>
                    <?php
                    if(isset($errors['password'])){
                        echo $errors['password'];
                    } ?>
                    </h4>
                    </div>
            </div>
            <div>
                <label class="text-uppercase text-dark" for="">Confirmer le mot de passe</label>
            </div>
            <div>
                <input class="col-md-8 col-xs-12 col-10 text-center border-0 border-bottom p-2" type="password" name="passwordConfirm"
                    value="<?= $passwordConfirm ?>" required="">
            </div>
            <div class="ml-auto mr-auto col-md-4 col-xs-10 mt-5 pb-3">
                <input type="submit" class="btn btn-block btn-success text-uppercase text-light" name="validationInscription"
                    value="Enregistrer" href="SignUpConfirmation.php">
            </div>
        </form>          
    </div>

<?php endif; ?>
