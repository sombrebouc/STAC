<?php

// Variables nécessaires à l'écriture des cookies
$licence='';
$password='';
// Ecriture du cookie contenant les éléments de connexion durant 24h
setcookie('$licence', '$password', time() + 24*3600, null, null, false, true); 

$_SESSION['licence'] = '';
$_SESSION['password'] = '';

?>

<!-- \\\\\ MODAL CONNECT ///// -->
<!-- <div class="modal-content p-2 bg-secondary">
	<div class="modal-wrapper">-->
		<!-- =====\\= CONNEXION =//===== -->
		<!-- <div class="container">
			<div class="row">
				
		</div>
	</div>

</div>
</div> -->



<!-- Modal -->
<div class="modal" id="exampleModal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
            <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
	  <form class="formContainer" action="GET">
					<div class="inputBox">
						<label for="licence">N° de licence FFTIR</label>
						<div>
							<input type="text" placeholder="N° de licence FFTIR" name="licence" required="">
						</div>
					</div>
					<div class="inputBox">
						<label for="password">Mot de passe</label>
						<div>
							<input type="password" placeholder="Mot de passe" name="password" required="">
						</div>
					</div>
					<button href="#" type="submit" class="btn btn-primary p-2">Valider</button>
			</div>
			</form>
      </div>
    </div>
  </div>
</div>