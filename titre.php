<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Cinemet Focus Film</title>

  <link href="css/reset.css" type="text/css" rel="stylesheet"/>
  <link href="css/titre.css" type="text/css" rel="stylesheet"/>
</head>
<body>
  <?php
    include "connexion-bdd.php";
    $requete = "SELECT * FROM FILM WHERE id_film=". $_GET["id_film"];
    $reponse = $bdd->query($requete);
    while ($donnees = $reponse->fetch())
  {
?>
  <header>
  <?php include "header.php"?>
  </header>
  <main>
    <h1 class="titrefilm"><?php echo $donnees["titre"];?></h1> <!-- cf comment afficher un titre avec la bdd-->

    <div class="blockfilm">
    <div class="imagefilm">
      <img src="images/films/<?php echo $donnees["affiche"];?>" alt="à définir" width="300em" height="400em"/>
    </div>
    <div class="presentationfilm">
      <p><?php echo $donnees["description"];?></p>
    </div>
  </div>
  </main>
  <?php
    }
    $reponse->closeCursor();
  ?>
  <footer>
    <?php include "footer.php"?>
  </footer>
</body>
</html>
