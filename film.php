<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Cinemet Films</title>

  <link href="css/reset.css" type="text/css" rel="stylesheet"/>
  <link href="css/film.css" type="text/css" rel="stylesheet"/>
</head>

<body>
  <?php
  include "connexion-bdd.php";
  /*$bdd = new PDO('mysql:host=localhost;dbname=metropolis;charset=utf8','chloe','notzelda');*/
  $requete = "SELECT * FROM FILM";
  $reponse = $bdd->query($requete);
  ?>
  <header>
  <?php include "header.php"?>
  </header>
  <main>
    <h1 class="titrefilms">Nos films</h1>
    <div class="gallerie">

      <?php
              while($donnees = $reponse->fetch())
              {
                ?>
      <span id="item">
      <a href="titre.php?id_film=<?php echo $donnees["id_film"];?>">
        <img src="images/films/<?php echo $donnees["image"];?>" alt="à définir"/>
      </a>
      </span>
      <?php
    };
    ?>
</div>
<div class="linkfilms">
  <a href="listfilm.php"><button>Liste des films disponibles</button></a>
  <a href="listacteur.php"><button>Liste par acteurs</button></a>
  <a href="listrealisateur.php"><button>Liste par réalisateur</button></a>
</div>
<br/>
  </main>
  <footer>
    <?php include "footer.php"?>
  </footer>
</body>
</html>
