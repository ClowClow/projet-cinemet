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
  $bdd = new PDO('mysql:host=localhost;dbname=metropolis;charset=utf8','chloe','notzelda');
  $requete = "SELECT * FROM film";
  $reponse = $bdd->query($requete);
  ?>
  <header>
  <?php include "header.php"?>
  </header>
  <main>
    <h1 class="titrefilms">Nos films</h1>
    <div class="gallerie">
    <span id="item">
      <?php
              while($donnees = $reponse->fetch())
              {
                ?>
      <img src="images/films/<?php echo $donnees["image"];?>" alt="à définir"/>
      <?php
    };
    ?>
    </span>
    <!--<span id="item1">
      <img src="images/films/marvel.jpg" alt="à définir"/>
    </span>
    <span id="item2">
      <img src="images/films/shazam.jpg" alt="à définir"/>
    </span>
    <span id="item3">
      <img src="images/films/dblanche.jpg" alt="à définir"/>
    </span>
    <span id="item4">
      <img src="images/films/corgi.jpg" alt="à définir"/>
    </span>
    <span id="item5">
      <img src="images/films/bella.jpg" alt="à définir"/>
    </span>
    <span id="item6">
      <img src="images/films/dumbo.jpg" alt="à définir"/>
    </span>-->
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
