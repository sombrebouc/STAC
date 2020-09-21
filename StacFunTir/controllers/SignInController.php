<?php
session_start();
require_once dirname(__FILE__).'/../models/Users.php';
require_once dirname(__FILE__).'/../models/Sessions.php';
require_once dirname(__FILE__).'/../models/Games.php';
require_once dirname(__FILE__).'/HeaderController.php';

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
                $_SESSION['user']['firstname'] = $connecting->firstname;
                $_SESSION['user']['lastname'] = $connecting->lastname;
                $_SESSION['user']['license'] = $connecting->license;
                $userConnectingSuccess = true;
                header("Refresh: 1;url=/../controllers/SecurityInfoController.php");
            }else{
                $errors['password']= "Le mot de passe n' est pas valide";
            }        
        }else{
            $errors['userConnectingSuccess'] = "La connexion a échoué";
        }
    }
}
require_once dirname(__FILE__).'/../views/SignIn.php';
require_once dirname(__FILE__).'/FooterController.php';