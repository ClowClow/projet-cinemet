<!DOCTYPE html>

<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Cinemet Film</title>

  <link href="css/reset.css" type="text/css" rel="stylesheet"/>
  <link href="css/bootstrap.css" type="text/css" rel="stylesheet"/>
</head>

<body>
  <?php include "navbar.php"; ?>
  <?php include "php/co_bdd.php";
        $req = $bdd->prepare('SELECT * FROM FILM WHERE id_film='. $_GET["id_film"]);
        $req->execute();
        while($donnees = $req->fetch()) {
  ?>
  <center>
  <div class="jumbotron col-md-8 m-5 border border-success">
  <h1 class="display-3"><?php echo $donnees['titre']?></h1>
  <div class="d-flex flex-row align-items-center">
    <img src="images/films/<?php echo $donnees['affiche']?>" class="col-md-6"/>
    <p class="lead"><?php echo $donnees['description']?></p>
  </div>
  <hr class="my-4">
  <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
  <p class="lead">
    <a class="btn btn-outline-success btn-lg" href="#" role="button">Réalisateur</a>
  </p>
</div>
</center>
<?php } ?>
</body>
</html>
