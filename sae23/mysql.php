<?php
/* sae23 database connection script */
  $id_bd = mysqli_connect("localhost","benne","22302619","sae23")
    or die("Connexion au serveur et/ou à la base de données impossible");

  /* Character encoding management */
  mysqli_query($id_bd, "SET NAMES 'utf8'");

?>
