<?php
$titre = 'Profil';

include 'header.php';
include 'Connection_BDD.php';
$nom = "robert";
$mdp= "bou";
$mail = "test@super_test.eu";
?>
<div class="nouveau">
    <div class="milieuPage">
      <div class="form-group">
            <label for="contenu">Pseudo</label>
            <input type="text" value="<?php echo $nom; ?>" id="nomUser" class="form-control"/>
        </div>
     
        <div class="form-group">
            <label for="contenu">Mot de passe</label>
            <input type="password" value="<?php echo $mdp; ?>" id="prenomUser" class="form-control"/>
        </div>
        
        <div class="form-group">
            <label for="contenu">Mail</label>
            <input type="email" value="<?php echo $mail; ?>" id="loginUser" class="form-control"/>
        </div>
        <button type="button" onclick="" class="btn btn-success btn-lg">Sauvegarder</button>
        <button type="button" onclick="window.location='../index.php'" class="btn btn-default btn-lg">Annuler</button>
    </div>
</div>
        
>>>>>>> 179dca9e36d1fa63605e034a9b4cc0db9e505034
