<div class="usersList">
	<div class="row">
		<div class="col-md-12">
		<?php
			if(count($userList) > 0):
		?>
			<table class="table table-striped">
				<thead class="bg-dark p-2 text-light">
						<tr>
							<th>#</th>
							<th>Nom</th>
							<th>Prénom</th>
							<th>N° de licence</th>
						</tr>
				</thead>
				<tbody>
					<?php foreach($usersList as $number => $user): ?>
					<tr>
						<td> <?= $number+1 ?></td>
						<td> <!-- <a class="" href="../controllers/profil-patientCtrl.php"> --> <?= $user->firstname ?> </a> </td>
						<td> <?= $user->lastname ?></td>
						<td> <?= $user->licenseNumber ?></td>
					</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
			<?php else: ?>
				<div>
					<p>Il n'y a pas de licensiers dans la base de donnée, veuillez en ajouter un.</p>
				
				</div>
			<?php endif; ?>
		</div>
	</div>
</div>