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
      // include "connexion/config.php";
    ?>
    <h1>Liste des données insérées dans la table</h1>
    <p>
      <br />
    </p>
    <table class="table table-striped">
      <thead>
        <th>Clef</th>
        <th>Valeur</th>
      </thead>
      <tr>
        <td>un</td>
        <td>deux</td>
      </tr>
      <tr>
        <td>un</td>
        <td>deux</td>
      </tr>
    </table>
    <a href="ajout.php" class="btn btn-primary">Ajouter une nouvelle donnée</a>
    
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/perso.js"></script>
  </body>

</html>