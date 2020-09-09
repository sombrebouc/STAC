<?php
// Connexion à la session
session_start(); 

require_once dirname(__FILE__).'\HeaderController.php';
require_once dirname(__FILE__).'\..\model\Users.php';


//validation des champs 
$isSubmitted = false;
$license = $password = '';
$errors = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $connectionVerify_sql = 'SELECT * FROM users WHERE license=$license AND password=$password';
    var_dump('La BDD se connecte');
    if (isset($_POST['license']) && isset($_POST['password']) == 'connecting'){
        var_dump('le formulaire est rempli et envoyé');
        
        if($_POST['license'] == $license && $_POST['password'] == $password){
            var_dump('Vous êtes bien connecté');
        }
        else{
            var_dump('plantage');
                return false;
        }
    }
}

// Ecriture du cookie contenant les éléments de connexion durant 24h
// setcookie('$license', '$password', time() + 12*3600, null, null, false, true);

require_once dirname(__FILE__).'\..\view\SignIn.php';