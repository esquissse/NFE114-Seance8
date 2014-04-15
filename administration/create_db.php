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

    $requete = "CREATE DATABASE config;";

    $retour = mysql_query($requete) or die("Erreur dans l'exécution de la requête ! " . mysql_error());

    if ( $retour )
      print "La base de données a été créé avec succès";

    ?>

    <p>
      <br>
    </p>
    <a href='../' class="btn btn-info"> Retour</a>

  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/perso.js"></script>

  </body>
</html>