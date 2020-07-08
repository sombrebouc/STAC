<?php

// Variables nécessaires à l'écriture des cookies
$licence='';
$password='';
// Ecriture du cookie contenant les éléments de connexion durant 24h
setcookie('$licence', '$password', time() + 24*3600, null, null, false, true); 

$_SESSION['licence'] = '';
$_SESSION['password'] = '';


?>

<!-- =====\\= CONNEXION =//===== -->
<div class="container-fluid col-4">
	<div class="row">
	<form  class="formContainer" action="GET">
		<div class="inputBox p-md-2">
			<label for="licence">N° de licence FFTIR</label>
			<div>
			<input type="text" name="licence" required="">
			</div>
		</div>
		<div class="inputBox p-md-2">
			<label for="password">Mot de passe</label>
			<div>
			<input type="password" name="password" required="">
			</div>
        </div>
			<button href="#" type="submit" class="btn btn-dark">Valider</button>
		</div>
	</form>
	</div>
</div>