<?php

$_SESSION['licence'] = '';
$_SESSION['password'] = '';

// Variables nécessaires à l'écriture des cookies
$licence='';
$password='';
// Ecriture du cookie contenant les éléments de connexion durant 24h
setcookie('$licence', '$password', time() + 24*3600, null, null, false, true); 
?>

<!-- =====\\= CONNEXION =//===== -->
<div class="connectForm">
	<div class="row">
		<div class="container-fluid m-auto bg-secondary rounded w-auto p-2">
	<form action="GET">
		<div class="inputBox">
			<input type="text" name="licence" required="">
			<label class="m-right-2 text-lowercase" for="">N° de licence FFTIR</label>
		</div>
		<div class="inputBox">
			<input type="password" name="password" required="">
			<label class="m-right-2 text-lowercase" for="">Mot de passe</label>
        </div>
			<button href="#" type="submit" class="btn btn-dark">Valider</button>
		</div>
	</form>
	</div>
	</div>
</div>