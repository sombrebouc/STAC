<?php session_start(); 

// Variables nécessaires à l'écriture des cookies
$licence='';
$password='';
// Ecriture du cookie contenant les éléments de connexion durant 24h
setcookie('$licence', '$password', time() + 24*3600, null, null, false, true);

	require_once dirname(__FILE__).'\includes\Header.php';

?>

<div>
	<div>
		<form action="" method="POST">
			<div>
				<label class="text-uppercase text-primary" for="">Licence FFTIR</label>
			</div>
			<div>
				<input class="text-left border-0 border-bottom p-2" type="text" name="licence"
					placeholder="licence FFTIR" value="<?= $licence ?>" required="">
			</div>
			<div>
				<label class="text-uppercase text-primary" for="">Mot de passe</label>
			</div>
			<div>
				<input class="text-left border-0 border-bottom p-2" type="text" name="password"
					placeholder="mot de passe" value="<?= $password ?>" required="">
			</div>
		</form>
	</div>
	<div class="modal-footer mt-3 bg-dark">
		<button href="#" type="submit" class="btn btn-block btn-primary text-dark text-uppercase"
			value="connecting">Valider</button>
	</div>
</div>