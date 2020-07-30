<?php
// ==== connexion à la bdd ==== //
$bdd = new PDO('mysql:host=localhost; dbname=stac', 'admin', 'THOR81');

// === déclaration des regex(s) ==== //
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
$password01= '';
$password02= '';
$mail='';
$errors = [];
// ==== Vérification des champs ==== //
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
    $password01= trim(sha1(filter_input(INPUT_POST, 'password01', FILTER_SANITIZE_STRING)));
    if (empty ($password01)){
        $errors['password01'] = 'Renseignez un mot de passe';
    }
    $password02= trim(sha1(filter_input(INPUT_POST, 'password02', FILTER_SANITIZE_STRING)));
    if (empty ($password02)){
        $errors['password02'] = 'Confirmez votre mot de passe';
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
    <div class="modal-dialog modal-sm modal-dialog-centered border-right-0">
        <div class="modal-content">
            <div class="modal-header bg-dark">
                <h5 class="modal-title text-light">Inscription</h5>
            </div>
            <div class="modal-body rounded">
                <!-- =====\\= INSCRIPTION =//===== -->
                <form action="" method="POST">
                    <table class="container">
                    <tr>
                        <div>
                            <label class="text-uppercase text-primary" for="">Prénom</label>
                        </div>
                        <div>
                            <input class="text-left border-0 border-bottom p-2" type="text" name="firstname" placeholder="prénom"
                                value="<?= $firstname ?>" required="">
                        </div>
                    </tr>
                    <tr>
                        <div>
                            <label class="text-uppercase text-primary" for="">Licence FFTIR</label>
                        </div>
                        <div>
                            <input class="text-left border-0 border-bottom p-2" type="text" name="licence" placeholder="n° de licence FFTIR"
                                value="<?= $licence ?>" required="">
                        </div>
                    </tr>
                    <tr>
                        <div>
                            <label class="text-uppercase text-primary" for="">E-mail</label>
                        </div>
                        <div>
                            <input class="text-left border-0 border-bottom p-2" type="email" name="mail" placeholder="john.smith@email.bug"
                                value="<?= $mail ?>" required="">
                        </div>
                    </tr>
                    <tr>
                        <div>
                            <label class="text-uppercase text-primary" for="">Mot de passe</label>
                        </div>
                        <div>
                            <input class="text-left border-0 border-bottom p-2" type="password" name="password01" placeholder="mdp" value="<?= $password01 ?>" required="">
                        </div>
                    </tr>
                    <tr>
                        <div>
                            <label class="text-uppercase text-primary" for="">Confirmation</label>
                        </div>
                        <div>
                            <input class="text-left border-0 border-bottom p-2" type="password" name="password02" placeholder="Confirmation mdp" value="<?= $password02 ?>" required="">
                        </div>
                    </tr>
                    </table>
                </form>
            </div>
            <div class="modal-footer mt-3 bg-dark">
                <input type="submit" class="btn btn-block btn-primary text-uppercase text-dark" name="validationInscription" value="Enregistrer">
            </div>
        </div>



        <?php
        
        if(isset($_POST['validationInscription'])){
            if(!empty($_POST['firstname']) AND !empty($_POST['licence']) AND !empty($_POST['mail']) AND !empty($_POST['password01']) AND !empty($_POST['password02'])){
                if($password01 == $password02){
                   $insertmbr = $bdd->prepare("INSERT INTO membres(prénom, licence, mail, mot de passe) VALUES(?, ?, ?, ?)");
                   $insertmbr->execute(array($firstname,$licence, $mail, $password01));
                   $_SESSION['compte créé'] = "Votre compte a bien été créé !";
                } else {
               $erreur = "Merci de remplir tous les champs";
            }
        }
        }
        
        if(isset($erreur)){ echo $erreur; } 
        
        ?>
    </div>
</div>
</div>