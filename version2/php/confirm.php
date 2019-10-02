<?php
include "co_bdd.php";
/* on commence par récupérer les paramètres */
$user_id = $_GET['id'];
$token = $_GET['token'];

$req = $bdd -> prepare('SELECT `confirmation_token` FROM USER WHERE `id_user` = ?');
$req -> execute([$user_id]);
$user = $req -> fetch();

/* on vérifie que l'utilisateur et le token correspondent */

if ($user && $user['confirmation_token'] == $token) {
  $req= $bdd -> prepare('UPDATE USER SET `confirmation_token` = NULL,
  `confirmed_at` = NOW() WHERE `id_user` = ?') -> execute([$user_id]);
  /* on redirige l'utilisateur vers la page de connexion */
  echo '<meta http-equiv="refresh" content="0; URL=../connexion.php">';
  exit ();
} else {
  die('oups');
}
?>
