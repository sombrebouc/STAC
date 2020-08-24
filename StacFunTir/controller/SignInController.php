<?php
// Connexion à la session
session_start(); 

// Variables nécessaires à l'écriture des cookies
$license='';
$password='';
// Ecriture du cookie contenant les éléments de connexion durant 24h
setcookie('$license', '$password', time() + 24*3600, null, null, false, true);

// Vérification du statut de l'utilisateur en cours de connexion
if (isset($_SESSION['roles']) AND $_SESSION['roles'] == "orga") {
    echo '<script language="Javascript"> alert("Bonjour organisateur") </script>';
}

else {
    echo '<script language="Javascript"> alert("Bonjour utilisateur") </script>';
}

//Récupération du prénom du licencié


require_once dirname(__FILE__).'\HeaderController.php';
require_once dirname(__FILE__).'\..\model\Users.php';
require_once dirname(__FILE__).'\..\view\SignIn.php';