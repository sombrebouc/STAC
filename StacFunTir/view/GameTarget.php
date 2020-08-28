<div class="container usersTableContainer text-center shadow rounded col-sm-11 col-md-8 pt-3">
<table class="targetCounterTable">
    <thead>
        <h2 class="bg-dark rounded p-2 text-light">Prénom et Nom du joueur</h2>
    </thead>
    <tbody>
        <form action="" method="POST">
            <div>
                <label class="text-uppercase text-left font-weight-bold text-dark" for="">Score:</label>
                <div>
                <input class="text-center border-0 border-bottom p-2" type="int" name="targetPoints" placeholder=""
                    value="<?= '$targetPoints' ?>" required="">
                </div>
            </div>
            <div>
                <label class="text-uppercase text-left font-weight-bold text-dark" for="">Non-Shoot:</label>
            <div>
                <input class="text-center border-0 border-bottom p-2" type="int" name="targetNonShoot" placeholder=""
                    value="<?= '$targetNonShoot' ?>" required="">
            </div>
            <div>
                <label class="text-uppercase text-left font-weight-bold text-dark" for="">Temps:</label>
                <div>
                <input class="text-center border-0 border-bottom p-2" type="int" name="targetTime" placeholder=""
                    value="<?= '$targetTime' ?>" required="">
                </div>
            </div>
            <div class="targetPictureContainer">
                <img src="\..\" alt="">
            </div>
            <div class="ml-auto mr-auto col-md-4 col-xs-10 mt-2 pb-3">
			    <button href="\..\index.php" type="submit" class="btn btn-block btn-success col-6 text-light text-uppercase"
				value="connecting">Valider</button>
		    </div>
        </form>
    </tbody>

</table>
</div>