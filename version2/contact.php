<!DOCTYPE html>

<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Cinemet Contact</title>

  <link href="css/reset.css" type="text/css" rel="stylesheet"/>
  <link href="css/bootstrap.css" type="text/css" rel="stylesheet"/>
  <link href="css/general.css" type="text/css" rel="stylesheet"/>
</head>

<body>
  <main>
      <?php include "navbar.php"; ?>
      <div class="container">
        <h2 class="text-center mt-5">Nous contacter</h2>
        <div class="d-flex flex-row col-md-12">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2576.648208591513!2d4.713818314923808!3d49.77387404376454!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47ea0e0e0033a365%3A0xa27dc640e0999d76!2sM%C3%A9tropolis!5e0!3m2!1sfr!2sfr!4v1564556484689!5m2!1sfr!2sfr"
          width="600" height="450" frameborder="0" style="border:0" allowfullscreen class="col-md-6 m-3 mt-5">
          </iframe>
          <form class="col-md-6 m-3 mt-5">
            <fieldset>
              <div class="form-group">
                <label class="text-success align-left" for="exampleInputPassword1">Nom et prénom</label>
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
        </div>
      </div>
    </main>
    <footer>
      <?php include "footer.php"; ?>
    </footer>
</body>

</html>
