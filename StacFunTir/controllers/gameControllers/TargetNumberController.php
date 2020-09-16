<?php
session_start();
require_once dirname(__FILE__).'\..\..\models\Sessions.php';
require_once dirname(__FILE__).'\..\..\models\Games.php';
require_once dirname(__FILE__).'\..\HeaderController.php';

$regexTargets = "/^[0-9]{1,}$/";
$date= $numberoftargets= '';
$isSubmitted = false;
$createSessionSuccess =false;
$errors = [];

// verif envoi du nombre de cibles
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $isSubmitted = true;
    var_dump($_POST['numberoftargets']);
    if (isset($_POST['numberoftargets'])){
        $numberoftargets = trim(htmlspecialchars($_POST['numberoftargets']));
    }
}
if($isSubmitted && count($errors) == 0){
    $session = new Session(0, $_POST['numberoftargets']);
    var_dump($session);
    if($session->createSession()){
        $createSessionSuccess =true;
        header('Location: \..\controllers\gameControllers\SelectingListController.php?id='.$_SESSION['user']['license']);
    }
}

require_once dirname(__FILE__).'\..\..\views\gameViews\TargetNumber.php';
require_once dirname(__FILE__).'\..\FooterController.php';