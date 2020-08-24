<?php

require_once dirname(__FILE__).'\HeaderController.php';
require_once dirname(__FILE__).'\..\model\Users.php';
    
    //validation des champs 
    $isSubmitted = false;
    $regexName = "/^[A-Za-zéÉ][A-Za-záàâäãåçéèêëíìîïñóòôöõúùûüýÿæœ]+((-| )[A-Za-záàâäãåçéèêëíìîïñóòôöõúùûüýÿæœ]+)?$/";
    $regexDate = "/^((?:19|20)[0-9]{2})-(0[1-9]|1[0-2])-(0[1-9]|[12][0-9]|3[01])$/";
    $regexLicense = "/^[0-9]{10}$/";
    $regexTel = "/^(?:\+33|0033|0)[1-9]((?:([\-\/\s\.])?[0-9]){2}){4}$/";
    $regexPassword = "/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[-+!*$@%_])([-+!*$@%_\w]{8,}$/";
    $firstname = $lastname = $licensefftir = $phoneNumber = $email = $password ='';
    $errors = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $isSubmitted = true;
     //verif champ prénom
    $firstname = trim(filter_input(INPUT_POST,'firstname',FILTER_SANITIZE_STRING));//enlève les espaces vides avant et après + nettoyage en fonction du type 
    if (empty($firstname)) {//verifie si le champ est vide
        $errors['firstname'] = 'Veuillez renseigner le prénom';
    } elseif (!preg_match($regexName, $firstname)) {//comparatif avec la regex correspondante
        $errors['firstname'] = 'Votre prénom contient des caractères non autorisés !';
    }
     //verif champ nom
    $lastname = trim(filter_input(INPUT_POST,'lastname',FILTER_SANITIZE_STRING));
    if (empty($lastname)) {
        $errors['lastname'] = 'Veuillez renseigner le nom';
    } elseif (!preg_match($regexName, $lastname)) {
        $errors['lastname'] = 'Votre nom contient des caractères non autorisés !';
    }
     //verif champ date d'anniversaire
    $licensefftir = trim(htmlspecialchars($_POST['licensefftir']));
    if (empty($licensefftir)) {
        $errors['licensefftir'] = 'Veuillez renseigner votre n° de license FFTIR';
    } elseif (!preg_match($regexLicense, $licensefftir)) {
        $errors['licensefftir'] = 'Le format n\'est pas valide !';
    }
    //verif champ mail
    $email = trim(htmlspecialchars($_POST['email']));
    if (empty($email)) {
        $errors['email'] = 'Veuillez renseigner votre email';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = 'L\' email  n\'est pas valide!';
    }
     //verif champ mobile
    $phoneNumber = trim(htmlspecialchars($_POST['phoneNumber']));
    if (empty($phoneNumber)) {
        $errors['phoneNumber'] = 'Veuillez renseigner votre téléphone';
    } elseif (!preg_match($regexTel, $phoneNumber)) {
        $errors['phoneNumber'] = 'Le format du téléphone n\'est pas valide!';
    }
    //verif champ password
   $password = trim(htmlspecialchars($_POST['password']));
   if (empty($password)) {
       $errors['password'] = 'Veuillez renseigner votre mot de passe';
   } elseif (!preg_match($regexTel, $password)) {
       $errors['password'] = 'Le format n\'est pas valide!';
   }
}

if ($isSubmitted && count($errors)== 0) {
    $users = new Users (0, $_POST['firstname'],$_POST['lastname'],$_POST['licensefftir'],$_POST['phoneNumber'],$_POST['email'],$_POST['password']);
    
    if($users->create())
    {
        $createUsersSuccess = true;
    }
}
    require_once dirname(__FILE__).'\..\view\SignUp.php';