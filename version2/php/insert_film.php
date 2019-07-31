<?php
/*on se connecte à la bdd*/
require "co_bdd.php";
/* on passe dans une variable les données récupérées par le form*/
$titre = $_POST['titre'];
$description = $_POST['description'];
$date_sortie = $_POST['date_sortie'];
$affiche = $_POST['affiche'];
$duree_film = $_POST['duree_film'];
$bande_annonce = $_POST['bande_annonce'];
/*on envoie à la bdd */
if(isset($_POST['submit'])) {
  $req = $bdd->prepare('INSERT INTO FILM (titre, description, date_sortie, affiche, duree_film, bande_annonce)
  VALUES (:titre, :description, :date_sortie, :affiche, :duree_film, :bande_annonce)');
  $req->execute([
    'titre' => $titre,
    'description' => $description,
    'date_sortie' => $date_sortie,
    'affiche' => $affiche,
    'duree_film' => $duree_film,
    'bande_annonce' => $bande_annonce
  ]);
  header('location:../admin/portail_film.php');
}
?>
