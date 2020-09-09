<?php if (isset($deleteUserSuccess)): ?>

    <div class="col-12" role="alert">
        <p>L'utilisateur a été supprimé avec succès ! :)</p>
    </div>
    <?php else : ?>
    
<div class="container usersTableContainer text-center shadow rounded col-xs-10 col-md-8 pt-3">
    <div class="row">
    <div>
        <h2 class="bg-dark p-2 rounded text-light">Suppression utilisateur</h2>
    </div>
    <h3 class="text-center text-danger">Etes vous sûr de vouloir supprimer l'utilisateur <?= $fullName; ?> ?</h3>
    <?php endif; ?>
    <form action="UsersDeleteController.php" method="POST">
        <input type="hidden" name="fullName" value="<?= $fullName; ?>">
        <input type="hidden" name="id" value="<?= $id; ?>">
        <a class="btn btn-success ml-4 mr-2 mb-3" href="UsersListController.php">Annuler</a>
        <button class="btn btn-danger mb-3" type="submit">Supprimer</button>
    </form>
    </div>
</div>    
