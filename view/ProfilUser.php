<?php
$titre = 'Profil';

include 'header.php';
?>

<div class="nouveau">
    <div class="milieuPage">
      <div class="form-group">
            <label for="contenu">Pseudo</label>
            <input type="text" value="<?php echo $_GET['Pseudo'];?>" id="pseudo" class="form-control"/>
        </div>
     
        <div class="form-group">
            <label for="contenu">Mot de passe</label>
            <input type="password" value="<?php echo $_GET['Password'];?>" id="password" class="form-control"/>
        </div>
        
        <div class="form-group">
            <label for="contenu">Mail</label>
            <input type="email" value="<?php echo $_GET['Email'];?>" id="email" class="form-control"/>
        </div>
        <?php echo '<input type="button" class="btn btn-success" id="Sauvegarder" value="Sauvegarder" onclick="UpdateUser('.$test->id.')" />'; ?>
        <button type="button" onclick="window.location='../view/BiblioCommune.php'" class="btn btn-default btn-lg">Annuler</button>
    </div>
</div>
