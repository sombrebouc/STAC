<div class="container">

    <div class="bg-dark">
        <h3 class="modal-title text-light">Inscription</h3>
    </div>
    <form action="" method="POST">
        <div>
            <label class="text-uppercase text-primary" for="">Prénom</label>
        </div>
        <div>
            <input class="text-left border-0 border-bottom p-2" type="text" name="firstname" placeholder="prénom"
                value="<?= $firstname ?>" required="">
        </div>
        <div>
            <label class="text-uppercase text-primary" for="">Nom</label>
        </div>
        <div>
            <input class="text-left border-0 border-bottom p-2" type="text" name="lastname" placeholder="nom"
                value="<?= $lastname ?>" required="">
        </div>
        <div>
            <label class="text-uppercase text-primary" for="">Licence FFTIR</label>
        </div>
        <div>
            <input class="text-left border-0 border-bottom p-2" type="text" name="licensefftir"
                placeholder="n° de licence FFTIR" value="<?= $licensefftir ?>" required="">
        </div>
        <div>
            <label class="text-uppercase text-primary" for="">E-mail</label>
        </div>
        <div>
            <input class="text-left border-0 border-bottom p-2" type="email" name="email"
                placeholder="ex: john.smith@email.fr" value="<?= $email ?>" required="">
        </div>
        <div>
            <label class="text-uppercase text-primary" for="">Mot de passe</label>
        </div>
        <div>
            <input class="text-left border-0 border-bottom p-2" type="password" name="password01"
                value="<?= $password01 ?>" required="">
        </div>
        <div>
            <label class="text-uppercase text-primary" for="">Confirmer le mot de passe</label>
        </div>
        <div>
            <input class="text-left border-0 border-bottom p-2" type="password" name="password02"
                value="<?= $password02 ?>" required="">
        </div>
    </form>
</div>
<div class="modal-footer mt-3 bg-dark">
    <input type="submit" class="btn btn-block btn-primary text-uppercase text-dark" name="validationInscription"
        value="Enregistrer">
</div>
</div>
