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
$firstname='';
$licence='';
$password= '';
$mail='';
$errors = [];
// ================================== //
// ==== Vérification des champs ==== //
// ================================ //
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $isSubmitted = true;
    // == validation des champs == //
        // ============================== Firstname
    $firstname= trim(filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_STRING));
    if (empty ($firstname)){
        $errors['firstname'] = 'Renseignez votre prénom';
    }
    //  ============================== n° de Licence
    $licence= trim(filter_input(INPUT_POST, 'licence', FILTER_SANITIZE_STRING));
    if (empty ($licence)){
        $errors['licence'] = 'Renseignez votre N° de licence FFTir';
    }
    //  ============================== Mot de Passe
    $password= trim(sha1(filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING)));
    if (empty ($password)){
        $errors['password'] = 'Renseignez un mot de passe';
    }
    //  ============================== Adresse Mail
    $mail= trim(filter_input(INPUT_POST, 'mail', FILTER_SANITIZE_STRING));
    if (empty ($mail)){
        $errors['mail'] = 'Renseignez votre adresse électronique.';
    }elseif (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
        $errors['mail'] = 'Le format attendu n\'est pas respecté.';
    }
}

$bdd = new PDO('mysql:host=localhost; dbname=stac', 'admin', 'THOR81');

if(isset($_POST['validationInscription'])){
    if(!empty($_POST['firstname']) AND !empty($_POST['licence']) AND !empty($_POST['mail']) AND !empty($_POST['password'])){
        echo $firstname.'/'.$licence.'/'.$mail.'/'.$password;
    }else{
       $erreur = "Merci de remplir tous les champs";
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
                        <form action="" method="post">
                            <div class="inputBox text-center text-dark">
                                <label class="m-right-2" for="">Prénom</label>
                                <div>
                                    <input class="text-center" type="text" name="firstname" placeholder="prénom"
                                        value="<?= $firstname ?>" required="">
                                    <span class="error text-danger"><?= $errors['firstname'] ?? '' ?></span>
                                </div>
                            </div>
                            <div class="inputBox text-center text-dark">
                                <label class="m-right-2" for="">N° de licence FFTIR</label>
                                <div>
                                    <input class="text-center" type="text" name="licence"
                                        placeholder="n° de licence FFTIR" value="<?= $licence ?>" required="">
                                    <span class="error text-danger"><?= $errors['licence'] ?? '' ?></span>
                                </div>
                            </div>
                            <div class="inputBox text-center text-dark">
                                <label class="m-right-2" for="">Adresse e-mail</label>
                                <div>
                                    <input class="text-center" type="email" name="mail"
                                        placeholder="john.smith@email.bug" value="<?= $mail ?>" required="">
                                    <span class="error text-danger"><?= $errors['email'] ?? '' ?></span>
                                </div>
                            </div>
                            <div class="inputBox text-center text-dark">
                                <label class="m-right-2" for="">Mot de passe</label>
                                <div>
                                    <input class="text-center" type="password" name="password"
                                        placeholder="mot de passe" value="<?= $password ?>" required="">
                                    <span class="error text-danger"><?= $errors['password'] ?? '' ?></span>
                                </div>
                            </div>

                            <div class="validateBtn p-2">
                                <button type="submit" class="btn btn-block btn-success text-light"
                                    name="validationInscription">Enregistrer</button>
                            </div>
                        </form>

                        <?php if(isset($erreur)){ echo $erreur; } ?>

                    </div>
                </div>
            </div>
        </div>
    <div>
</div>