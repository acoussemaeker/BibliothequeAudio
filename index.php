<?php
session_start();
$_SESSION['connexion'] = null;

header('Location: view/BiblioCommune.php');