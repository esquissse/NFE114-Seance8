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
      include "_menu_html.php";
    ?>
    <h1>Liste des données insérées dans la table</h1>
    <p>
      <br />
    </p>
    <?php
      require $_SERVER['DOCUMENT_ROOT']."/NFE114-Seance8/varlocal.php";
      include "connexion/config.php";

      $requete = "SELECT parametre,valeur FROM config";

      connexion();

      $resultat = mysql_query($requete) or die("La requête a échoué : ".mysql_error());

      echo "<table class='table table-striped'>";
      echo "<thead>";
      echo "<th>Paramètre</th>";
      echo "<th>Valeur</th>";
      echo "</thead>";
      
      if (mysql_num_rows($resultat) == 0) {
        echo "Aucune ligne trouvée, rien à afficher.";
        exit;
      } else {
        while( $tuple = mysql_fetch_assoc($resultat))
        {
          echo "<tr>";
          echo "<td>" . $tuple['parametre'] . "</td>";
          echo "<td>" . $tuple['valeur'] . "</td>";
          echo "</tr>";
        }
      }
      echo "</table>";
    ?>
    <a href="ajout.php" class="btn btn-primary">Ajouter une nouvelle donnée</a>
    
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/perso.js"></script>
  </body>

</html>