<?php

  require $_SERVER['DOCUMENT_ROOT']."/NFE114-Seance8/varlocal.php";

  $connexion = mysql_connect($SERVEUR,$USER,$PASS) or die("Erreur dans la connexion ! " . mysql_error());

  function connexion() {
    require $_SERVER['DOCUMENT_ROOT']."/NFE114-Seance8/varlocal.php";
    
    mysql_select_db($nom_bdd) or die("Erreur dans la sélection de la base de données ! " . mysql_error());
  }

?>