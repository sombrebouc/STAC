<?php
$_SESSION['licence'] = '';
$_SESSION['password'] = '';
?>

<!-- \\\\\ MODAL CONNECT ///// -->
<div class="modal fade" id="connectModal" tabindex="-1">
	<div class="modal-dialog modal-sm modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-body rounded">
				<form class="formContainer" action="GET">
					<div class="inputBox text-center text-light">
						<label for="licence">n° de licence FFTIR</label>
						<div>
							<input class="text-center" type="text" placeholder="N° de licence FFTIR" name="licence" required="">
						</div>
					</div>
					<div class="inputBox text-center text-light">
						<label for="password">mot de passe</label>
						<div>
							<input class="text-center" type="password" placeholder="Mot de passe" name="password" required="">
						</div>
					</div>
					<div class="validateBtn p-2">
						<button href="#" type="submit" class="btn btn-block btn-success text-light">Valider</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
</div>