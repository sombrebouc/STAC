<div class="container usersTableContainer text-center shadow rounded col-xs-10 col-md-8 pt-3 pb-3">
        <table class="table table-striped">
            <div class="row">
                <thead class="bg-dark p-2 text-light">
                    <tr class="">
                        <th>#</th>
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
                    <td> <?= $number+1 ?></td>
                    <td> <?= $user->firstname; ?></td>
                    <td> <?= $user->lastname; ?></td>
                    <td> <?= $user->license; ?></td>
                    <td>
                        <div class="form-check form-switch">
                          <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                          <label class="form-check-label" for="flexSwitchCheckDefault">Default switch checkbox input</label>
                        </div>
                    </td>
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