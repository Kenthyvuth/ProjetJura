<?php
require_once "Template/Header.php";
?><!DOCTYPE html>
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
            <a href="">
                Déconnexion
            </a>
        </div>
    </body>
</html>