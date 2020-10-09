<?php
require_once dirname(__FILE__).'/../models/Users.php';
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>STAC</title>

    <link rel="stylesheet" href="/../../assets/css/bootstrap.css">
    <link rel="stylesheet" href="/../../assets/css/style.css">
    <script src="https://www.google.com/recaptcha/api.js?render=6Ldz79AZAAAAAGFJR_FhphUaZQSBhFbirSUC5vCi"></script>
    <script src="\..\assets\js\bootstrap.bundle.js"></script>

    <?php
        if(isset($_POST) && isset($_POST['SignInBtn'])){
            $secretKey = '6Ldz79AZAAAAAJ99x-Y4TJGPLVWJhIiGIYibz7A_';
            $token = $_POST['g-token'];
            $ip = $_SERVER['REMOTE_ADDR'];
            $url = "https://www.google.com/recaptcha/api/siteverify?secret=".$secretKey."&response=".$token."&remoteip=".$ip;
            $request = file_get_contents($url);
            $response = json_decode($request);
        }
    ?>

</head>

<body class="background">

    <nav class="navbar navbar-expand-xl navbar-dark bg-dark p-1 text-md-center shadow-sm">

        <div class="container-fluid">
        
        <div class="row col-xs-12 col-sm-12 col-md-3 shadow-sm rounded">
                <h5 class="nav-link pb-1 pt-1  mt-1 mb-1 text-light align-middle" style="background-color:#607278; border-radius:5px; border:solid 1px #282929" target="_blank" href="https://www.fftir.org/">
                    <img src="\..\assets\img\1200px-FFTir_Logo.png" width="75" height="35"
                        class="d-inline-block pr-4" alt="" loading="lazy"> <strong><em>Fédération Française de Tir</em></strong>
                </h5>
        </div>
        <div class="row col-xs-12 col-sm-12 col-md-9">
            <a href="#" class="navbar-brand text-center col-12">Licence FFTIR n° <?= $_SESSION['user']['license'] ?? " ...";?> </a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarMenu">
                <span class="navbar-toggler-icon" role="button"></span>
            </button>
            <div class="collapse navbar-collapse col-12 justify-content-center" id="navbarMenu">
                <ul class="navbar-nav">
                    <li class="nav-item m-1">
                        <a class="nav-link" href="/../controllers/SecurityInfoController.php" id="securityInfo"
                            role="button" class="btn" name="infosBtn">Infos Club</a>
                    </li>
                    <?php if(isset($_SESSION['user']['license']) && ($_SESSION['user']['id_roles']) == 1){ ?>
                    <li class="nav-item m-1">
                        <a class="nav-link" href="/../controllers/UsersListController.php" id="userslist" role="button"
                            class="btn" name="membersBtn">Membres</a>
                    </li>
                    <li class="nav-item m-1">
                        <a class="nav-link beginButton"
                            href="/../controllers/gameControllers/TargetNumberController.php" id="gameLauncher"
                            role="button" class="btn" name="startBtn">Démarrer</a>
                    </li>
                    <?php } ?>
                    <?php if(!isset($_SESSION['user']['license'])){ ?>
                    <li class="nav-item m-1">
                        <a class="nav-link" href="/../controllers/SignUpController.php" id="signupBtn" role="button"
                            class="btn" name="signUpBtn">Inscription</a>
                    </li>
                    <li class="nav-item m-1">
                        <a class="nav-link" href="/../controllers/SignInController.php" class="btn"
                            name="signInBtn">Connexion</a>
                    </li>
                    <?php }else{ ?>
                    <li class="nav-item m-1">
                        <a class="nav-link" href="/../controllers/UsersProfileController.php" id="profileUser"
                            role="button" class="btn" name="profileBtn">Profil</a>
                    </li>
                    <li class="nav-item m-1">
                        <a class="nav-link" href="/../controllers/gameControllers/FollowingResultsController.php"
                            id="gameResults" role="button" class="btn" name="resultsBtn">Résultats</a>
                    </li>
                    <li class="nav-item m-1">
                        <a class="nav-link disconnectButton"
                            href="/../controllers/SignOutController.php?signOutBtn=true" role="button"
                            class="btn bg-danger" name="signOutBtn">Déconnexion</a>
                    </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
        </div>
    </nav>