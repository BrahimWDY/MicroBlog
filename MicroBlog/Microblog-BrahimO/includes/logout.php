<?php

// Si l'utilisateur appuis sur le bouton "se déconnecter" alors on execute les fonctions suivante

  if (isset($_POST['submit'])) {

    session_start();
    session_unset();
    session_destroy();

    $_SESSION['flash']['danger'] = 'Vous êtes déconnecté !';
  }

 ?>

 <!-- Une fois déconnecter on le redirige vers la page index.php -->

 <meta http-equiv="refresh" content="1;url=../index.php"/>
