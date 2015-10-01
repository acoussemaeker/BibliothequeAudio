<?php
$titre = 'Gestion des demandes';
include 'header.php';

?>
<table class="table table-hover tableListe">
    <thead>
        <tr class="info">
            <th>Utilisateur demandeur</th>
            <th>Titre</th>
            <th>localisation</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <?php
    $SQL = "SELECT requestaudio.Nom Title, requestaudio.Emplacement localisation, requestaudio.IdUser, user.Pseudo Pseudo FROM requestaudio INNER JOIN user ON requestaudio.IdUser = user.Id
            ORDER BY nom ASC";
    $rs = $cnx->query($SQL);

    while ($info = $rs->fetch_object()) {

        echo '  <tr>
                    <td>
                        ' . $info->Pseudo . '
                    </td>
                    <td>
                        ' . $info->Title . '
                    </td>
                    <td>
                        ' . $info->localisation . '
                    </td>
                    <td>
                       <div class="btn-group" role="group" aria-label="...">
                             <button type="button" class="btn btn-success">Accepter</button>
                             <button type="button" class="btn btn-danger ">Refuser</button>
                      </div>
                    </td>';
        
       
                   
                    
        echo '  </tr>';
    }

    echo '</table>';
    