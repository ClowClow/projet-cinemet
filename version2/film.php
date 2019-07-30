<!DOCTYPE html>

<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Cinemet Nos Films</title>

  <link href="css/reset.css" type="text/css" rel="stylesheet"/>
  <link href="css/bootstrap.css" type="text/css" rel="stylesheet"/>
</head>

<body>
  <?php include "php/co_bdd.php";
  $req = $bdd->prepare('SELECT * FROM FILM');
  $req->execute();
  ?>
  <?php include "navbar.php"; ?>
  <div class="container col-md-12">
    <h2><center>Nos films</center></h2>
    <div class="row">
      <?php while($donnees = $req->fetch()) { ?>
        <div class="card border-success mb-3" style="max-width: 20rem;">
          <div class="card-header"><?php echo $donnees['titre']; ?></div>
          <div class="card-body">
            <img class="col-md-12" src="images/films/<?php echo $donnees['affiche'] ?>" />
          </div>
        </div>
    <?php } ?>
    </div>
  </div>
  <footer>
  </footer>
</body>

</html>
