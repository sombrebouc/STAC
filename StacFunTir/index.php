<?php include 'header.php';?>



<!-- \\\\\ NAVIGATION BAR ///// -->
<nav class="navbar fixed-top navbar-expand-md col-12 navbar-dark bg-dark p-2 text-md-center">
    <a href="#" class="navbar-brand">UTILISATEUR</a>
    <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarMenu">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarMenu">
    <ul class="navbar-nav">
        <li class="nav-item m-2">
            <a href="#" class="nav-link">Fun-Tir</a>
        </li>
        <li class="nav-item m-2">
            <a class="nav-link" id="modalInscription" href="#modal-container-inscritpion" role="button" class="btn" data-toggle="modal">Inscription</a>
        </li>
        <li class="nav-item m-2">
            <a class="nav-link" id="modalConnexion" href="#modal-container-connexion" role="button" class="btn" data-toggle="modal">Connexion</a>
        </li>
        <li class="nav-item m-2">
            <a href="#" class="nav-link">Déconnexion</a>
        </li>
    </ul>
    </div>
</nav>

<!-- // Modales // -->
<!-- =====\\= CONNEXION =//===== -->
<div class="modal fade" id="modal-container-connexion" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog  modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header bg-secondary">
				<h5 class="modal-title" id="myModalLabel">Connexion</h5> 
				<button type="button" class="close" data-dismiss="modal">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body bg-light">
                <form action="GET">
                    <div class="inputBox p-2">
                        <input type="text" name="" required="">
                        <label class="m-right-2 text-lowercase" for="">Utilisateur</label>
                    </div>
                    <div class="inputBox p-2">
                        <input type="password" name="" required="">
                        <label class="m-right-2 text-lowercase" for=""">Mot de passe</label>
                    </div>
                </form>
			</div>
			<div class="modal-footer bg-secondary">
				<button type="button" class="btn btn-dark">Valider</button> 
				<button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
			</div>
		</div>
	</div>
</div>

<!-- =====\\= INSCRIPTION =//===== -->
<div class="modal fade" id="modal-container-inscritpion" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="myModalLabel">Inscription</h5> 
				<button type="button" class="close" data-dismiss="modal">
					<span aria-hidden="true">X</span>
				</button>
			</div>
			<div class="modal-body">
                <form action="GET">
                    <div class="inputBox p-2">
                        <input type="text" name="" required="">
                        <label class="m-right-2 text-lowercase" for="">NOM</label>
                    </div>
                    <div class="inputBox p-2">
                        <input type="password" name="" required="">
                        <label class="m-right-2 text-lowercase" for=""">PRENOM</label>
                    </div>
                    <div class="inputBox p-2">
                        <input type="text" name="" required="">
                        <label class="m-right-2 text-lowercase" for="">N° LICENSE</label>
                    </div>
                    <div class="inputBox p-2">
                        <input type="text" name="" required="">
                        <label class="m-right-2 text-lowercase" for="">EMAIL</label>
                    </div>
                    <div class="inputBox p-2">
                        <input type="text" name="" required="">
                        <label class="m-right-2 text-lowercase" for="">TELEPHONE</label>
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

<!-- \\\\\ HEADER TITLE ///// -->
<div class="container-fluid col-md-12 p-0">
    <div class="row">
        <header class="headerbanner bg-light">
            <img class="logoSTAC img-fluid justify-conter-center expand-md-8" src="/assets/img/STAC_logo-1000x512.png" alt="logoSTAC">
        </header>
    </div>

<!-- \\\\\ CONTENU INFORMATIONS ///// -->
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="containerInfosFftir p-3 m-3 bg-secondary text-light col-md-8 justify-content-center rounded">
            <h1 class="titlebody m-1 p-1 text-uppercase bg-dark text-light rounded">INFOS CLUB</h1>
            <h3 class="p-3">Le Tir Sportif</h3>
            <div class="p-3">
                <p>
                    Ici pourront apparaitre les infos du club au sujet de son activité.
                </p>
            </div>
        </div>
    </div>
</div>

</div>


<?php include 'footer.php';?>