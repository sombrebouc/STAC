<!-- \\\\\ MODAL Creation d'évènement ///// -->
<div class="modal fade" id="eventModal" tabindex="-1">
    <div class="modal-dialog modal-sm modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body rounded">
                <form class="formContainer" action="GET">
                    <div class="inputBox text-center text-dark p-2">
                        <label for="#">Objet</label>
                        <div>
                            <input class="text-center" type="text" placeholder="" name="objectEvent" required="">
                        </div>
                    </div>
                    <div class="inputBox text-center text-dark p-2">
                        <label for="password">Description de l'évènement</label>
                        <div>
                            <textarea name="describingEvent" id="" cols="30" rows="10" placeholder="..."
                                required=""></textarea>
                        </div>
                    </div>
                    <div class="validateBtn p-2">
                        <button href="#" type="submit" class="btn btn-block btn-success text-light">Envoyer</button>
                    </div>
            </div>
            </form>
        </div>
    </div>
</div>
</div>