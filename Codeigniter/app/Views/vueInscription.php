<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>
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

    </body>
</html>