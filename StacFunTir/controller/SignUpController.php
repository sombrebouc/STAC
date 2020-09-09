<?php

require_once dirname(__FILE__).'\HeaderController.php';
require_once dirname(__FILE__).'\..\model\Users.php';

    //validation des champs 
    $isSubmitted = false;
    $regexName = "/^[A-Za-zéÉ][A-Za-záàâäãåçéèêëíìîïñóòôöõúùûüýÿæœ]+((-| )[A-Za-záàâäãåçéèêëíìîïñóòôöõúùûüýÿæœ]+)?$/";
    $regexLicense = "/^[0-9]{5,}$/";
    $regexPassword = "/^((?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[-+!*$@%_])([-+!*$@%_\w]{3,})$/";

    $firstname = $lastname = $license = $password = $passwordConfirm ='';
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
     //verif 
    if (isset($_POST['license'])){
        $license = trim(htmlspecialchars($_POST['license']));
    }
    if (empty($license)) {
        $errors['license'] = 'Veuillez renseigner votre n° de license FFTIR';
    } elseif (!preg_match($regexLicense, $license)) {
        $errors['license'] = 'La licence n\'est pas valide !';
    }
    
    //verif password
    if (isset($_POST['password']) && isset($_POST['passwordConfirm'])){
        $password = trim(htmlspecialchars($_POST['password']));
        $passwordConfirm = trim(htmlspecialchars($_POST['passwordConfirm']));
    }
    if ($password == $passwordConfirm) {
       password_hash($password, PASSWORD_BCRYPT);
   } else {
       $errors['password'] = 'Les mots de passe ne correspondent pas';
   }
   }

if ($isSubmitted && count($errors) == 0){
        $passwordHash = password_hash($password, PASSWORD_BCRYPT);
        $users = new User (0, $_POST['firstname'], $_POST['lastname'], $_POST['license'], $passwordHash);
        if(!$users->verifyLicense()){
            if($users->create()){
                $createUsersSuccess = true;
            } else {
        $errors['license'] = 'Ce numéro de licence est déjà utilisé, veuillez contacter l\'administateur.';
            }
        }
    }

    require_once dirname(__FILE__).'\..\view\SignUp.php';