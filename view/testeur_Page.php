
<?php
$titre = "bah";
include 'header.php';
?>
<div class="nouveau">
    <div class="milieuPage">
        <p>
            <audio id="audio" controls="controls" buffered preload="none">
                <source src="../audio/donjon-de-naheulbeuk01.mp3" type="audio/mp3" />
                Votre navigateur n'est pas compatible
            </audio>
            <br/>
            <button onclick="setCurTime()" type="button">Set time position to 20 seconds before</button>
            <input onclick="info()" type="button" value="afficher le temps" />
            <input onclick="bigtest()" type="button" value="ecrire le temps" />
            <input type="button" onclick="afficherCompteur()" value="afficher la varible compteur" class="btn btn-success"/>
            <script>
                var audio = document.getElementById("audio");
                var compteur = 0;
                $("#audio").bind("play", function () {
                    alert('tesst et putain ca marche c\'est deja ca');
                    audio.play();
//                    while (audio.currentTime <= audio.duration) {
//                        compteur = compteur++;
//                    }
                });
                function info() {
                    alert(audio.duration);
                }
                function setCurTime() {
                    audio.currentTime = audio.currentTime - 20;
                }

                function afficherCompteur() {
                    alert(compteur);
                }


                function bigtest() {
                    var bitch = audio.currentTime;
                    $.ajax({
                        url: 'recup.php',
                        method: 'get',
                        data: {number: bitch},
                        success: function (data) {
//                            alert("enregistrement position OK")
                            window.location = 'recup.php?number=' + bitch; // renvoi la donnée qui est recuperer dans la page en php :) 
                        }
                    });
                }
            </script>

    </div>
</div>
