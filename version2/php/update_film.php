<?php
if (isset($_POST['id']))
{
  $id = $_POST['id'];
  $cnt = count($_POST['id']);

  if ($cnt>1) {
    header('location:../admin/only_one_film.php');
  }
  else {
  $id = $_POST['id_film'];
  echo "bonjour";
  echo $id;
  }
}
?>
