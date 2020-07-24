<?php

// ================================== //
// === déclaration des regex(s) ==== //
// ================================ //
// ==== (+33) 06/07... xx xx xx xx ==== //
    $regexPhone = '/^(\+33|0)[1-79][0-9]{8}$/';
// ==== licence FFTir ==== //
    $regexlicence = '/^[0-9]{8}$/';
// ==== noms et prénom ==== //
    $regexNames = '/^[a-zéèîïêëç]+((?:\-|\s)[a-zéèéîïêëç]+)?$/i';
// ==== Validation du formulaire ==== //
$isSubmitted = false;
// ==== Initialisation des variables ==== //
$lastname='';
$firstname='';
$licence='';
$password= '';
$phone='';
$mail='';
$errors = [];
// ================================== //
// ==== Vérification des champs ==== //
// ================================ //
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $isSubmitted = true;
    // == validation des champs == //
    // ============================== Lastname
    $pseudo= trim(filter_input(INPUT_POST, 'pseudo', FILTER_SANITIZE_STRING));
    if (empty ($lastname)){
        $errors['lastname'] = 'Renseignez votre prénom';
    }elseif (!preg_match($regexNames,$lastname)) {
        $errors['lastname'] = 'Le format attendu n\'est pas respecté';
    }
        // ============================== Firstname
    $pseudo= trim(filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_STRING));
    if (empty ($firstname)){
        $errors['firstname'] = 'Renseignez votre prénom';
    }elseif (!preg_match($regexNames,$firstname)) {
        $errors['firstname'] = 'Le format attendu n\'est pas respecté';
    }
    //  ============================== n° de Licence
    $licence= trim(filter_input(INPUT_POST, 'licence', FILTER_SANITIZE_STRING));
    if (empty ($licence)){
        $errors['licence'] = 'Renseignez votre N° de licence FFTir';
    }elseif (!preg_match($regexNames,$licence)) {
        $errors['licence'] = 'Le format attendu n\'est pas respecté';
    }
    //  ============================== n° de Licence
    $password= trim(filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING));
    if (empty ($password)){
        $errors['password'] = 'Renseignez un mot de passe';
    }elseif (!preg_match($regexNames,$password)) {
        $errors['password'] = 'Il est préférable d\'avoir un mot de passe';
    }
    //  ============================== Numéro de tel
    $phone= trim(filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING));
    if (empty ($phone)){
        $errors['phone'] = 'Renseignez votre numéro de téléphone';
    }elseif (!preg_match($regexPhone,$phone)) {
        $errors['phone'] = 'Le format attendu n\'est pas respecté';
    }
    //  ============================== Adresse Mail
    $mail= trim(filter_input(INPUT_POST, 'mail', FILTER_SANITIZE_STRING));
    if (empty ($mail)){
        $errors['mail'] = 'Renseignez votre adresse électronique.';
    }elseif (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
        $errors['mail'] = 'Le format attendu n\'est pas respecté.';
    }
}
?>


<!-- \\\\\ MODAL CONNECT ///// -->
<div class="modal fade" id="signupModal" tabindex="-1">
  <div class="modal-dialog modal-sm modal-dialog-centered">
    <div class="modal-content">
            <div class="modal-body rounded">
<!-- =====\\= INSCRIPTION =//===== -->
<div class="container">
    <div class="row">
        <?php if(($isSubmitted == false) || ($isSubmitted && count($errors) != 0)): ?>
        <form action="" method="post">
            <div class="inputBox text-center text-light">
                <label class="m-right-2" for="">Nom</label>
                <div>
                    <input class="text-center" type="text" name="lastname" placeholder="nom" value="<?= $lastname ?>" required="">
                    <span class="error text-danger"><?= $errors['lastname'] ?? '' ?></span>
                </div>
            </div><div class="inputBox text-center text-light">
                <label class="m-right-2" for="">Prénom</label>
                <div>
                    <input class="text-center" type="text" name="firstname" placeholder="prénom" value="<?= $firstname ?>" required="">
                    <span class="error text-danger"><?= $errors['firstname'] ?? '' ?></span>
                </div>
            </div>
            <div class="inputBox text-center text-light">
                <label class="m-right-2" for="">Mot de passe</label>
                <div>
                    <input class="text-center" type="password" name="password" placeholder="mot de passe" value="<?= $password ?>"
                        required="">
                    <span class="error text-danger"><?= $errors['password'] ?? '' ?></span>
                </div>
            </div>
            <div class="inputBox text-center text-light">
                <label class="m-right-2" for="">N° de licence FFTIR</label>
                <div>
                    <input class="text-center" type="text" name="licence" placeholder="n° de licence FFTIR" value="<?= $licence ?>"
                        required="">
                    <span class="error text-danger"><?= $errors['licence'] ?? '' ?></span>
                </div>
            </div>
            <div class="inputBox text-center text-light">
                <label class="m-right-2" for="">Adresse e-mail</label>
                <div>
                    <input class="text-center" type="email" name="mail" placeholder="john.smith@email.bug" value="<?= $mail ?>" required="">
                    <span class="error text-danger"><?= $errors['email'] ?? '' ?></span>
                </div>
            </div>
					<div class="validateBtn p-2">
                <button type="submit" class="btn btn-block btn-success text-light">Enregistrer</button>
                </div>

        </form>
      </div>
    </div>
  </div>
</div>
<div>
    <?php else: ?>
    <div>
        <p>Affichage des données utilisateurs</p>
        <p><?= $pseudo ?></p>
        <p><?= $licence ?></p>
        <p><?= $password ?></p>
        <p><a href="mailto:<?= $mail ?>">adresse e-mail</a></p>
        <p><a href="tel:<?= $phone ?>">téléphone</a></p>
    </div>
    <?php endif; ?>
</div>


</div>
    </div>