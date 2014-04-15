<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Interaction avec une base de données</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
  </head>
  <body>

  <?php

    require "../_menu_html.php";  
    require "../connexion/config.php";
    
    // On sélectionne la base de données dans laquelle on veut créer la table
    connexion();

    $requete = "CREATE TABLE config (id SMALLINT(5) PRIMARY KEY, parametre VARCHAR(255), valeur VARCHAR(255));";

    $retour = mysql_query($requete) or die("Erreur dans l'exécution de la requête ! " . mysql_error());

    if ( $retour )
      print "La table config a été créé avec succès";

    ?>

    <p>
      <br>
   </p>
   <a href=<?php include "../varlocal.php"; echo $path; ?> class='btn btn-info'> Retour</a>


  <script src="../js/jquery.js"></script>
  <script src="../js/bootstrap.js"></script>
  <script src="../js/perso.js"></script>

  </body>
</html>