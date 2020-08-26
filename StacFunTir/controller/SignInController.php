<?php
// Connexion à la session
session_start(); 

require_once dirname(__FILE__).'\HeaderController.php';
require_once dirname(__FILE__).'\..\model\Users.php';

// Variables nécessaires à l'écriture des cookies
$license = $password ='';

// Ecriture du cookie contenant les éléments de connexion durant 24h
setcookie('$license', '$password', time() + 12*3600, null, null, false, true);

require_once dirname(__FILE__).'\..\view\SignIn.php';
session_write_close();