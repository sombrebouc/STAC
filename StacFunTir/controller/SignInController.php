<?php
require_once dirname(__FILE__).'\HeaderController.php';
require_once dirname(__FILE__).'\..\model\Users.php';

$id_session = session_id();

$userConnectingSuccess = false;
$license = $password = '';
$errors = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(!empty($_POST['license'])){
        $license = $_POST['license'];
        $password = $_POST['password'];
        $users = new User('', '', '', $license, $password);
        $connecting = $users->readingConnect($license);
        if(password_verify ($password, $connecting->password)){
            $_SESSION['user']['auth'] = true;
            $_SESSION['user']['id'] = $connecting->id;
            $_SESSION['user']['firstname'] = $connecting->firstname;
            $_SESSION['user']['lastname'] = $connecting->lastname;
            $_SESSION['user']['license'] = $connecting->license;
            $userConnectingSuccess = true;
            header('Location: \..\view\SignIn.php?id='.$_SESSION['user']['license']);
        }
        else{
            echo 'no';
        }
        // $userLicenseTest = $users->verifyLicense();
        // if(!$userLicenseTest){
        //     $errors['license'] = 'Le numéro de licence n\'est pas valide';
        // }else{
        //     $userPasswordTest = $users->verifyPasword();
        //     var_dump($userPasswordTest);
        //     if(password_verify ($_POST['password'], $userPasswordTest->password)){
        //         $userConnectingSuccess = true;
        //     }
        // }         
    }
}


// Ecriture du cookie contenant les éléments de connexion durant 24h
// setcookie('$license', '$password', time() + 12*3600, null, null, false, true);

require_once dirname(__FILE__).'\..\view\SignIn.php';