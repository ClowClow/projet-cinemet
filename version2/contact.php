<!DOCTYPE html>

<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Cinemet Contact</title>

  <link href="css/reset.css" type="text/css" rel="stylesheet"/>
  <link href="css/bootstrap.css" type="text/css" rel="stylesheet"/>
</head>

<body>
    <?php include "navbar.php"; ?>
<form>
  <fieldset class="col-md-6">
    <legend><center>Nous contacter</center></legend>
    <div class="form-group">
      <label class="text-success" for="exampleInputPassword1">Nom et prénom</label>
      <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Nom, prénom(s)">
    </div>
    <div class="form-group">
      <label class="text-success" for="exampleInputEmail1">Adresse email</label>
      <input type="email" class="form-control" id="exampleInputEmail1"
      aria-describedby="emailHelp" placeholder="Entrez votre adresse email">
      <small id="emailHelp" class="form-text text-muted">Votre adresse mail ne
        sera pas utilisée pour tout autre but que l'envoi de ce message.</small>
    </div>
    <div class="form-group">
      <label class="text-success" for="exampleInputPassword1">Objet</label>
      <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Sujet de votre message">
    </div>
    <div class="form-group">
      <label class="text-success" for="exampleTextarea">Votre message</label>
      <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
    </div>
    <button type="submit" class="btn btn-outline-success">Envoyer</button>
  </fieldset>
</form>

</body>

</html>
