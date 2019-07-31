<?php
/*on se connecte à la bdd*/
require "co_bdd.php";
/* on passe dans une variable les données récupérées par le form*/
$role = $_POST['type'];
/*on envoie à la bdd */
if(isset($_POST['submit'])) {
  $req = $bdd->prepare('INSERT INTO ROLE (type) VALUES (:role)');
  $req->execute([
    'role' => $role,
  ]);
  header('location:../admin/portail_utilisateur.php');
}
?>
