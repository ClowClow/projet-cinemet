<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Cinemet Contact</title>

  <link href="css/reset.css" type="text/css" rel="stylesheet"/>
  <link href="css/contact.css" type="text/css" rel="stylesheet"/>
</head>

<body>
  <header>
  <?php include "header.php"?>
  </header>
  <main>
    <form action="/index.php" method="POST">
        <h1 class="titrecontact">Nous contacter<h1>
        <input type="text" name="name" required placeholder="NOM et prénom" class="name"><br/>
        <input type="email" name="mail" required placeholder="Adresse email" class="mail"><br/>
        <input type="text"  name="objet" required placeholder="Objet de votre demande" class="object"><br/>
        <textarea id="demande" name="votre demande" rows="auto" cols="67%" class="zonetext">
        </textarea><br/>
      <button type="submit" class="send">Envoyer</button>
</form>
  </main>
  <footer>
    <?php include "footer.php"?>
  </footer>
</body>
</html>
