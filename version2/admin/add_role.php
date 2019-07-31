<!DOCTYPE html>

<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Cinemet Ajout Rôle</title>

  <link href="../css/reset.css" type="text/css" rel="stylesheet"/>
  <link href="../css/bootstrap.css" type="text/css" rel="stylesheet"/>
</head>

<body>
  <?php include "nav_admin.php";
  ?>
  <center>
  <div class="container">
    <h2 class="mt-5">Cine-MET Ajout d'un rôle</h2>
    <form method="POST" action="../php/insert_role.php">
      <fieldset>
        <div class="form-group">
          <input name="type" type="text" placeholder="nom du rôle" class="form-control" required/>
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
