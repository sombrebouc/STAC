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
$pseudo='';
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
    // ============================== Pseudo
    $pseudo= trim(filter_input(INPUT_POST, 'pseudo', FILTER_SANITIZE_STRING));
    if (empty ($pseudo)){
        $errors['pseudo'] = 'Renseignez votre prénom';
    }elseif (!preg_match($regexNames,$pseudo)) {
        $errors['pseudo'] = 'Le format attendu n\'est pas respecté';
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

<!-- =====\\= INSCRIPTION =//===== -->
<div class="container">
    <div class="row">
        <?php if(($isSubmitted == false) || ($isSubmitted && count($errors) != 0)): ?>
        <form action="" method="post">
            <div class="inputBox">
                <label class="m-right-2" for="">Pseudonyme</label>
                <div>
                    <input type="text" name="pseudo" placeholder="pseudo" value="<?= $pseudo ?>" required="">
                    <span class="error text-danger"><?= $errors['pseudo'] ?? '' ?></span>
                </div>
            </div>
            <div class="inputBox">
                <label class="m-right-2" for="">Mot de passe</label>
                <div>
                    <input type="password" name="password" placeholder="Mot de passe" value="<?= $password ?>"
                        required="">
                    <span class="error text-danger"><?= $errors['password'] ?? '' ?></span>
                </div>
            </div>
            <div class="inputBox">
                <label class="m-right-2" for="">N° de licence FFTIR</label>
                <div>
                    <input type="text" name="licence" placeholder="n° de licence FFTIR" value="<?= $licence ?>"
                        required="">
                    <span class="error text-danger"><?= $errors['licence'] ?? '' ?></span>
                </div>
            </div>
            <div class="inputBox">
                <label class="m-right-2" for="">Adresse e-mail</label>
                <div>
                    <input type="email" name="mail" placeholder="john.smith@email.bug" value="<?= $mail ?>" required="">
                    <span class="error text-danger"><?= $errors['email'] ?? '' ?></span>
                </div>
            </div>
                <button type="submit" class="btn btn-primary">Valider</button>
        </form>
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