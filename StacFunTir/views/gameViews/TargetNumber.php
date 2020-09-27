<div class="container-fluid usersTableContainer mt-5 text-center shadow rounded col-md-12 col-xl-6 pt-4 pb-3">
    <div class="containerFormTarget shadow-sm rounded bg-dark col-md-12 col-xl-12 m-auto">
            <form action="/../../controllers/gameControllers/SelectingListController.php?id_session='.$id_session" method="POST">
                <div>
                    <h4 class="text-uppercase text-light text-center">Ciblerie</h4>
                </div>
                <div class="row">
                    <input class="targetNbContainer bg-light rounded p-2 mt-0 m-auto col-2 text-center" type="text" name="numberoftargets" value="" required="">
                </div>
                <div class="row justify-content-center">
                    <input type="submit" class="btn btn-success m-2 text-center col-3" name="targetsValidate" value="SUIVANT">
                </div>
            </form>
    </div>
</div>