<?php
if (isset($readUsersSuccess)): 
?>
<div class="container usersTableContainer text-center shadow rounded col-xs-10 col-md-8 pt-3">
    <div class="row">
        <div class="col-12" role="alert">
            <h3 class="text-center text-success">Bienvenu <?= $firstname ?></h3>
        </div>
    </div>
</div>

<?php else: ?>

<div class="container usersTableContainer text-center shadow rounded col-xs-10 col-md-8 pt-3">
    <div class="row">
        <h3 class="text-center text-danger">La connexion a échoué</h3>

<?php endif; ?>

    </div>
</div> 