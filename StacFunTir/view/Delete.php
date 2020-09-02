<?php if (isset($deleteUserSuccess)): ?>
        <div class="col-12" role="alert">
            <p>L'utilisateur a été supprimé avec succès ! :)</p>
        </div>
        <?php else : ?>
        <h2 class="text-center text-white">Etes vous sûr de vouloir supprimer l'utilisateur <?= $fullName; ?> ?</h2>
        <?php endif; ?>
        <form action="UsersDeleteController.php" method="POST">
            <input type="hidden" name="fullName" value="<?= $fullName; ?>">
            <input type="hidden" name="id" value="<?= $id; ?>">
            <a class="btn btn-success ml-4 mr-2" href="UsersListController.php">Annuler</a>
            <button class="btn btn-danger" type="submit">Supprimer</button>
        </form>
        
<!--
<script>
window.alert('Le membre a été supprimé!!')
</script>
-->