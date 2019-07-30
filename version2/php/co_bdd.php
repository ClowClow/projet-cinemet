<?php
try {
  $bdd = new PDO('mysql:host=localhost;dbname=metropolis;charset=utf8', 'chloe', 'notzelda', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch (Exception $e) {
    die('Erreur : '.$e->getMessage());
}
?>
