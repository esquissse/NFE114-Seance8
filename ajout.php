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
  <h1>Nouveau paramètre</h1>
  <br>
  <fieldset class="well">
    <form method="post" action="show.html.php" class="form-inline" role="form">
      <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-3">
          <div class="form-group">
            <label>Paramètre : </label>
            <input type="text" class="form-control" id="param" name="parametre" placeholder="Nom du paramètre">
          </div>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-5">
          <div class="form-group">
            <label>Valeur : </label>
            <input type="text" class="form-control" id="valeur" name="valeur" placeholder="valeur du paramètre">
          </div>
        </div>
      </div>
      <p>
        <br>
      </p>
      <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-2">
          <input type="submit" name="submit" value="Enregistrer" class="btn btn-primary">
        </div>
      </div>
    </form>
  </fieldset>

  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/perso.js"></script>

  </body>

</html>