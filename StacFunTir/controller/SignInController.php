<?php

require_once dirname(__FILE__).'\HeaderController.php';
require_once dirname(__FILE__).'\..\model\Users.php';


//validation des champs 
$isSubmitted = false;
$license = $password = '';
$errors = [];


if ($isSubmitted && count($errors) == 0){
    if($users->verifyLicense()){
        $connectUserSuccess = true;
    }else{
        $errors['connectUserSuccess'] = 'La connexion a échoué';
    }
}

// Ecriture du cookie contenant les éléments de connexion durant 24h
// setcookie('$license', '$password', time() + 12*3600, null, null, false, true);

require_once dirname(__FILE__).'\..\view\SignIn.php';