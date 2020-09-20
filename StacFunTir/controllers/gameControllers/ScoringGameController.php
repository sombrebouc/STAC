<?php 
session_start();
require_once dirname(__FILE__).'/../../models/Users.php';
require_once dirname(__FILE__).'/../../models/Sessions.php';
require_once dirname(__FILE__).'/../../models/Games.php';
require_once dirname(__FILE__).'/../HeaderController.php';


//init de variables de points
// le total des points sera divisé par le temps
// ex: 10pts
$pointsOnDrill = '';
// valeur entière dont 1pt=3s
$nonshootOnDrill = '';
// temps donné en secondes au centième près
$timeOnDrill = '';
$user = new User();
$userRef=$user->readAllUsers();
// init de la variable cachée dans le form ScoringGame.php
$hiddenUserTurn = 1;

// ===== COUNT & INCREMENT USERS  =====//

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $PlayersBySession = sizeof($userRef);
        var_dump($PlayersBySession);

    for($hiddenUserTurn=1; $hiddenUserTurn<=$PlayersBySession; $hiddenUserTurn ++){
        if($_POST['ScoreCalculator']){
            var_dump($hiddenUserTurn);

        }
    }
//}else{
//    header('refresh:1; Location: ScoringGameController.php?userId='.$userId);
}


// ===== CALCUL PASS ===== //

// je vérifie l'envoi de mon formulaire
//  if(isset($_POST['ScoreCalculator'])){
//      var_dump($_POST['ScoreCalculator']);
//          $drillPenalty = $_POST['nonshootOnDrill']*(3*100);
//          // je récupère le temps en sec que je convertie au centième
//          $drillTime = $_POST['timeOnDrill']*(100);
//          // je récupère le score que je multiplie par 100
//          $drillScore = $_POST['pointsOnDrill']*(100);
//          // je divise le nombre de points par le temps total au centième
//          // je divise mon ratio par 100 pour obtenir le ratio final
//          $drillUserRatio = ($drillScore/($drillTime + $drillPenalty));
//          var_dump($drillUserRatio);
//          // récupération des utilisateurs selectionnés
//              if(!empty($_POST['users'])){
//                  foreach($_POST['users'] as $userId){
//                      //var_dump($user);
//                      $game = new Game(null,null,null,null,null, $userId, $id_session);
//                      $gameInfos=$game->updateGame();
//                      //var_dump( $game);
//                      header('refresh:1; Location: /ScoringGameController.php?userId='.$userId);
//                  }
//              }
//  }

require dirname(__FILE__).'/../../views/gameViews/ScoringGame.php';
require_once dirname(__FILE__).'/../FooterController.php';