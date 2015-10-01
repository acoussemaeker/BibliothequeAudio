<?php
$titre = 'Gestion des utilisateur';
include 'header.php';
?>
<table class="table table-hover tableListe">
    <thead>
        <tr class="info">
            <th>Pseudo</th>
            <th>Mot de passe</th>
            <th>Mail</th>
            <th></th>
        </tr>
    </thead>
    <?php

    $SQL = "SELECT * FROM user
            ORDER BY Pseudo ASC";
    $rs = $cnx->query($SQL);

    while ($info = $rs->fetch_object()) {

        echo '  <tr>
                    <td>
                        ' . $info->Pseudo . '
                    </td>
                    <td>
                        ' . $info->Password . '
                    </td>
                    <td>
                        ' . $info->Mail . '
                    </td>
                    <td>
                        <div class="btn-group" role="group" aria-label="...">
                            <button type="button" class="btn btn-default">upgrade</button>
                            <button type="button" class="btn btn-default">delete</button>
                        </div>
                    </td>';
        echo '  </tr>';
    }

    echo '</table>';
    