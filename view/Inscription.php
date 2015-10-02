<?php
$titre = 'Inscription';
include 'header.php';
?>
<div class="nouveau">
    <div class="milieuPage">
            <div class="form-group">
                <label for="contenu">Pseudo</label>
                <input type="text" value="" name="nomUser" id="nomUser" class="form-control"/>
            </div>

            <div class="form-group">
                <label for="contenu">Mot de passe</label>
                <input type="password" value="" name="passwordUser" id="passwordUser" class="form-control"/>
            </div>

            <div class="form-group">
                <label for="contenu">Mail</label>
                <input type="email" value="" name="MailUser" id="MailUser" class="form-control"/>
            </div>
            <button type="button" onclick="Verif()" class="btn btn-success btn-lg">Sauvegarder</button>
        <button type="button" onclick="window.location='../index.php'" class="btn btn-default btn-lg">Annuler</button>
    </div>
</div>