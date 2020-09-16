<?php 
    require_once dirname(__FILE__).'\..\models\Users.php';

?>
<div class="container usersTableContainer text-center shadow rounded col-xs-8 col-md-6 pt-3 pb-3">

    <p class="text-left col-3 text-secondary" href="">Nom:</p>
    <p class="col-9 text-success text-xl-right"><?= $_SESSION['user']['license']->$lastname; ?></p>
    <p class="text-left col-3 text-secondary" href="">Prénom:</p>
    <p class="col-9 text-success text-xl-right"><?= $_SESSION['user']['license']->$firstname; ?></p>
    <p class="text-left col-3 text-secondary" href="">N° de Licence:</p>
    <p class="col-9 text-success text-xl-right"><?= $_SESSION['user']['license']->$license; ?></p>
    <p class="text-left col-3 text-secondary" href="">Mot de passe:</p>
    <p class="col-9 text-success text-xl-right"><?= $_SESSION['user']['license']->$password; ?></p>
    
</div>










