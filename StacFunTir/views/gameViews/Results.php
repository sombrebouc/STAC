<div class="container-fluid shadow rounded col-11 col-md-10 pt-1 pb-3">
    <form action="" method="post">
        <table class="table table-striped">
            <div class="row">
                <thead class="bg-dark align-middle p-2 text-light">
                    <tr class="">
                        <th class="col-3 text-left">Joueur</th>
                        <th class="col-2 text-center">Score</th>
                        <th class="col-2 text-center">Pénalités</th>
                        <th class="col-3 text-center">Temps</th>
                        <th class="col-2 text-right">Ratio</th>
                    </tr>
                </thead>
            </div>
            <tbody>
                <tr class="text-dark">
                <tr> <?= $userId->firstname; ?></tr>
                <tr> <?= $userId->lastname; ?></tr>
                <tr> <?= $userId->license; ?></tr>
                </tr>
            </tbody>
        </table>
        <div>
    <!--= lorsque l'on clique sur "SUIVANT",
        on relance le panneau de scoring précédent
        avec le joueur suivant =-->
            <input type="submit" class="btn btn-success"
                href="\..\controllers\gameControllers\ScoringGameController.php" value="SUIVANT">
        </div>
    </form>
</div>