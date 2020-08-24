<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title><?php $title ?></title>

    <link rel="stylesheet" href="..\..\assets\css\bootstrap.css">
    <link rel="stylesheet" href="..\..\assets\css\style.css">
</head>

<body class="background">

<nav class="navbar fixed-top navbar-expand-md col-12 navbar-dark bg-dark p-2 text-md-center">
    <a href="#" class="navbar-brand"><?php $user ?></a>
    <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarMenu">
        <span class="navbar-toggler-icon" role="button"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarMenu">
        <ul class="navbar-nav">
            <li class="nav-item m-2">
            <a class="nav-link" href="\..\controller\UsersListController.php" id="userslist" role="button" class="btn">Membres</a>
            </li>
            <li class="nav-item m-2">
            <a class="nav-link" href="\..\controller\SecurityInfoController.php" id="securityInfo"  role="button" class="btn">Sécurité</a>
            </li>
            <li class="nav-item m-2">
                <a class="nav-link" href="\..\controller\SignUpController.php" id="signupBtn" role="button" class="btn">Inscription</a>
            </li>
            <li class="nav-item m-2">
                <a class="nav-link" href="\..\controller\SignInController.php" id="signinBtn" role="button" class="btn">Connexion</a>
            </li>
        </ul>
    </div>
</nav>
