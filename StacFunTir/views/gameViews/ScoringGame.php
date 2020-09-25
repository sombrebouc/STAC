<div class="container-fluid targetCard p-0 col-xs-10 col-sm-10 col-md-6 mt-5 m-auto">
    <div class="container-fluid containerHeader p-0">
        <div class="row text-right p-0 col-12 m-0">
            <div class="scoringHeaderPix p-0 mt-1 col-12">
                <div class="mt-4 mr-0">

                    <?php 
                    //if(count(array($userSessionGame)) > 0){ 
                    //foreach($userSessionGame as $key=>$id_users){
                    ?>

                    <h5>pipo</h5>
                    <h5>pulpy</h5>
                    <h5>1478520</h5>

                    <?php //}
                    //}
                    ?>

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
                            <input class="col-3 rounded m-3" type="hidden" name="hiddenUserTurn" value="<?= $hiddenUserTurn; ?>">
                        </div>
                        <div class="row justify-content-center">
                            <input type="submit" class="btn btn-success col-3 m-2 text-center" name="ScoreCalculator"
                                value="Suivant">
                        </div>
                    </div>
        </form>
    </div>
</div>
</div>