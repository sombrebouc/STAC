<?php session_start(); 

// Variables nécessaires à l'écriture des cookies
$license='';
$password='';
// Ecriture du cookie contenant les éléments de connexion durant 24h
setcookie('$license', '$password', time() + 24*3600, null, null, false, true);
//Récupération du prénom du licencié
$userSignIn(){
    
}

require_once dirname(__FILE__).'\HeaderController.php';
require_once dirname(__FILE__).'\..\model\Users.php';
require_once dirname(__FILE__).'\..\view\SignIn.php';