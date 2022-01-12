<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>
<?php
require('config.php');

if (isset($_REQUEST['username'], $_REQUEST['password'])){
  
    // Fonctions et suppression des antislashes 
    // et conservation des caractères spéciaux
    // pour la requête SQL
    $nom = stripslashes($_REQUEST['nom']);
    $nom = mysqli_real_escape_string($conn, $nom);
    
    $prenom = stripslashes($_REQUEST['prenom']);
    $prenom = mysqli_real_escape_string($conn, $prenom);
    
    $username = stripslashes($_REQUEST['username']);
    $username = mysqli_real_escape_string($conn, $username);
  
    $password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($conn, $password);
  
    $email = stripslashes($_REQUEST['email']);
    $email = mysqli_real_escape_string($conn, $email);
  
    // Requête INSERT
    $query = "INSERT into `Client` (nomClient,prenomClient,identifiant, mdp,mail) VALUES ('$nom','$prenom','$username','$password','$email')";
    // On exécute la requête sur la BDD
    $res = mysqli_query($conn, $query);
    
    if($res){
        
       echo "<div class='sucess'>
             <h3>Vous êtes inscrit avec succès.</h3>
             <p>Cliquez ici pour vous <a href='login.php'>connecter</a></p>
       </div>";
    }
}
else {
?>
        <!--Formulaire d'inscription-->
        <form class="box" action="" method="post">
            <h1 class="box-logo box-title">
                Projet Jura
            </h1>
            <h1 class="box-title">
                S'inscrire
            </h1>
            <input type="text" class="box-input" name="nom" placeholder="Nom" required />
            <input type="text" class="box-input" name="prenom" placeholder="Prénom" required />
            <input type="text" class="box-input" name="username" placeholder="Nom d'utilisateur" required />
            <input type="password" class="box-input" name="password" placeholder="Mot de passe" required />
            <input type="text" class="box-input" name="email" placeholder="Email" required />
            <input type="submit" name="submit" value="S'inscrire" class="box-button" />
            <p class="box-register">
                Déjà inscrit?
                <a href="login.php">
                    Connectez-vous ici
                </a>
            </p>
        </form>
<?php } ?>
    </body>
</html>