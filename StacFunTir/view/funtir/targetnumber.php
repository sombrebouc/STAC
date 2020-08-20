<?php
$cibles= array();
// var_dump($_POST);


?>

            <div class="ciblerie">
                <p>"Nom/Prénom du tireur"</p>
                <p><?php echo("Il y a ".$_POST['numberOfTargets']." cibles."); ?></p>
                <div class="container-fluid">
                <div>
                    <label class="ml-1 mr-3" for="">CIBLE n°00</label>
                    <label class="ml-4 mr-1" for="">1</label>
                    <input type="checkbox" name="validatePoint" id="validatePoint" />
                    <label class="ml-4 mr-1" for="">0</label>
                    <input type="checkbox" name="nonValidatePoint" id="nonValidatePoint" />
                    <label class="ml-4 mr-1" for="">NS</label>
                    <input type="checkbox" name="nonShoot" id="nonShoot" />
                </div>
                <div>
                    <label class="ml-4 mr-1" for="">Temps</label>
                    <input type="text" name="timeScore" id="timeScore" />
                </div>
                    <div class="validateBtn p-2">
                        <a id="targetList" type="submit" class="btn btn-sm btn-success text-light">Suivant</a>
                    </div>
                </div>
                </div>
            </div>