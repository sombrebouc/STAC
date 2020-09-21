<?php if ($deleteUserSuccess == true): ?>
    <div class="container usersTableContainer text-center shadow rounded col-xs-10 col-md-8 pt-3 pb-2">
        <div class="row">
            <div class="col-12" role="alert">
                <h3 class="text-center text-success">Utilisateur supprimé avec succès.</h3>
            </div>
        </div>
    </div>


<?php else : ?>
    
<div class="container usersTableContainer text-center shadow rounded col-xs-10 col-md-8 pt-3">
    <div class="row">
        <div>
            <h2 class="bg-dark p-2 rounded text-light">Suppression utilisateur</h2>
        </div>
            <h3 class="text-center text-danger">
                <p> Etes vous sûr de vouloir supprimer l'utilisateur </p>
                <p> <?= $fullName; ?> </p> 
                <p> ? </p> 
            </h3>

        <form action="UsersDeleteController.php" method="POST">
            <input type="hidden" name="fullName" value="<?= isset($fullName)??""; ?>">
            <input type="hidden" name="id" value="<?= $id; ?>">
            <a class="btn btn-success ml-4 mr-2 mb-3" href="UsersListController.php">Annuler</a>
            <button class="btn btn-danger mb-3" type="submit">Supprimer</button>
        </form> 

<?php endif; ?>

    </div>
</div>    
