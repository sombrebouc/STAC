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
$password= '';
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
    $password01= trim(password_hash($_POST['password01'], PASSWORD_BCRYPT));
    if (empty ($password01)){
        $errors['password01'] = 'Renseignez un mot de passe';
    }
    $password02= trim(password_hash($_POST['password02'], PASSWORD_BCRYPT));
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