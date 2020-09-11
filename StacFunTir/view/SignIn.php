<?php
require_once dirname(__FILE__).'\..\controller\SignInController.php';
if (isset($userConnectingSuccess)): ?>
    <div class="container usersTableContainer text-center shadow rounded col-xs-10 col-md-8 pt-2 pb-3">
        <div class="row">
            <div class="col-12" role="alert">
                <h3 class="text-center text-success">
				<p><?= $_SESSION['user']['lastname']." ".$_SESSION['user']['firstname'] ?></p>
				<p><?= "Licence FFTir n°: ".$_SESSION['user']['license'] ?></p>
				<p>Connecté avec succès</p> 
				</h3>
            </div>
        </div>
    </div>

<?php else: ?>

<div class="container usersTableContainer text-center shadow rounded col-xs-10 col-md-8 pt-3">
	<div>
		<h3 class="bg-dark rounded p-2 text-light">Connexion</h3>
	</div>
	<form action="" method="POST">
		<div>
			<label class="text-uppercase text-dark" for="">Licence FFTIR</label>
		</div>
		<div>
			<input class="col-xs-12 col-md-8 text-center border-0 border-bottom p-2" type="text" name="license" placeholder="licence FFTIR" value="<?= $license ?>" required="">
		</div>
		<div>
			<label class="text-uppercase text-dark" for="">Mot de passe</label>
		</div>
		<div>
			<input class="col-xs-12 col-md-8 text-center border-0 border-bottom p-2" type="password" name="password" placeholder="mot de passe" required="">
		</div>
            <?php
            if(isset($errors['password'])){
                echo $errors['password'];
            } ?>
		<div class="ml-auto mr-auto col-md-4 col-xs-10 mt-5 pb-3">
			<input type="submit" class="btn btn-block btn-success col-6 text-light text-uppercase" 
			name="connecting" value="Se connecter"></input>
		</div>
	</form>
</div>

<?php endif; ?>
