<div class="container-fluid usersTableContainer mt-5 text-center shadow rounded col-xs-12 col-sm-10 col-md-10 col-xl-6 pt-4 pb-3">
    <div class="containerFormTarget shadow-sm bg-dark col-md-12 col-xl-12 m-auto">
        <form action="" method="POST">
            <div class="row">
                <h4 class="text-uppercase text-light mb-0 text-center">- SCORE -</h4>
            </div>
            <div class="row">
                <label for="pointsOnDrill" class="text-left text-light text-uppercase col-4 p-2 ml-2">Points</label>
                <div class="col-3">                    
                </div>
                <input class="col-3 text-center rounded m-3" type="text" name="pointsOnDrill" value="" required="">
            </div>
            <div>
                <div class="row">
                    <label for="nonshootOnDrill"
                        class="text-left text-light text-uppercase col-4 p-2 ml-2">Penalites</label>
                    <div class="col-3">                        
                    </div>
                    <input class="col-3 text-center rounded m-3" type="text" name="nonshootOnDrill" value="" required="">
                </div>
                <div>
                    <div class="row">
                        <label for="timeOnDrill"
                            class="text-left text-light text-uppercase col-4 p-2 ml-2">Temps</label>
                        <div class="col-3">                            
                        </div>
                        <input class="col-3 text-center rounded m-3" type="text" name="timeOnDrill" value=""
                            required="">
                        <input class="col-3 rounded m-3" type="hidden" name="hiddenUserTurn"
                            value="<?= $hiddenUserTurn; ?>">
                    </div>
                    <div class="row justify-content-center">
                        <input type="submit" class="btn btn-success col-3 m-2 text-center" name="ScoreCalculator"
                            value="Suivant">
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>