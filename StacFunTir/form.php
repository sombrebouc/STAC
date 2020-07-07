<?php
// ================================== //
// === déclaration des regex(s) ==== //
// ================================ //
// ==== année - mois - jour ==== //
    $regexBirthDate = '/^[0-9]{4}-[0-9]{2}-[0-9]{2}$/';
// ==== (+33) 06/07... xx xx xx xx ==== //
    $regexPhone = '/^(\+33|0)[1-79][0-9]{8}$/';
// ==== licence FFTir ==== //
    $regexlicenceFftir = '/^[0-9]{8}$/';
// ==== noms et prénom ==== //
    $regexNames = '/^[a-zéèîïêëç]+((?:\-|\s)[a-zéèéîïêëç]+)?$/i';
// ==== Validation du formulaire ==== //
$isSubmitted = false;
// ==== Initialisation des variables ==== //
$firstName='';
$lastName='';
$birthDate='';
$licenceFftir='';
$password= '';
$mail='';
$phone='';
$errors = [];
// ================================== //
// ==== Vérification des champs ==== //
// ================================ //
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $isSubmitted = true;
    // == validation des champs == //
    // ============================== Prénom
    $firstName= trim(filter_input(INPUT_POST, 'firstName', FILTER_SANITIZE_STRING));
    if (empty ($firstName)){
        $errors['firstName'] = 'Renseignez votre prénom';
    }elseif (!preg_match($regexNames,$firstName)) {
        $errors['firstName'] = 'Le format attendu n\'est pas respecté';
    }
    // ============================== Nom de Famille
    $lastName= trim(filter_input(INPUT_POST, 'lastName', FILTER_SANITIZE_STRING));
    if (empty ($lastName)){
        $errors['lastName'] = 'Renseignez votre nom';
    }elseif (!preg_match($regexNames,$lastName)) {
        $errors['lastName'] = 'Le format attendu n\'est pas respecté';
    }
    //  ============================== n° de Licence
    $licenceFftir= trim(filter_input(INPUT_POST, 'licenceFftir', FILTER_SANITIZE_STRING));
    if (empty ($licenceFftir)){
        $errors['licenceFftir'] = 'Renseignez votre N° de licence FFTir';
    }elseif (!preg_match($regexNames,$licenceFftir)) {
        $errors['licenceFftir'] = 'Le format attendu n\'est pas respecté';
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
<!--
// ================================== //
// ====== Corps du formulaire ====== //
// ================================ //
-->
<body>
    <div class="bg-dark text-light col-6 m-4 p-2 text-center">
        <div class="container">
            <?php if(($isSubmitted == false) || ($isSubmitted && count($errors) != 0)): ?>
            <h3 class="">FORMULAIRE D'INSCRIPTION</h3>
            <form action="" method="post">
                <p>
                    <input class="inputForm bg-primary col-12" name="lastName" placeholder="Nom" value="<?= $lastName ?>">
                    <span class="error text-danger"><?= $errors['lastName'] ?? '' ?></span>
                </p>
                <p>
                    <input class="inputForm bg-primary col-12" name="firstName" placeholder="Prénom" value="<?= $firstName ?>">
                    <span class="error text-danger"><?= $errors['firstName'] ?? '' ?></span>
                </p>
                <p>
                    <input class="inputForm bg-primary col-12" type="date" name="birthDate" placeholder="aaaa/mm/jj"
                        value="<?= $birthDate ?>">
                    <span class="error text-danger"><?= $errors['birthDate'] ?? '' ?></span>
                </p>
                <p>
                    <input class="inputForm bg-primary col-12" name="licenceFftir" placeholder="n° de licence FFTir"
                        value="<?= $licenceFftir ?>">
                    <span class="error text-danger"><?= $errors['licenceFftir'] ?? '' ?></span>
                </p>
                <p>
                    <input class="inputForm bg-primary col-12" name="password" placeholder="Mot de passe"
                        value="<?= $password ?>">
                    <span class="error text-danger"><?= $errors['password'] ?? '' ?></span>
                </p>
                <p>
                    <input class="inputForm bg-primary col-12" name="passwordConfirm" placeholder="Confirmation Mot de passe"
                        value="<?= $password ?>">
                    <p>
                        <span class="error text-info">Le mot de passe ne correspond pas</span>
                    </p>
                </p>
                <p>
                    <input class="inputForm bg-primary col-12" type="email" name="mail" id="" placeholder="john.smith@email.bug"
                        value="<?= $mail ?>">
                    <span class="error text-danger"><?= $errors['email'] ?? '' ?></span>
                </p>
                <p>
                    <input class="inputForm bg-primary col-12" type="text" name="phone" id="" placeholder="+33-xx-xx-xx-xx-xx"
                        value="<?= $phone ?>">
                    <span class="error text-danger"><?= $errors['phone'] ?? '' ?></span>
                </p>
                <input class="validationButton" type="submit" value="Enregistrer">
            </form>
            <?php else: ?>
                <div>
                <p>Affichage des données utilisateurs</p>
                <p><?= $firstName ?></p>
                <p><?= $lastName ?></p>
                <p><?= $birthDate ?></p>
                <p><?= $licenceFftir ?></p>
                <p><?= $password ?></p>
                <p><a href="mailto:<?= $mail ?>">adresse e-mail</a></p>
                <p><a href="tel:<?= $phone ?>">téléphone</a></p>
            </div>
            <?php endif; ?>
        </div>
    </div>