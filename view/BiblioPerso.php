
<?php
$titre = 'Bibliotheque Personnel';
include 'header.php';

?>

<!--    <body>
        
    </body>
</html>-->

<table class="table table-hover tableListe">
    <thead>
        <tr class="info">
            <th>Image</th>
            <th>Titre</th>
            <th>Lecteur</th>
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
                        ' . $info->Nom . '
                    </td>
                    <td>
                       <audio controls="controls" preload="none">
                            <source src="audio/'.$info->Nom.'.mp3" type="audio/mp3" />
                       </audio>
                    </td>';
        
        if($connect == 1){
        echo '<td> <input type="button" value="Supprimer de la bibliotheque personnel"/> </td>';
        }
                   
                    
        echo '  </tr>';
    }

    echo '</table>';
