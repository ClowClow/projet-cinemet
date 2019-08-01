<!DOCTYPE html>

<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Cinemet Gestion des films</title>

  <link href="../css/reset.css" type="text/css" rel="stylesheet"/>
  <link href="../css/bootstrap.css" type="text/css" rel="stylesheet"/>
</head>

<body>
  <?php include "nav_admin.php"; ?>
  <center>
  <h2 class="mt-5">Cine-MET Gestion des films</h2>
  <div class="d-flex flex-column justify-content-center">
    <div class="d-flex flex-row mt-5 justify-content-center">
      <a href="add_film.php">
        <button class="btn btn-success">Ajouter un film</button>
      </a>
    </div>
    <div class="d-flex flex-row mt-3 justify-content-center">
      <a href="#">
        <button class="btn btn-success">Modifier un film</button>
      </a>
    </div>
    <div class="d-flex flex-row mt-3 justify-content-center">
      <a href="remove_film.php">
        <button class="btn btn-success">Supprimer un film</button>
      </a>
    </div>
  </div>
  </center>
</body>

</html>
