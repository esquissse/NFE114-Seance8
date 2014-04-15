<nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Interaction avec une base de données</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href=<?php include "varlocal.php"; echo $path; ?> >Accueil</a></li>
        <li><a href=<?php include "varlocal.php"; echo $path."ajout.php"; ?> ><span class="glyphicon glyphicon-plus"></span> Ajouter une donnée</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-cog"></span> Administration <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href=<?php include "varlocal.php"; echo $path."administration/create_db.php"; ?> ><span class="glyphicon glyphicon-pencil"></span> Création de la base de données</a></li>
            <li><a href=<?php include "varlocal.php"; echo $path."administration/create_table.php"; ?> ><span class="glyphicon glyphicon-edit"></span> Création de la table Config</a></li>
            <li><a href=<?php include "varlocal.php"; echo $path."administration/drop_db.php"; ?> ><span class="glyphicon glyphicon-trash"></span> Suppression de la base de données</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
