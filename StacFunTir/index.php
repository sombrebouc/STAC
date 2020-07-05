<?php include 'header.php';?>



<!-- \\\\\ NAVIGATION BAR ///// -->
<nav class="navbar fixed-top navbar-expand-md col-12 navbar-dark bg-dark p-2">
    <a href="#" class="navbar-brand"><?= $userlogin ?></a>
    <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarMenu">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarMenu">
    <ul class="navbar-nav">
        <li class="nav-item m-auto">
            <a class="nav-link" id="modalInscription" href="#modal-container-inscritpion" role="button" class="btn" data-toggle="modal">Inscription</a>
        </li>
        <li class="nav-item m-auto">
            <a class="nav-link" id="modalConnexion" href="#modal-container-connexion" role="button" class="btn" data-toggle="modal">Connexion</a>
        </li>
        <li class="nav-item m-auto">
            <a href="#" class="nav-link">Déconnexion</a>
        </li>
    </ul>
    </div>
</nav>
<!-- // Modales // -->

<!-- =====\\= CONNEXION =//===== -->
<div class="modal fade" id="modal-container-connexion" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content bg-success">
			<div class="modal-header">
				<h5 class="modal-title" id="myModalLabel">Connexion</h5> 
				<button type="button" class="close" data-dismiss="modal">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">
                <form action="GET">
                    <div class="inputBox p-1">
                        <input type="text" name="" required="">
                        <label class="m-right-2 text-lowercase" for="">Utilisateur</label>
                    </div>
                    <div class="inputBox p-2">
                        <input type="password" name="" required="">
                        <label class="m-right-2 text-lowercase" for=""">Mot de passe</label>
                    </div>
                </form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-dark">Valider</button> 
				<button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
			</div>
		</div>
	</div>
</div>

<!-- =====\\= INSCRIPTION =//===== -->
<div class="modal fade" id="modal-container-inscritpion" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="myModalLabel">Inscription</h5> 
				<button type="button" class="close" data-dismiss="modal">
					<span aria-hidden="true">X</span>
				</button>
			</div>
			<div class="modal-body">
				...
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-dark">Valider</button> 
				<button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
			</div>
		</div>
	</div>
</div>

<!-- \\\\\ HEADER TITLE ///// -->
<div class="container-fluid col-md-12 p-0">
    <div class="row">
        <header class="headerbanner bg-dark">
            <img class="logoSTAC img-fluid expand-md-8" src="/assets/img/STAC_logo-1000x512.png" alt="logoSTAC">
        </header>
    </div>

<!-- \\\\\ CONTENU INFORMATIONS ///// -->
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="containerInfosFftir p-3 m-3 bg-success text-light col-md-8 justify-content-center rounded">
            <h1 class="titlebody m-1 p-1 text-uppercase bg-dark text-light rounded">FFTir Infos</h1>
            <h3 class="p-3">Le Tir Sportif</h3>
            <div class="p-3">
                <p>
                    Vous venez d'adhérer à la Fédération Française de Tir ; soyez le bienvenu dans ce sport qui,
                    nous en
                    sommes persuadés, vous apportera beaucoup de plaisir ! Que vous vous dirigiez vers du loisir ou
                    de la
                    compétition, la pratique du Tir sportif nécessite de votre part le respect de règles intangibles
                    de
                    sécurité et la connaissance des principaux fondamentaux.
                    Cette présente rubrique a pour objet de vous guider dans vos premiers pas de tireur et de faire
                    connaissance avec La Fédération Française de Tir.
                    Vous y trouverez des informations réglementaires comme les règles de sécurité édictées par la
                    FFTir à
                    respecter en toutes circonstances et le dispositif réglementaire du carnet de tir. Vous pourrez
                    également découvrir les différentes disciplines proposées par la FFTir qu'il vous sera possible
                    de
                    pratiquer et ce, en fonction des installations de l'association dont vous venez de devenir
                    adhérent.
                    Vous aurez accès à diverses informations concernant le matériel que vous pourrez utiliser ainsi
                    que les
                    principes élémentaires et incontournables de la technique de base. Vous pourrez également
                    découvrir
                    l'histoire et l'organisation de la Fédération Française de Tir et un lexique destiné à vous
                    familiariser
                    avec le jargon du Tir sportif.
                    Vous faites maintenant partie de la Fédération Française de Tir. À ce titre et en toutes
                    circonstances,
                    vous vous devez d'en respecter l'éthique et les valeurs. Pour en savoir plus, n'hésitez pas à
                    télécharger le manuel d'initiation du tireur sportif.
                </p>
                <p class="p-3">Le Président de la FFTir</p>
                <p class="p-3">Philippe Crochard</p>
            </div>
        </div>
    </div>
</div>

</div>


<?php include 'footer.php';?>