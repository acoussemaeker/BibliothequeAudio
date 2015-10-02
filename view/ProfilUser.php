<?php
$titre = 'Profil';

include 'header.php';
?>

<div class="nouveau">
    <div class="milieuPage">
      <div class="form-group">
            <label for="contenu">Pseudo</label>
            <input type="text" value="" id="nomUser" class="form-control"/>
        </div>
     
        <div class="form-group">
            <label for="contenu">Mot de passe</label>
            <input type="password" value="" id="password" class="form-control"/>
        </div>
        
        <div class="form-group">
            <label for="contenu">Mail</label>
            <input type="email" value="" id="email" class="form-control"/>
        </div>
        <button type="button" onclick="" class="btn btn-success btn-lg">Sauvegarder</button>
        <button type="button" onclick="window.location='../index.php'" class="btn btn-default btn-lg">Annuler</button>
    </div>
</div>
