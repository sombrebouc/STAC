<div class="container-fluid usersTableContainer text-center shadow rounded col-11 col-md-10 pt-4 pb-3">
        <table class="table table-striped">
            <div class="row">
                <thead class="bg-dark align-middle p-2 text-light">
                    <tr class="">
                        <th class="col-2">In Game</th>
                        <th>Nom</th>
                        <th>Prénom</th>
                    </tr>
                </thead>
            </div>
            <tbody class="">
<?php 
                
?>
                <tr class="text-dark">
                    <td class="col-2">
                        <div class="form-check form-switch">
                          <input class="form-check-input d-flex align-items-center" type="checkbox" id="flexSwitchCheckDefault">
                        </div>
                    </td>
                    <td> <?= $user->firstname; ?></td>
                    <td> <?= $user->lastname; ?></td>
                </tr>
<?php

?>
                <tr>
                    <div>
                        <button type="button" class="btn btn-success">CONFIRMER</button>
                    </div>
                </tr>
            </tbody>
        </table>
</div>