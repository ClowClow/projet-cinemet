<?php
session_start();
$_SESSION['auth'] = $user;
header('Location: ../compte.php')
?>
