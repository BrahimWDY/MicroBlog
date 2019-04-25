<?php

  // On démarre la session

  session_start();


  require 'includes/head.php';
?>

    <!-- MAIN -->

    <section id="main">

      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <div class="signin">
              <div class="jumbotron">
              <h1 class="display-4">Bienvenue !</h1>
                <p class="lead">MicroBlog est mon projet PHP. Vous pouvez poster des messages courts comme des tweets.</p>

                <hr class="my-4">

                <p>Inscrivez-vous vite si vous ne l'êtes pas encore, ou connectez-vous !</p>

                <p class="lead">
                <a class="btn btn-primary btn-lg" href="signup.php" role="button">S'inscrire</a>

                <a class="btn" href="login.php" role="button">Se connecter</a>
                </p>
            </div>
          </div>
        </div>
        </div>
      </div>



    </section>

  </body>
  </html>
