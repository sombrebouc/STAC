<?php
// Connexion à la session
session_start(); 

require_once dirname(__FILE__).'\HeaderController.php';
require_once dirname(__FILE__).'\..\model\Users.php';

$license = '';
$password = '';

if (isset($_POST['license']) && isset($_POST['password'])){
    echo ($_POST['license']);
    echo ($_POST['password']);
}

/*
if ($isSubmitted && count($errors)== 0) {
    $passwordHash = password_hash($password, PASSWORD_DEFAULT);
    $users = new User (0, $_POST['firstname'], $_POST['lastname'], $_POST['license'], $passwordHash);

    if($users->create())
    {
       
        $createUsersSuccess = true;
    }
}

$userId = new User;
$userId -> verifyUser($_POST['license'],$_POST['password']);

// Ecriture du cookie contenant les éléments de connexion durant 24h
setcookie('$license', '$password', time() + 12*3600, null, null, false, true);
*/
require_once dirname(__FILE__).'\..\view\SignIn.php';