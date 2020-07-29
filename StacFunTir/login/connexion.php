<?php
$_SESSION['licence'] = '';
$_SESSION['password'] = '';

include 'connect.php';

$dbStac = mysql_connect ('localhost', 'admin', 'THOR81');
	mysql_select_db ('stac', $dbStac);

	// on teste si une entrée de la base contient ce couple login / pass
	$sql = 'SELECT count(*) FROM membres WHERE licence="'.mysql_escape_string($_POST['licence']).'" AND password="'.mysql_escape_string(md5($_POST['password'])).'"';
	$req = mysql_query($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());
	$data = mysql_fetch_array($req);

	mysql_free_result($req);
	mysql_close();
?>

<!-- \\\\\ MODAL CONNECT ///// -->
<div class="modal fade" id="connectModal" tabindex="-1">
	<div class="modal-dialog modal-sm modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-body rounded">
				<form class="formContainer" action="GET">
					<div class="inputBox text-center text-dark">
						<label for="licence">n° de licence FFTIR</label>
						<div>
							<input class="text-center" type="text" placeholder="N° de licence FFTIR" name="licence" required="">
						</div>
					</div>
					<div class="inputBox text-center text-dark">
						<label for="password">mot de passe</label>
						<div>
							<input class="text-center" type="password" placeholder="Mot de passe" name="password" required="">
						</div>
					</div>
					<div class="validateBtn p-2">
						<button href="#" type="submit" class="btn btn-block btn-success text-light" value="connecting">Valider</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
</div>