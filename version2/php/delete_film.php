<?php
    require "co_bdd.php";

   if(isset($_POST['titre']))
   {
     $titre = $_POST['titre'];
     $cnt = array();
     $cnt = count($_POST['titre']);
     for ($i=0; $i<$cnt; $i++) {
     $req = $bdd->prepare('DELETE FROM FILM WHERE titre = :del_titre');
     $del_titre = $_POST['titre'][$i];
       $req->execute([
         'del_titre' => $del_titre,
       ]);
       header('location:../admin/portail_film.php');
     }
   }

?>
