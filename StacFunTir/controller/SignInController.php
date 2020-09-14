<?php
session_start();
require_once dirname(__FILE__).'\..\model\Users.php';
require_once dirname(__FILE__).'\HeaderController.php';

//$id_session = session_id();

$isSubmitted = false;
$userConnectingSuccess = false;
$license = $password = $id_roles = '';
$errors = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['connecting'])){
    $isSubmitted = true;

    if(!empty($_POST['license'])){
        $license = $_POST['license'];
        $password = $_POST['password'];
        $users = new User();
        $users->license = $license;
        $users->password = $password;
        $users->id_roles = $id_roles;
        $connecting = $users->readingConnect();
        if($connecting){
            if(password_verify ($password, $connecting->password)){
                $_SESSION['user']['auth'] = true;
                $_SESSION['user']['id'] = $connecting->id;
                $_SESSION['user']['id_roles'] = $connecting->id_roles;
                //$_SESSION['user']['firstname'] = $connecting->firstname;
                //$_SESSION['user']['lastname'] = $connecting->lastname;
                $_SESSION['user']['license'] = $connecting->license;
                $userConnectingSuccess = true;
                header('Location: \..\controller\SignInSuccessController.php?id='.$_SESSION['user']['license']);
            }        
        }
    }
}
require_once dirname(__FILE__).'\..\view\SignIn.php';
require_once dirname(__FILE__).'\FooterController.php';



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
// Ecriture du cookie contenant les éléments de connexion durant 24h
// setcookie('$license', '$password', time() + 12*3600, null, null, false, true);
