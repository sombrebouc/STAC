<?php
session_start();
require_once dirname(__FILE__).'\..\models\Users.php';
require_once dirname(__FILE__).'\..\models\Sessions.php';
require_once dirname(__FILE__).'\..\models\Games.php';
require_once dirname(__FILE__).'\HeaderController.php';
// Déconnexion de la session

if (isset($_GET['signOutBtn'])) {
    // vide le tableau session
    $_SESSION['user'] = [];
    setcookie('user', '', time() - 3600, '/');
    // vide la variable session
    unset($_SESSION['user']);
    // détruit la session
    session_destroy();
    header('refresh:1; \controllers\SignInController.php');
}

require_once dirname(__FILE__).'\..\views\SignOut.php';
require_once dirname(__FILE__).'\FooterController.php';