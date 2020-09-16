<div class="container-fluid targetCard p-0 col-xs-10 col-sm-10 col-md-6 mt-5 m-auto">
    <div class="container-fluid containerHeader">
        <div class="row text-right p-0 col-12">
            <div class="scoringHeaderPix p-0 mt-1">
                <div class="mt-4">
                    <h4>Nom</h4>
                    <h4>Prénom</h4>
                    <h4>Licence</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="containerFormScoring shadow-sm bg-dark col-11 m-auto">
        <form action="" method="post">
            <div class="rounded">
                <div class="row">
                    <h4 class="text-uppercase text-light mb-0 text-center">- SCORE -</h4>
                </div>
                <div class="row">
                    <label for="pointsOnDrill" class="text-left text-light text-uppercase col-4 p-2 ml-2">Points</label>
                    <div class="col-3"></div>
                    <input class="col-3 rounded m-3" type="text" name="pointsOnDrill" value="" required="">
                </div>
                <div>
                    <div class="row">
                        <label for="nonshootOnDrill"
                            class="text-left text-light text-uppercase col-4 p-2 ml-2">Penalites</label>
                        <div class="col-3"></div>
                        <input class="col-3 rounded m-3" type="text" name="nonshootOnDrill" value="" required="">
                    </div>
                    <div>
                        <div class="row">
                            <label for="timeOnDrill"
                                class="text-left text-light text-uppercase col-4 p-2 ml-2">Temps</label>
                            <div class="col-3"></div>
                            <input class="col-3 rounded m-3" type="text" name="timeOnDrill" value="" required="">
                        </div>
                        <div class="row justify-content-center">
                            <input type="submit" class="btn btn-success col-3 m-2 text-center" name="ScoreCalculator"
                                value="Résultat">
                        </div>
                    </div>
        </form>
    </div>
</div>
</div>