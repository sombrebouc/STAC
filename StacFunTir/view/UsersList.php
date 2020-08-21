<?php	
	require_once dirname(__FILE__).'\includes\Header.php';
?>

<div id="users">
    <div class="container m-auto" >
    <?php if (count($listUsers) > 0) { 
        foreach ($listUsers as $number => $user) { ?>
    <div class="card mt-4 ml-4" style="width: 18rem;background-color: rgba(74, 122, 233, 0.6) !important;">
        <img class="card-img-top" src="https://www.petitesaffiches.fr/annuaire/images/avocats_default_avatar.png" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">Patient numéro : <?= $number + 1; ?></h5>
            <p class="card-text">Prénom : <?= $user->firstname; ?></p>
            <p class="card-text">Nom : <?= $user->lastname; ?></p>
            <p class="card-text">Date de Naissance : <?= $user->licensefftir; ?></p>
            <a class="btn btn-primary col-12 mb-2" href="users_profil_ctrl.php?id=<?= $user->id; ?>">Voir le profil</a>
            <a class="btn btn-danger col-12 mb-2" href="delete_users_ctrl.php?id=<?= $user->id; ?>">Supprimer le patients</a>

        </div>
    </div>
    
        <?php } ?>
    <?php } else { ?>
        <h1 class="text-center">Aucun membre n'as été trouvé 
            <a href="SignUpController.php">
                Veuillez ajouter un membre
            </a>
        </h1>
    <?php } ?>
    </div>
    </div>