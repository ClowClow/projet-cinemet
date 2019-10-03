<?php
  function debug($variable) {
    echo '<pre>'. print_r($variable, true) .'</pre>';
  }

  function str_random($length) {
    $string = "123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
    return substr(str_shuffle(str_repeat($string, $length)), 0, $length);
  }

  function session() {
    if(session_status() == PHP_SESSION_NONE) {
      session_start();
    }
  }

  function accessUser() {
    if(session_status() == PHP_SESSION_NONE) {
      session_start();
    }
    if(!isset($_SESSION['auth'])) {
      $_SESSION['flash']['danger'] = "Vous n'avez pas le droit d'accéder à cette page";
      header('Location: connexion.php');
      exit();
    }
  }
 ?>
