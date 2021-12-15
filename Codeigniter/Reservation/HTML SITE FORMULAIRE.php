<!DOCTYPE html>
<html>
  <head>
    <title>Jura</title>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="style.css"> 
  </head>

  <body>
    
    <!--==================== CONTACT ME ====================-->
    
    <section  class="contactsection"  id="contact">
       
      
        <form action="" class="formulaire">
          
          <fieldset>
            <h2 class="titre">Formulaire</h2>
          <div class="contact__inputs grid">
            <div class="contact__content">
              <label for="" class="texte">Date de debut de réservation</label>
              <input type="date" class="contact__input" id="datedebut" />
            </div>
            <div class="contact__content">
              <label for="" class="texte">Date de fin de réservation </label>
              <input type="date" class="contact__input" id="datefin" />
            </div>
            <div class="contact__content">
              <label for="" class="texte">Nombre de personne</label>
              <input type="number" class="contact__input" id="nombrepersonne" />
            </div>
          </div>
          <div class="contact__content">
            <label for="" class="texte">Pension</label>
            <input type="checkbox" class="contact__input" id="pension" />
          </div>
          
          <a href="#demo" class="button">Envoyer</a> </fieldset>
        </form>
<div id="demo" class="modal">
  <div class="modal_content">
    <h1>Merci</h1>

    <p>Votre reservation a été effectuée </p>

    <a href="#" class="modal_close">&times;</a>
  </div>
</div>
          
          <?php

            $db_usr = 'root';
            $db_mdp = 'rootmysql';
            $db_host = 'localhost';
            $db_name = 'ProjetJura';

            $conn = mysqli_connect($db_host,$db_usr,$db_mdp,$db_name);

            if (mysqli_connect_errno()) {
              echo "Failed to connect to MySQL: " . mysqli_connect_error();
              exit();
            }
            

            $datedebut = $_POST['datedebut'];
            $datefin = $_POST['datefin'];
            $nombrepersonne = $_POST['nombrepersonne'];
            $pension = $_POST['pension'];
            

          ?>
  
  
        </div>
    </section>

</body>
</html>
