<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Cinemet Focus Réalisateur</title>

  <link href="css/reset.css" type="text/css" rel="stylesheet"/>
  <link href="css/realisateur.css" type="text/css" rel="stylesheet"/>
</head>
<body>
  <?php
  include "connexion-bdd.php";
  $requete = "SELECT * FROM REALISATEUR";
  $reponse = $bdd->query($requete);
  ?>
  <header>
  <?php include "header.php"?>
  </header>
  <main>

    <?php
            while($donnees = $reponse->fetch())
            {
    ?>
    <h1 class="nomrealisateur"><?php echo $donnees ["nom"];?>
    <br/>
    <?php echo $donnees ["prenom"];?></h1> <!-- cf comment afficher un titre avec la bdd-->
    <div class="blockrealisateur">
    <div class="imagerealisateur">
      <img id="pictrea" src="images/realisateur/<?php echo $donnees ["photo"];?>" width="250em" height="400em"/>
    </div>
    <div class="presentationrealisateur">
      <p>Date de naissance</p>
      <p><?php echo $donnees ["date_naissance"];?></p>
    </div>
  </div>
  <?php
          };
  ?>
  </main>
  <footer>
    <?php include "footer.php"?>
  </footer>
</body>
</html>
