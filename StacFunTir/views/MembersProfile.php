<div class="container table-striped usersTableContainer mt-5 text-center shadow rounded col-xs-12 col-sm-10 col-md-10 col-xl-6 pt-3 pb-3">
    <table class="table table-striped">
    <h3 class="bg-dark text-light text-left p-2 rounded">Infos Membres</h3>
        <div class="row">
            <tr>
                <td class="text-left col-3 text-secondary">Nom: </td>
                <td class="text-dark text-left col-8"><?= $memberInfos->lastname; ?></td>
            </tr>
            <tr>
                <td class="text-left col-3 text-secondary">Prénom: </td>
                <td class="text-dark text-left col-8"><?= $memberInfos->firstname; ?></td>
            </tr>
            <tr>
                <td class="text-left col-3 text-secondary">N° de Licence: </td>
                <td class="text-dark text-left col-8"><?= $memberInfos->license; ?></td>
            </tr>
            <tr>
                <td class="text-left col-3 text-secondary">Mot de passe: </td>
                <td class="text-dark text-left col-8"><?= $memberInfos->password; ?></td>
            </tr>
        </div>
    </table>
</div>