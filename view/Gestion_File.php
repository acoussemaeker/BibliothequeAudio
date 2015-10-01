<?php
$titre = 'Gestion des fichier audio';
include 'header.php';
include 'Connection_BDD.php';
?>

<table class="table table-hover tableListe">
    <thead>
        <tr class="info">
            <th>Titre</th>
            <th>localisation</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <?php
    $SQL = "SELECT * FROM audio
            ORDER BY nom ASC";
    $rs = $cnx->query($SQL);

    while ($info = $rs->fetch_object()) {

        echo '  <tr>
                    <td>
                        ' . $info->Nom . '
                    </td>
                    <td>
                        ' . $info->Emplacement . '
                    </td>
                    <td>
                       <div class="btn-group" role="group" aria-label="...">
                             <button type="button" class="btn btn-default">delete</button>
                             <button type="button" class="btn btn-default">move</button>
                      </div>
                    </td>';
        
       
                   
                    
        echo '  </tr>';
    }

    echo '</table>';
    