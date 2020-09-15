<?php
session_start();
require_once dirname(__FILE__).'\..\..\models\Users.php';
require_once dirname(__FILE__).'\..\HeaderController.php';

$regexTargets = "/^[0-9]{1,}$/";
$date = $numberoftargets = $id_games = '';
$isSubmitted = false;
$errors = [];

// verif envoi du nombre de cibles
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $isSubmitted = true;
    var_dump($_POST['numberoftargets']);
    if (isset($_POST['numberoftargets'])){
        $numberoftargets = trim(htmlspecialchars($_POST['numberoftargets']));
    }

}


require_once dirname(__FILE__).'\..\..\views\gameViews\TargetNumber.php';
require_once dirname(__FILE__).'\..\FooterController.php';