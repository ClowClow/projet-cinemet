<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<a class="navbar-brand" href="#">Cine-MET</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarColor02">
  <ul class="navbar-nav mr-auto">
    <li class="nav-item active">
      <a class="nav-link text-success" href="film.php">Nos films <span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="index.php">Accueil</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Qui-sommes-nous ?</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="contact.php">Contact</a>
    </li>
  </ul>
  <form class="form-inline my-2 my-lg-0 ml-auto">
    <input class="form-control mr-sm-2" type="text" placeholder="Rechercher dans le site">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Rechercher</button>
  </form>
  <ul class="navbar-nav ml-auto">
    <?php
      if (isset($_SESSION['auth'])) { ?>
        <li class="nav-item">
          <a class="nav-link text-info" href="php/logout.php">Se déconnecter</a>
        </li>
      <?php } else { ?>
        <li class="nav-item">
          <a class="nav-link text-info" href="inscription.php">S'inscrire</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-info" href="connexion.php">Se connecter</a>
        </li>
      <?php } ?>
  </ul>
</div>
</nav>
