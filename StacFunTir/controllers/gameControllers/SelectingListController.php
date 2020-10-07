<?php 
session_start();
require_once dirname(__FILE__).'/../../models/Users.php';
require_once dirname(__FILE__).'/../../models/Sessions.php';
require_once dirname(__FILE__).'/../../models/Games.php';

    //preparation de mon tableau d'utilisateurs
    $user = new User();
    $listUsers=$user->readAllUsers();
    $id_session = $_GET['id_session'];

    // récupération des utilisateurs selectionnés
    if(!empty($_POST['users'])){
        foreach($_POST['users'] as $userId){
            var_dump($_POST['users']);
            $game = new Game( 0, 0, 0, 0, 0, $userId, $id_session);
            $game->createGame();
            var_dump($game);
            //header('Location:/controllers/gameControllers/ScoringGameController.php?id_session='.$id_session);
        }
    }
require_once dirname(__FILE__).'/../HeaderController.php';
require dirname(__FILE__).'/../../views/gameViews/SelectingList.php';
require_once dirname(__FILE__).'/../FooterController.php';