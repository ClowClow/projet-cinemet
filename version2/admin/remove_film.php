<!DOCTYPE html>

<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Cinemet Supprimer un film</title>

  <link href="../css/reset.css" type="text/css" rel="stylesheet"/>
  <link href="../css/bootstrap.css" type="text/css" rel="stylesheet"/>
</head>

<body>
  <?php include "nav_admin.php";
        include "../php/co_bdd.php";
        include "../php/select_film.php";
  ?>

  <div class="container col-md-12">
    <center>
    <h2 class="mt-5">Cine-MET Supprimer un film</h2>
    <form method="POST" action="../php/delete_film.php">
      <fieldset class="mt-5">
        <?php while($donnees = $req->fetch()) { ?>
        <div class="form-group d-flex flex-row">
          <input name="titre[]" type="checkbox" class="form-control col-md-4" value="<?php echo $donnees['titre']; ?>"/>
          <p class="col-md-4"><?php echo $donnees['titre']; ?></p>
        </div>
      <?php } ?>
      <button type="submit" class="btn btn-success mt-5">Supprimer</button>
      </fieldset>
    </form>
  </center>
  </div>
</body>

</html>
