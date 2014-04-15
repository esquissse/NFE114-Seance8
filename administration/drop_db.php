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

    $requete = "DROP DATABASE config";

    $retour = mysql_query($requete) or die("Erreur dans la suppression de la base de données ! " . mysql_error());

    if (retour)
      print "La base de donnée a bien été supprimée !";
  ?>

  <p>
      <br>
    </p>
  <a href='../' class="btn btn-info"> <span class="glyphicon glyphicon-arrow-left"></span> Retour</a>

  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/perso.js"></script>

  </body>
</html>