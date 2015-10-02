
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
            <script>
                var audio = document.getElementById("audio");
                function info() {
                    alert(audio.duration);
                }
                if(audio.paused){
                    alert('go');
                }
                    function setCurTime() {
                        audio.currentTime = audio.currentTime - 20;
                    }

                    function bigtest() {
                        var bitch = 100;
                        $.ajax({
                            url: 'recup.php',
                            method: 'post',
                            data: {number: bitch},
                            success: function (data) {
//                            alert("enregistrement position OK")
                                window.location = 'recup.php';

                            }
                        });
                }
            </script>

    </div>
</div>
