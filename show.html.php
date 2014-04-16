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
      include "connexion/config.php";
    
      // Récupération des valeurs du formulaire
      $param = $_POST['parametre'];
      $valeur = $_POST['valeur'];

      connexion();

      // Préparation de la requête d'insertion.
      // $requete = 'INSERT INTO config(id,parametre,valeur) VALUES ("","'.$parametre.'","'.$valeur.'");';
      $requete = "INSERT INTO config(parametre,valeur) VALUES ('$param','$valeur');";

      mysql_query($requete) or die("Impossible d'insérer les valeurs :". mysql_error());
      
      $result = "";
      $result .= "<br>";
      $result .= "<br>";
      $result .= "<div class='row alert alert-success'>";
      $result .=  "<div class='col-md-1'><strong> Paramètre : </strong></div>";
      $result .=  "<div class='col-md-3'>" . $param . "</div>";
      $result .=  "<div class='col-md-1'><strong> Valeur : </strong></div>";
      $result .=  "<div class='col-md-4'>" . $valeur . "</div>";
      $result .= "</div>";
      echo $result;
    ?>

  <script src="../js/jquery.js"></script>
  <script src="../js/bootstrap.js"></script>
  <script src="../js/perso.js"></script>


  </body>
</html>