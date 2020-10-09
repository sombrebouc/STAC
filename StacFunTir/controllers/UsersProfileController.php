<?php
session_start();
require_once dirname(__FILE__).'/../models/Users.php';
require_once dirname(__FILE__).'/../models/Sessions.php';
require_once dirname(__FILE__).'/../models/Games.php';
require_once dirname(__FILE__).'/HeaderController.php';
   

// ==== Récupération et affichage du profil utilisateur
if(isset($_SESSION['user']['id'])){
    //var_dump($_SESSION['user']);
    $id = (int) $_SESSION['user']['id'];
    $user = new User($id,'', '', '', '');
    $userInfos = $user->readOneUser();
    //var_dump($userInfos);
}

require_once dirname(__FILE__).'/../views/UsersProfile.php';
require_once dirname(__FILE__).'/FooterController.php';