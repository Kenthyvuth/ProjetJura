<?php
  // Initialiser la session
  session_start();
  
  // Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
  if(!isset($_SESSION["username"])) {
      
    header("Location: login.php");
    exit(); 
  }
  
  $username = $_SESSION['username'];
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>
        <div class="success">
            <h1>
                Bienvenue <?php echo $_SESSION['username']; ?>!</h1>
            <p>
                C'est votre tableau de bord.
            </p>
            <a>
                <?php check($username);?>
            </a>
            <a href="logout.php">
                Déconnexion
            </a>
        </div>
    </body>
</html>