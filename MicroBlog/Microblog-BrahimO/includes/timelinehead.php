<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Timeline</title>

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">


  </head>
  <body>

    <header>
      <div class="title">
        Timeline
      </div>
    </header>

    <!-- BARRE DE NAVIGATION + PROFIL  -->

<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="#" class="navbar-brand">Microblog</a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <span class="glyphicon glyphicon-user"></span> 

                        <!-- On affiche l'id de l'utilisateur -->

                        <strong><?php if   (isset($_SESSION['iduser'])) {
                          echo $_SESSION['iduser'];
                          } else {

                          } ?></strong>
                        <span class="glyphicon glyphicon-chevron-down"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <div class="navbar-login">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <p class="text-center">
                                            <span class="glyphicon glyphicon-user icon-size"></span>
                                        </p>
                                    </div>
                                    <div class="col-lg-8">

                                      <!-- On affiche le prénom et nom de l'utilisateur -->
                                        <p class="text-left"><strong><?php
                                        if (isset($_SESSION['auth'])) {
                                          echo $_SESSION['auth'] . " " . $_SESSION['lastname'];
                                          } else {

                                          }
                                         ?></strong></p>

                                         <!-- On affiche le mail de l'utilisateur -->

                                        <p class="text-left small"><?php if   (isset($_SESSION['email'])) {
                                          echo $_SESSION['email'];
                                          } else {

                                          } ?></p>

                                          <!-- On affiche la date d'inscription de l'utilisateur -->

                                        <p class="text-left">
                                          Date d'inscription : <?php if(isset($_SESSION['date'])){
                                          echo date('d/m/Y',strtotime( $_SESSION['date']) );}else{} ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="navbar-login navbar-login-session">
                                <div class="row">
                                    <div class="col-lg-12">
                                      <form action="includes/logout.php" method="POST">
                                        <button class="btn btn-danger" type="submit" name="submit">Se déconnecter</button>
                                      </form>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>


<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
