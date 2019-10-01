<!DOCTYPE html>

<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Cinemet Ajouter un film</title>

  <link href="../css/reset.css" type="text/css" rel="stylesheet"/>
  <link href="../css/bootswatch.css" type="text/css" rel="stylesheet"/>
</head>

<body>
  <?php include "nav_admin.php"; ?>
  <center>
  <div class="container col-md-6">
    <h2 class="mt-5">Cine-MET Ajouter un film</h2>
    <form method="POST" action="../php/insert_film.php">
      <fieldset class="mt-5">
        <div class="form-group">
          <input name="titre" type="text" placeholder="titre du film" class="form-control" required/>
        </div>
        <div class="form-group">
          <textarea name="description" type="text" placeholder="Insérer ici le synopsis" class="form-control" required></textarea>
        </div>
        <div class="form-group">
          <input name="date_sortie" type="date" placeholder="date de sortie" class="form-control" required/>
        </div>
        <div class="form-group">
          <input name="affiche" type="text" placeholder="affiche du film" class="form-control" required/>
        </div>
        <div class="form-group">
          <input name="duree_film" type="time" placeholder="durée du film" class="form-control" required/>
        </div>
        <div class="form-group">
          <input name="bande_annonce" type="text" placeholder="lien vers la bande d'annonce du film" class="form-control" required/>
        </div>
        <div class="form-group">
          <button name="submit" type="submit" class="btn btn-success btn-lg">Ajouter</button>
        </div>
      </fieldset>
    </form>
  </div>
  </center>
</body>

</html>
