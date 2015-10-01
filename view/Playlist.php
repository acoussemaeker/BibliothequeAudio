<?php
$titre = 'Gestion des playlist';
include 'header.php';
?>
<table class="table table-hover tableListe">
    <thead>
        <tr class="info">
            <th>Nom</th>
            <th>Ecouter</th>
            <!--<th>Nombre de musique</th>-->
            <th></th>
        </tr>
    </thead>
    <?php
    //t INNER JOIN playlistaudio ON playlist.Id = playlistaudio.PlaylistId
    $SQL = "SELECT playlist.Nom Nom  FROM playlist
            ORDER BY nom ASC";
    $rs = $cnx->query($SQL);

    while ($info = $rs->fetch_object()) {

        echo '  <tr>
                    <td>
                        ' . $info->Nom . '
                    </td>
                    <td>
                       <audio controls="controls" preload="none" class="image">
                            <source src="audio/'.$info->Nom.'.mp3" type="audio/mp3" />
                       </audio>
                    </td>
                    <td>
                        <div class="btn-group" role="group" >
                            <button type="button" class="btn btn-default">Modifier</button>
                            <button type="button" class="btn btn-danger">Supprimer</button>
                        </div>
                    </td>';
        
       
                   
                    
        echo '  </tr>';
    }

    echo '</table>';
   ?>
    <div class="milieuPage">
    <input type="button" class="btn btn-success" value="Nouvelle playlist" />
    </div>
    
    