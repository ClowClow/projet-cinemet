<!DOCTYPE html>

<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Cinemet Inscription</title>

  <link href="css/reset.css" type="text/css" rel="stylesheet"/>
  <link href="css/bootswatch.css" type="text/css" rel="stylesheet"/>
  <link href="css/general.css" type="text/css" rel="stylesheet"/>
</head>

<body>
  <main>
    <?php include "navbar.php"; ?>
    <?php
    if(isset($_POST)) {
      include "php/register.php";
    }
     ?>
    <center>
    <h2 class="mt-5">Cine-MET Inscription</h2>
    <?php
      if(!empty($errors)) :?>
        <div class="alert alert-danger col-md-4">
          <p> Le formulaire comporte des erreurs ! </p>
          <ul>
          <?php  foreach($errors as $error) : ?>
            <li><?php echo($error); ?></li>
          <?php endforeach;?>
          </ul>
        </div>
    <?php endif; ?>
    <form method="post" class="mt-5 mb-5">
    <fieldset>
      <div class="form-group d-flex flex-row justify-content-center">
       <div class="col-sm-2">
         <input name="nom" type="text" class="form-control-plaintext border border-info" placeholder="Entrer votre nom">
       </div>
     </div>
     <div class="form-group d-flex flex-row justify-content-center">
      <div class="col-sm-2">
        <input name="prenom" type="text" class="form-control-plaintext border border-info" placeholder="Entrer votre prenom">
      </div>
    </div>
      <div class="form-group d-flex flex-row justify-content-center">
       <div class="col-sm-2">
         <input name="pseudo" type="text" class="form-control-plaintext border border-info" placeholder="Entrer votre nom d'utilisateur">
       </div>
     </div>
     <div class="form-group d-flex flex-row justify-content-center">
       <div class="col-sm-2">
         <input type="password" name="mdp" class="form-control-plaintext border border-info" placeholder="Entrer votre mot de passe">
       </div>
     </div>
     <div class="form-group d-flex flex-row justify-content-center">
       <div class="col-sm-2">
         <input type="password" name="password_confirm" class="form-control-plaintext border border-info" placeholder="Confirmer votre mot de passe">
       </div>
     </div>
     <div class="form-group d-flex flex-row justify-content-center">
       <div class="col-sm-2">
         <input type="mail" name="mail" class="form-control-plaintext border border-info" placeholder="Entrer votre adresse mail">
       </div>
     </div>
      <button type="submit" class="btn btn-outline-info mt-5">S'inscrire'</button>
    </fieldset>
    </form>
    </center>
  </main>
  <footer>
    <?php include "footer.php"; ?>
  </footer>
</body>

</html>
