<?php
session_start();

require_once dirname(__FILE__).'\HeaderController.php';
require_once dirname(__FILE__).'\..\model\Users.php';


//validation des champs 
$license = $password = '';
$errors = [];

if(!empty($_POST['license'])){
    $users = new User(0, '', '', $_POST['license'], $_POST['password']);
    var_dump($users);
    $userLicenseTest = $users->verifyLicense();
    if(!$userLicenseTest){
        $errors['license'] = 'Le numéro de licence n\'est pas valide';
    }else{
        $userPasswordTest = $users->verifyPasword();
        var_dump($userPasswordTest);
        if(password_verify ($_POST['password'], $userPasswordTest->password)){
            $userConnectingSuccess = true;
        }
    }         
}



// Ecriture du cookie contenant les éléments de connexion durant 24h
// setcookie('$license', '$password', time() + 12*3600, null, null, false, true);

require_once dirname(__FILE__).'\..\view\SignIn.php';