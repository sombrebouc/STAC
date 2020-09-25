<div class="container-fluid usersTableContainer mt-5 text-center shadow rounded col-11 col-md-10 pt-4 pb-3">
    <form action="/../../controllers/gameControllers/ScoringGameController.php?id_session='.$id_session" method="post">
        <table class="table table-striped">
            <div class="row">
                <thead class="bg-dark align-middle p-2 text-light">
                    <tr class="">
                        <th class="col-2 text-left">In Game</th>
                        <th>Prénom</th>
                        <th>Nom</th>
                        <th>Licence</th>
                    </tr>
                </thead>
            </div>
            <tbody>
                <?php 
                    if(count($listUsers) > 0){ 
                    foreach($listUsers as $number=>$userId){
                ?>
                <tr class="text-dark">
                    <td class="col-2">
                        <div class="form-check form-switch">
                          <input class="form-check-input d-flex align-items-center" type="checkbox" id="listSwitchChecking" name="users[]" value="<?= $userId->id;?>">
                        </div>
                    </td>
                    <td> <?= $userId->firstname; ?></td>
                    <td> <?= $userId->lastname; ?></td>
                    <td> <?= $userId->license; ?></td>
                <?php } ?>
                </tr>                    
            </tbody>
        </table>
            <div>            
                <input type="submit" class="btn btn-success" value="SUIVANT">
            </div>
    </form>

    
        <?php }else{ ?>
    <div>
        <h3 style="color:red;">Il n'y a pas de membre dans la base de donnée</h3>
    </div>
    <?php } ?>
</div>
