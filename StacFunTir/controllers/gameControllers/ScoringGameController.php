<?php 
session_start();
require_once dirname(__FILE__).'/../../models/Users.php';
require_once dirname(__FILE__).'/../../models/Sessions.php';
require_once dirname(__FILE__).'/../../models/Games.php';


//init de variables de points
// le total des points sera divisé par le temps
// ex: 10pts
$pointsOnDrill = '';
// valeur entière dont 1pt=3s
$nonshootOnDrill = '';
// temps donné en secondes au centième près
$timeOnDrill = '';
// init de la variable cachée dans le form ScoringGame.php
$hiddenUserTurn = 1;
// ===== COUNT & INCREMENT USERS  =====//
var_dump($_POST);
if(isset($_POST['users']))
    {
      // On assigne notre variable $_POST['users']
      $nombre=$_POST['users'];
      
      /* On crée une variable qui comptera le nombre de
      checkbox choisis grâce à la fonction count() */
      $totalUsers=count($nombre);
      
      // On affiche le résultat
      $usersInGame =($totalUsers<=1) ? "" : "s"; // astuce pour le singulier ou le pluriel
      echo "Vous avez sélectionné <strong>".$totalUsers."</strong> critère".$usersInGame;
      
      /* Une petite boucle pour afficher les valeurs qu'on 
          a sélectionné dans notre formulaire */
      for( $player=0; $player<$totalUsers; $player++ )
      {
        echo "<br />",$player+1,"e choix : ".$nombre[$player];
      }
    }
    //else
    //{
    //  echo "Veuillez sélectionner un critère";
    //}

// if($_SERVER['REQUEST_METHOD'] === 'POST'){
//     $PlayersBySession = count($usersOnGame);
//         var_dump($PlayersBySession);
// 
//     for($hiddenUserTurn=1; $hiddenUserTurn<=$PlayersBySession; $hiddenUserTurn ++){
//         if($_POST['ScoreCalculator']){
//             var_dump($hiddenUserTurn);
// 
//         }
//     }
// }else{
//     echo 'je suis dans le else';
//     //header('Refresh:1;url: /controllers/gameControllers/ScoringGameController.php?userId='.$userId);
// }


// ===== CALCUL PASS ===== //

//je vérifie l'envoi de mon formulaire
if(isset($_POST['ScoreCalculator'])){
    var_dump($_POST['ScoreCalculator']);
        $drillPenalty = $_POST['nonshootOnDrill']*(3*100);
        // je récupère le temps en sec que je convertie au centième
        $drillTime = $_POST['timeOnDrill']*(100);
        // je récupère le score que je multiplie par 100
        $drillScore = $_POST['pointsOnDrill']*(100);
        // je divise le nombre de points par le temps total au centième
        // je divise mon ratio par 100 pour obtenir le ratio final
        $drillUserRatio = ($drillScore/($drillTime + $drillPenalty));
        var_dump($drillUserRatio);
        // récupération des utilisateurs selectionnés
            if(!empty($_POST['users'])){
                //foreach($_POST['users'] as $userId){
                    //var_dump($_POST['users']);
                    $game = new Game(0,0,0,0,0, $userId, $id_session);
                    $gameInfos=$game->updateGame();
                    //var_dump( $game);
                    //header('Location: /controllers/gameControllers/ScoringGameController.php?userId='.$userId);
                //}
            }
}

require_once dirname(__FILE__).'/../HeaderController.php';
require dirname(__FILE__).'/../../views/gameViews/ScoringGame.php';
require_once dirname(__FILE__).'/../FooterController.php';