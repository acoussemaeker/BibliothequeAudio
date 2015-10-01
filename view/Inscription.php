
<?php
$titre = 'Inscription';
include 'header.php';
?>
<div class="nouveau">
    <div class="milieuPage">
        <form action="../ws/User" method="GET">
            <div class="form-group">
                <label for="contenu">Pseudo</label>
                <input type="text" value="" name="nomUser" class="form-control"/>
            </div>

            <div class="form-group">
                <label for="contenu">Mot de passe</label>
                <input type="password" value="" name="prenomUser" class="form-control"/>
            </div>

            <div class="form-group">
                <label for="contenu">Mail</label>
                <input type="email" value="" name="MailUser" class="form-control"/>
            </div>
            <button type="submit" onclick="" class="btn btn-success btn-lg">Sauvegarder</button>
        </form>
        <button type="button" onclick="window.location='../index.php'" class="btn btn-default btn-lg">Annuler</button>
    </div>
</div>