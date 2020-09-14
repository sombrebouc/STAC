<div class="container usersTableContainer text-center shadow rounded col-xs-10 col-sm-10 col-md-8 pt-4 pb-3">
        <table class="table table-striped">
            <div class="row">
                <thead class="bg-dark align-middle p-2 text-light">
                    <tr class="">
                        <th class="col-2">In Game</th>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Licence</th>
                    </tr>
                </thead>
            </div>
            <tbody class="">
                <?php 
                    if (count($listUsers) > 0) { 
                    foreach($listUsers as $number => $user){
                ?>
                <tr class="text-dark">
                    <td class="col-2">
                        <div class="form-check form-switch">
                          <input class="form-check-input d-flex align-items-center" type="checkbox" id="flexSwitchCheckDefault">
                        </div>
                    </td>
                    <td> <?= $user->firstname; ?></td>
                    <td> <?= $user->lastname; ?></td>
                    <td> <?= $user->license; ?></td>
                </tr>
    <?php } ?>
            </tbody>
        </table>
    <?php }else{ ?>
    <div>
        <h3>Il n'y a pas de membre dans la base de donnée</h3>
    </div>
    <?php } ?>
</div>