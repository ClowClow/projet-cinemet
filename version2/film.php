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
  <div class="container col-md-12 text-center">
    <h2 class="m-5">Nos films</h2>
    <div class="d-inline-flex  flex-row flex-wrap justify-content-center col-md-12">
      <?php while($donnees = $req->fetch()) { ?>
        <div class="card border-success m-3" style="max-width: 20rem;">
          <div class="card-header text-success"><?php echo $donnees['titre']; ?></div>
          <div class="card-body">
            <a href="filmtype.php?id_film=<?php echo $donnees["id_film"];?>">
              <img class="col-md-12" src="images/films/<?php echo $donnees['affiche'] ?>"/>
            </a>
          </div>
        </div>
    <?php } ?>
    </div>
  </div>
  <footer>
  </footer>
</body>

</html>
