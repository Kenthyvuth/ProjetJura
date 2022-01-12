<?php

// Informations d'identification
$db_srv = "localhost";
$db_usr = "root";
$db_mdp = "rootmysql";
$db_name = "ProjetJura";
 
// Connexion à la base de données MySQL 
$conn = mysqli_connect($db_srv, $db_usr, $db_mdp, $db_name);
 
// Vérifier la connexion
if($conn === false){
    die("ERREUR : Impossible de se connecter. " . mysqli_connect_error());
}
?>