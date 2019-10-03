<?php
  require_once 'php/functions.php';
  session();
  accessUser();
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
    <h2 class="mt-5">Cine-MET Compte utilisateur <?php echo ($_SESSION['auth']['pseudo']); ?> !</h2>

    </center>
  </main>
  <footer>
      <?php include "footer.php"; ?>
  </footer>
</body>

</html>
