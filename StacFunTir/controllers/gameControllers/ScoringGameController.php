<?php 
session_start();
require_once dirname(__FILE__).'\..\..\models\Users.php';
require_once dirname(__FILE__).'\..\..\models\Sessions.php';
require_once dirname(__FILE__).'\..\..\models\Games.php';
require_once dirname(__FILE__).'\..\HeaderController.php';

//init de variables de points
// le total des points sera divisé par le temps
// ex: 10pts
$pointsOnDrill = '';
// valeur entière dont 1pt=3s
$nonshootOnDrill = '';
// temps donné en secondes au centième près
$timeOnDrill = '';


// récupération des utilisateurs selectionnés
if(!empty($_POST['users'])){
    foreach($_POST['users'] as $userId){
        //var_dump($user);
        $game = new Game(0,'','','','', $userId, $id_session);
        $gameInfos=$game->createGame();
        var_dump( $game);
        header('Location: \..\controllers\gameControllers\ScoringGameController.php?userId='.$userId);
    }
}

require dirname(__FILE__).'\..\..\views\gameViews\ScoringGame.php';
require_once dirname(__FILE__).'\..\FooterController.php';