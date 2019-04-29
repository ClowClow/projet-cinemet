<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Cinemet Index</title>

  <link href="css/reset.css" type="text/css" rel="stylesheet"/>
  <link href="css/index.css" type="text/css" rel="stylesheet"/>
</head>

<body>
  <header>
  <?php include "header.php"?>
  </header>
  <main>
    <!-- code pour le slider -->
      <div class="slider-container">
			<!--images du slide-->
					<div class="mySlides">
						<div class="numbertext"></div>
						<img id="slide" src="images/slides/slide1.jpg" style="width:100%">
					</div>

					<div class="mySlides">
						<div class="numbertext"></div>
						<img id="slide" src="images/slides/slide2.jpg" style="width:100%">
					</div>

					<div class="mySlides">
							<div class="numbertext"></div>
							<img id="slide" src="images/slides/slide3.jpg" style="width:100%">
					</div>
    </div> <!-- Fin du slider -->
    <!-- code pour le carroussel -->
    <div class="carrousel">
      <div class="leftarrow"><</div>
      <div class="frame"><img id="frame" src="images/films/bella.jpg" width="200em" height="400em"></div>
      <div class="frame"><img id="frame" src="images/films/marvel.jpg" width="200em" height="400em"></div>
      <div class="frame"><img id="frame" src="images/films/dumbo.jpg" width="200em" height="400em"></div>
      <div class="frame"><img id="frame" src="images/films/avengers.jpg" width="200em" height="400em"></div>
      <div class="frame"><img id="frame" src="images/films/corgi.jpg" width="200em" height="400em"></div>
      <div class="frame"><img id="frame" src="images/films/shazam.jpg" width="200em" height="400em"></div>
      <div class="frame"><img id="frame" src="images/films/dblanche.jpg" width="200em" height="400em"></div>
      <div class="rightarrow">></div>
    </div> <!-- Fin du carrousel -->
    <!-- code pour la parallax -->
    <div class="parallax-window" data-parallax="scroll" data-image-src="images/cine.jpg"
    alt="salle de cinéma en parallax"><!-- Fin de la parallax -->
    <!-- code pour la présentation -->
    </div>
    <div class="presentation" id="presentation">
      <div class="texte">
      <h1 class="prestitre">Cine-<span class="bold">met</span></h1>
      </br>
      <p class="prestexte">Le meilleur du cinéma s'invite dans votre salon !!</p>
    </div>
    <div class="images">
      <img id="first"src="images/metropolis.jpg" alt="cinéma métropolis"
      width="300em" height="200em"/>
      <img id="second" src="images/salon.jpg" alt="image représentant un salon"
      width="300em" height="200em"/>
    </div>
  </div> <!-- Fin de la présentation-->
  </main>
  <footer>
    <?php include "footer.php"?>
  </footer>
  <script type="text/javascript" src="js/jquery.js"></script>
  <!-- Pour la parallax -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/parallax.js/1.4.2/parallax.min.js"></script>
  <!-- Mes fichiers js -->
  <script type="text/javascript" src="js/index.js"></script>
</body>
</html>
