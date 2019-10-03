<?php
if (!empty($_POST) && !empty($_POST['pseudo']) && !empty($_POST['mdp'])) {
  include 'co_bdd.php';
  include 'functions.php';
  session_start();
  $req = $bdd -> prepare('SELECT * FROM USER WHERE (`pseudo` = :pseudo
  OR `mail` = :pseudo) AND `confirmed_at` IS NOT NULL');
  $req -> execute([
    'pseudo' => $_POST['pseudo']
  ]);
  $user = $req -> fetch();
  if (password_verify($_POST['mdp'], $user['mdp'])) {
    $_SESSION['auth'] = $user;
    $_SESSION['flash']['success'] = "Vous êtes bien connecté au site !";
    header('Location: compte.php');
    exit();
  } else {
    $_SESSION['flash']['danger'] = "Identifiant ou mot de passe invalide !";
  }
}
/*session_start();*/
?>
