
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
    use('Views/vueInscription');
    
}

    
?>
