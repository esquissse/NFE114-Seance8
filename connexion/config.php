<?php

  require $_SERVER['DOCUMENT_ROOT']."/NFE114-Seance8/varlocal.php";

  $connexion = mysql_connect($SERVEUR,$USER,$PASS) or die("Erreur dans la connexion ! " . mysql_error());

  function connexion() {
    require $_SERVER['DOCUMENT_ROOT']."/NFE114-Seance8/varlocal.php";
    
    if ( !mysql_select_db($nom_bdd) )
    {
    	echo "<div class='alert alert-danger'>Impossible de sélectionner la base de données !</div><br><br>";
    }

  }

?>