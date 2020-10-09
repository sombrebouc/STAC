<div class="container-fluid usersTableContainer mt-5 text-center shadow rounded col-xs-12 col-sm-10 col-md-10 col-xl-6 pt-4 pb-3">
    <div class="">
        <table class="table table-striped">
            <div class="row">
                <thead class="bg-dark p-2 text-light">
                    <tr class="">
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
                    <td> <?= $user->firstname; ?></td>
                    <td> <?= $user->lastname; ?></td>
                    <td> <?= $user->license; ?></td>
                    <td> <a type="submit" class="btn btn-success" href="MembersProfileController.php?id=<?= $user->id; ?>">V</a></td>
                    <td> <a type="submit" class="btn btn-danger" href="MembersDeleteController.php?id=<?= $user->id; ?>">X</a></td>
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