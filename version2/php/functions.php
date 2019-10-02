<?php
  function debug($variable) {
    echo '<pre>'. print_r($variable, true) .'</pre>';
  }

  function str_random($length) {
    $string = "123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
    return substr(str_shuffle(str_repeat($string, $length)), 0, $length);
  }
 ?>
