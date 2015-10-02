<?php
session_start();
$test = (json_decode($_SESSION['connexion']));

if($_SESSION['connexion'] != null){

    $connect = 1;
    if($test->Grade =='1'){
        $type = '1';
    }else{
        $type = '0';
    }
}
else{
    $connect = 0;
    $type = '0';
}

include '../view/Connection_BDD.php';
$cnx = Connection_BDD::getInstance();

if ($connect == '1') {
    $menu = 'oui';
} else {
    $menu = "non";
}

?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!--<link rel="stylesheet" href="css/datepicker.css"/>-->
        <?php
        if ($titre == 'Connexion') {
            ?>
            <link rel="stylesheet" href="css/bootstrap.min.css"/>
            <link rel="stylesheet" href="css/ui-flick/jquery-ui.min.css"/>
            <link rel="stylesheet" href="css/style.css"/>
            <link rel="icon" type="image/png" href="cte.png" />
            <script src="js/jquery-1.10.2.js"></script>
            <script src="/js/jquery-ui-1.10.4.min.js"></script>
            <script src="js/script.js">
                </script>
            <?php
        } else {
            ?>
            <link rel="stylesheet" href="../css/bootstrap.min.css"/>
            <link rel="stylesheet" href="../css/ui-flick/jquery-ui.min.css"/>
            <link rel="stylesheet" href="../css/style.css"/>
            <link rel="icon" type="../image/png" href="cte.png" />
            <script src="../js/jquery-1.10.2.js"></script>
            <script src="../js/jquery-ui-1.10.4.min.js"></script>
            <script src="../js/jquery.ui.datepicker-fr.js"></script>
            <script src="../js/script.js"></script>
            <?php
        }
        ?>
        <title><?php echo $titre; ?></title>
    </head>
    <body>
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Bibliotheque Audio</a>
            </div>
            <ul class="nav navbar-nav navbar-right">
                <!-- Collect the nav links, forms, and other content for toggling -->
                <?php
                if ($connect == 0) {
//                    echo '<li><a>Connecté en temps que : ' . $_StESSION['nom_user'] . ' ' . $_SESSION['prenom_user'].'</a></li>';
                    echo '<input type="button" class="btn btn-default position" id="Inscription" value="Inscription" onclick="location.href=\'Inscription.php\'" />';
                    echo '<input type="button" class="btn btn-default position" id="Connexion" value="Connexion" onclick="Connexion()" />';
                    echo '<input type="password" class="btn btn-default position" id="Password" placeholder="Password" />';
                    echo '<input type="text" class="btn btn-default position" id="Login" placeholder="Login" />';
                } else {
                    echo '<div class=" btn-default" id="logout"></div>';
                    echo '<input type="button" class="btn btn-default position" id="Deconnexion" value="Deconnexion" onclick="location.href=\'../index.php\'" />';
                    if ($type == 0){
                    echo '<input type="button" class="btn btn-default position" id="BiblioPerso" value="Biblio perso" onclick="location.href=\'BiblioPerso.php\'" />';
                    echo '<input type="button" class="btn btn-default  position" id="BiblioCommune" value="Biblo commune" onclick="location.href=\'BiblioCommune.php\'" />';
                    }
                    echo '<input type="button" class="btn btn-default  position" id="profil" value="profil" onclick="GetUser('.$test->id.')" />';
                }
                ?>
            </ul>
        </nav>
        <?php
        if ($menu == 'non') {
//        echo '&nbspVous n\'êtes pas connecté.'; 
        } else {
            ?>
            <div class="bande-gauche">
                <div class="menu-gauche" >
                    <ul class="nav nav-pills nav-stacked">
                        <!--<h5 class="titreSection">COURS</h5>-->
                        <?php
                        if ($type == "0") {
                            ?>
                            <li <?php if ($_SERVER['PHP_SELF'] == "/BibliothequeAudio/view/playlist.php") echo "class='active'"; ?>><a href="playlist.php">Gestion des playlist</a></li> <!--Si la page actuelle est 'accueil.php', on ajoute la classe 'active' à l'élément-->
                            <li <?php if ($_SERVER['PHP_SELF'] == "/BibliothequeAudio/view/Request_Audio.php") echo "class='active'"; ?>><a href="Request_Audio.php">Faire une demande</a></li>
                            <li >
                                <div class="form-group">
                                    <input type="search" class="input-sm form-control" placeholder="Recherche">
                                    <button type="submit" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-search"></span> Chercher</button>
                                </div>
                            </li>
                            </br>
                            <li ><img src="../image/musique.png" class="img-rounded image"></li>
                            <li>
                                <audio controls="controls" preload="none" class="image">
                                    <source src="audio/'.$info->Nom.'.mp3" type="audio/mp3" />
                                </audio>
                            </li>
                            <li>
<!--                                <div class="list-group">
                                    <a href="#" class="list-group-item active">
                                        Playlist favorite
                                    </a>
                                    <a href="#" class="list-group-item">Dapibus ac facilisis in</a>
                                    <a href="#" class="list-group-item">Morbi leo risus</a>
                                    <a href="#" class="list-group-item">Porta ac consectetur ac</a>
                                    <a href="#" class="list-group-item">Vestibulum at eros</a>
                                </div>
                            </li>-->
                            <br/><hr/><br/>

                            <?php
                        }
                        else { //SECTION VISIBLE UNIQUEMENT PAR LES ADMINS
                            ?>
                            <h5 class="titreSection">ADMINISTRATION</h5>
                            <li <?php if ($_SERVER['PHP_SELF'] == "/BibliothequeAudio/view/Gestion_User.php") echo "class='active'"; ?>><a href="Gestion_User.php">Gestion des utilisateurs</a></li>
                            <li <?php if ($_SERVER['PHP_SELF'] == "/BibliothequeAudio/view/Gestion_File.php") echo "class='active'"; ?>><a href="Gestion_File.php">Gestion des fichiers audio</a></li>
                            <li <?php if ($_SERVER['PHP_SELF'] == "/BibliothequeAudio/view/Gestion_Request.php") echo "class='active'"; ?>><a href="Gestion_Request.php">Gestion des demandes</a></li>
                            <br/>
                            <?php
                        } //FIN SECTION ADMIN
                        ?>
                    </ul>
                </div>
            </div>
            <?php
        }?>