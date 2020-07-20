<?php include 'header.php'; ?>

<!-- \\\\\ NAVIGATION BAR ///// -->
<nav class="navbar fixed-top navbar-expand-md col-12 navbar-dark bg-dark p-2 text-md-center">
    <a href="#" class="navbar-brand">USER</a>
    <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarMenu">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarMenu">
        <ul class="navbar-nav">
            <li class="nav-item m-2">
                <div class="dropdown">
                    <a class="nav-link btn" role="button" type="button" data-toggle="dropdown" aria-expanded="false">Fun
                        Tir</a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                        <li><a class="dropdown-item" id="eventspage" type="button">Events</a></li>
                        <li><a class="dropdown-item" id="memberslist" type="button">Membres</a></li>
                        <li><a class="dropdown-item" id="shooterpage" type="button">Start</a></li>
                    </ul>
                </div>
            </li>
            <li class="nav-item m-2">
                <a class="nav-link" href="" id="signupBtn" role="button" class="btn">Inscription</a>
            </li>
            <li class="nav-item m-2">
                <a class="nav-link" href="" id="connectBtn" role="button" class="btn">Connexion</a>
            </li>
            <li class="nav-item m-2">
                <div class="dropdown">
                    <a class="nav-link btn" role="button" type="button" data-toggle="dropdown"
                        aria-expanded="false">Profil</a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                        <li><a class="dropdown-item" id="profileInfo" type="button">Renseignements</a></li>
                        <li><a class="dropdown-item" id="progressResults" type="button">Progression</a></li>
                    </ul>
                </div>
            </li>
            <li class="nav-item m-2">
                <a href="<?php session_destroy(); ?>" class="nav-link">Déconnexion</a>
            </li>
        </ul>
    </div>
</nav>

<!-- \\\\\ HEADER TITLE ///// -->
<div class="container-fluid col-md-12 p-0">
    <div class="row">
        <header class="headerbanner bg-light">
            <img class="logoSTAC img-fluid justify-conter-center expand-md-8" src="/assets/img/STAC_logo-1000x512.png"
                alt="logoSTAC">
        </header>
    </div>

</div>

<?php
    
    include 'infosstac.php';
    include 'funtir/events.php';
    include 'funtir/membres.php';
    include 'funtir/shooterpage.php';
    include 'connexion.php';
    include 'inscription.php';
    include 'footer.php';
?>