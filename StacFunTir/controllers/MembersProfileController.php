<?php
session_start();
require_once dirname(__FILE__).'/../models/Users.php';
require_once dirname(__FILE__).'/../models/Sessions.php';
require_once dirname(__FILE__).'/../models/Games.php';
require_once dirname(__FILE__).'/HeaderController.php';
   
// ==== Récupération et affichage du membre par le panneau Admin
if(isset($_GET['id'])){
    $id = (int) $_GET['id'];
    $user = new User($id,'', '', '', '');
    $memberInfos = $user->readOneUser();
    //var_dump($memberInfos->lastname);
}

require_once dirname(__FILE__).'/../views/MembersProfile.php';
require_once dirname(__FILE__).'/FooterController.php';