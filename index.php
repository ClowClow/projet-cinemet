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
    <div class="slider">
    </div>
    <div class="carousel">
    </div>
    <div class="parallax-window" data-parallax="scroll" data-image-src="images/cine.jpg"
    alt="salle de cinéma en parallax">

    </div>
    <div class="presentation" id="presentation">
      <h1 class="prestitre">Cine-<span class="bold">met</span></h1>
    </div>

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
