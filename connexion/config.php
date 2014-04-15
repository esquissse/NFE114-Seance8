<?php

  require "../varlocal.php";
  // require "varlocal.php";

  $connexion = mysql_connect($SERVEUR,$USER,$PASS) or die("Erreur dans la connexion ! " . mysql_error());

  function connexion() {
    require "../varlocal.php";
    
    mysql_select_db($nom_bdd) or die("Erreur dans la sélection de la base de données ! " . mysql_error());
  }

?>