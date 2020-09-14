<?php
require_once dirname(__FILE__).'\..\models\Users.php';
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8"/>
    <title>STAC</title>

    <link rel="stylesheet" href="\..\..\assets\css\bootstrap.css">
    <link rel="stylesheet" href="\..\..\assets\css\style.css">
</head>

<body class="background">

<nav class="navbar fixed-top navbar-expand-md col-12 navbar-dark bg-dark p-1 text-md-center shadow-sm">
    <a href="#" class="navbar-brand pl-1 pr-2">N°<?= " ".$_SESSION['user']['license'] ?? " ...";?></a>
    <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarMenu">
        <span class="navbar-toggler-icon" role="button"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarMenu">
        <ul class="navbar-nav">
            <li class="nav-item m-1">
                <a class="nav-link" href="\..\controllers\SecurityInfoController.php" id="securityInfo"  role="button" class="btn" name="infosBtn">Infos Club</a>
            </li>
            <?php if(isset($_SESSION['user']['license']) && ($_SESSION['user']['id_roles']) == 1){ ?>
            <li class="nav-item m-1">
                <a class="nav-link" href="\..\controllers\UsersListController.php" id="userslist" role="button" class="btn" name="membersBtn">Membres</a>
            </li>
            <li class="nav-item m-1">
                <a class="nav-link beginButton" href="\..\controllers\gameControllers\SelectingListController.php" id="gameLauncher" role="button" class="btn" name="startBtn">Démarrer</a>
            </li>
            <?php } ?>
            <?php if(!isset($_SESSION['user']['license'])){ ?>
            <li class="nav-item m-1">
                <a class="nav-link" href="\..\controllers\SignUpController.php" id="signupBtn" role="button" class="btn" name="signUpBtn">Inscription</a>
            </li>
            <li class="nav-item m-1">
                <a class="nav-link" href="\..\controllers\SignInController.php" id="signinBtn" role="button" class="btn" name="signInBtn">Connexion</a>
            </li>
            <?php }else{ ?>
            <li class="nav-item m-1">
                <a class="nav-link" href="\..\controllers\UsersProfileController.php" id="profileUser" role="button" class="btn" name="profileBtn">Profil</a>
            </li>
            <li class="nav-item m-1">
                <a class="nav-link" href="\..\controllers\gameControllers\FollowingResultsController.php" id="gameResults" role="button" class="btn" name="resultsBtn">Résultats</a>
            </li>
            <li class="nav-item m-1">
                <a class="nav-link disconnectButton" href="\..\controllers\SignOutController.php?signOutBtn=true" id="signoutBtn" role="button" class="btn bg-danger" name="signOutBtn">Déconnexion</a>
            </li>
            <?php } ?>
        </ul>
    </div>
</nav>
