<?php
  if(session_status() == PHP_SESSION_NONE) {
    session_start();
  }

  if(!isset($_SESSION['auth'])) {
    $_SESSION['flash']['error'] = "Vous n'avez pas le droit d'accéder à cette page";
    header('Location: connexion.php');
  }
 ?>
<!DOCTYPE html>

<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Cinemet Profil</title>

  <link href="css/reset.css" type="text/css" rel="stylesheet"/>
  <link href="css/bootswatch.css" type="text/css" rel="stylesheet"/>
  <link href="css/general.css" type="text/css" rel="stylesheet"/>
</head>

<body>
  <main>
    <?php include "navbar.php"; ?>
    <center>
    <h2 class="mt-5">Cine-MET Votre compte utilisateur !</h2>

    </center>
  </main>
  <footer>
      <?php include "footer.php"; ?>
  </footer>
</body>

</html>
