<?php	
	require_once dirname(__FILE__).'\includes\Header.php';
?>

<div class="container">

    <div class="bg-dark">
        <h5 class="modal-title text-light">Inscription</h5>
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
            <label class="text-uppercase text-primary" for="">Licence FFTIR</label>
        </div>
        <div>
            <input class="text-left border-0 border-bottom p-2" type="text" name="licence"
                placeholder="n° de licence FFTIR" value="<?= $licence ?>" required="">
        </div>
        <div>
            <label class="text-uppercase text-primary" for="">E-mail</label>
        </div>
        <div>
            <input class="text-left border-0 border-bottom p-2" type="email" name="mail"
                placeholder="john.smith@email.bug" value="<?= $mail ?>" required="">
        </div>
        <div>
            <label class="text-uppercase text-primary" for="">Mot de passe</label>
        </div>
        <div>
            <input class="text-left border-0 border-bottom p-2" type="password" name="password01" placeholder="mdp"
                value="<?= $password01 ?>" required="">
        </div>
        <div>
            <label class="text-uppercase text-primary" for="">Confirmation</label>
        </div>
        <div>
            <input class="text-left border-0 border-bottom p-2" type="password" name="password02"
                placeholder="Confirmation mdp" value="<?= $password02 ?>" required="">
        </div>
    </form>
</div>
<div class="modal-footer mt-3 bg-dark">
    <input type="submit" class="btn btn-block btn-primary text-uppercase text-dark" name="validationInscription"
        value="Enregistrer">
</div>
</div>
