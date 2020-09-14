<div class="container-fluid usersTableContainer text-center shadow rounded col-11 col-md-10 pt-4 pb-3">
    <div class="">
        <table class="table table-striped">
            <div class="row">
                <thead class="bg-dark p-2 text-light">
                    <tr class="">
                        <th>#</th>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Licence</th>
                        <th>Afficher</th>
                        <th>Supprimer</th>
                    </tr>
                </thead>
            </div>
            <tbody class="">
                <?php 
                    if (count($listUsers) > 0) { 
                    foreach($listUsers as $number => $user){
                ?>
                <tr class="text-dark">
                    <td> <?= $number+1 ?></td>
                    <td> <?= $user->firstname; ?></td>
                    <td> <?= $user->lastname; ?></td>
                    <td> <?= $user->license; ?></td>
                    <td> <a class="btn btn-success" href="UsersProfileController.php?id=<?= $user->id; ?>">V</a></td>
                    <td> <a class="btn btn-danger" href="UsersDeleteController.php?id=<?= $user->id; ?>">X</a></td>
                </tr>
    <?php } ?>
            </tbody>
        </table>
    </div>
    <?php }else{ ?>
    <div>
        <h3>Il n'y a pas de membre dans la base de donnée</h3>
    </div>
    <?php } ?>
</div>