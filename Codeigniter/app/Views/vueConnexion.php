
<?php
require('config.php');
session_start();

if (isset($_POST['username'])) {
    
    // Récupère le nom d'utilisateur et supprime les antislashes
    $username = stripslashes($_REQUEST['username']);
    
    // Fonction qui permet de conserver les caractères spéciaux tout en
    // préservant la requête
    $username = mysqli_real_escape_string($conn, $username);
    
    // On fait de même pour le mot de passe
    $password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($conn, $password);
    
    // Préparation de la requête SELECT pour vérifier si 
    // l'username et le mdp entrés dans le formulaire 
    // sont présents dans la BDD
    $query = "SELECT * FROM `Client` WHERE identifiant='$username' and mdp='$password'";
    
    // Envoi de la requête au serveur MySQL
    $result = mysqli_query($conn,$query) or die ("Une erreur est survenue dans l'opération : " . mysql_error());
    
    // Fonction qui retourne le nombre de lignes d'un résultat MySQL
    $rows = mysqli_num_rows($result);
    
    // Si les identifiants sont corrects, on crée la session 
    // au nom de l'utilisateur
    if($rows==1) {
        
        $_SESSION['username'] = $username;
        header("Location: index.php");
    }
    // Sinon on retourne un message d'erreur
    else {
        
    $message = "Le nom d'utilisateur ou le mot de passe est incorrect.";
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>
        <!--Formualaire de connexion-->
        <form class="box" action="" method="post" name="login">
            <h1 class="box-logo box-title">
                Projet Jura
            </h1>
            <h1 class="box-title">
                Connexion
            </h1>
            <input type="text" class="box-input" name="username" placeholder="Nom d'utilisateur">
            <input type="password" class="box-input" name="password" placeholder="Mot de passe">
            <input type="submit" value="Connexion " name="submit" class="box-button">
            <p class="box-register">
                Vous êtes nouveau ici ?
                <a href="register.php">
                    S'inscrire
                </a>
            </p>
<?php if (! empty($message)) { ?>
            <p class="errorMessage"><?php echo $message; ?></p>
<?php } ?>
        </form>
    </body>
</html>