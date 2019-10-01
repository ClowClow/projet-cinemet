<!DOCTYPE html>

<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Cinemet Connexion Admin</title>

  <link href="../css/reset.css" type="text/css" rel="stylesheet"/>
  <link href="../css/bootswatch.css" type="text/css" rel="stylesheet"/>
</head>

<body>
  <?php include "nav_co.php"; ?>
  <center>
  <h2 class="mt-5">Cine-MET Connexion</h2>
  <form class="mt-5 mb-5">
  <fieldset>
    <div class="form-group d-flex flex-row justify-content-center">
     <label for="staticName" class="col-sm-2 col-form-label">Nom d'utilisateur</label>
     <div class="col-sm-2">
       <input type="text" class="form-control-plaintext border border-info" id="staticName" placeholder="Entrer votre nom d'utilisateur">
     </div>
   </div>
   <div class="form-group d-flex flex-row justify-content-center">
     <label for="staticPassword" class="col-sm-2 col-form-label">Mot de passe</label>
     <div class="col-sm-2">
       <input type="password" class="form-control-plaintext border border-info" id="staticPassword" placeholder="Entrer votre mot de passe">
     </div>
   </div>
    <button type="submit" class="btn btn-outline-info mt-5">Se connecter</button>
  </fieldset>
</form>
</center>
</body>

</html>
