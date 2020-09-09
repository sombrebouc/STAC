<?php if (isset($connectUsersSuccess)): ?>
    <div class="container usersTableContainer text-center shadow rounded col-xs-10 col-md-8 pt-3 pb-2">
        <div class="row">
            <div class="col-12" role="alert">
                <h3 class="text-center text-success">Connecté avec succès</h3>
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
			<input class="col-xs-12 col-md-8 text-center border-0 border-bottom p-2" type="text" name="license" placeholder="licence FFTIR"
				value="<?= $license ?>" required="">
		</div>
		<div>
			<label class="text-uppercase text-dark" for="">Mot de passe</label>
		</div>
		<div>
			<input class="col-xs-12 col-md-8 text-center border-0 border-bottom p-2" type="password" name="password" placeholder="mot de passe"
				value="<?= $password ?>" required="">
		</div>
		<div class="ml-auto mr-auto col-md-4 col-xs-10 mt-5 pb-3">
			<a type="submit" class="btn btn-block btn-success col-6 text-light text-uppercase" 
			name="connecting" value="connecting" href="SignInConfirmation.php">Se connecter</a>
		</div>
	</form>
</div>

<?php endif; ?>
