<?php 
session_start();
require_once dirname(__FILE__).'\..\..\models\Users.php';
require_once dirname(__FILE__).'\..\..\models\Games.php';
require_once dirname(__FILE__).'\..\HeaderController.php';

if($createGameSuccess == true){
    $user = new User();
    $listUsers=$user->readAll();
    if(!empty($_POST['users'])) {
        foreach($_POST['users'] as $idItem) {
           //TODO: Code ici
           echo 'Vous avez choisi '.$idItem;
        }
    }
}

require dirname(__FILE__).'\..\..\views\gameViews\SelectingList.php';
require_once dirname(__FILE__).'\..\FooterController.php';