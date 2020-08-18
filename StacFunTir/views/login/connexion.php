<?php
$_SESSION['licence'] = '';
$_SESSION['password'] = '';

include 'connect.php';
?>

<div class="modal fade" id="connectModal" tabindex="-1">
	<div class="modal-dialog modal-sm modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header bg-dark">
				<h5 class="modal-title text-light">Connexion</h5>
			</div>
			<div class="modal-body">
				<!-- =====\\= INSCRIPTION =//===== -->
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