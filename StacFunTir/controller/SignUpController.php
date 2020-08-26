<?php

require_once dirname(__FILE__).'\HeaderController.php';
require_once dirname(__FILE__).'\..\model\Users.php';

    //validation des champs 
    $isSubmitted = false;
    $regexName = "/^[A-Za-zéÉ][A-Za-záàâäãåçéèêëíìîïñóòôöõúùûüýÿæœ]+((-| )[A-Za-záàâäãåçéèêëíìîïñóòôöõúùûüýÿæœ]+)?$/";
    $regexLicense = "/^[0-9]{5,}$/";
    $regexPassword = "/^((?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[-+!*$@%_])([-+!*$@%_\w]{3,})$/";

    $firstname = $lastname = $licensefftir = $password = $passwordConfirm ='';
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
        $errors['licensefftir'] = 'La licence n\'est pas valide !';
    }
    //verif champ password
   $password = trim(htmlspecialchars($_POST['password']));
   $passwordConfirm = trim(htmlspecialchars($_POST['passwordConfirm']));
   if ($password == $passwordConfirm) {
       password_hash($password, PASSWORD_DEFAULT);
   } else {
       $errors['password'] = 'Les mots de passe ne correspondent pas';
   }
}

if ($isSubmitted && count($errors)== 0) {
    $passwordHash = password_hash($password, PASSWORD_DEFAULT);
    $users = new Users (0, $_POST['firstname'], $_POST['lastname'], $_POST['licensefftir'], $passwordHash);

    if($users->create())
    {
       
        $createUsersSuccess = true;
    }
}
    require_once dirname(__FILE__).'\..\view\SignUp.php';