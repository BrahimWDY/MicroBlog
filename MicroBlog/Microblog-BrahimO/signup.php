<?php
require 'includes/head.php';
require 'includes/register.php';
?>





<!-- MAIN -->
<section id="signup">


  <div class="wrapper body-inverse"> <!-- wrapper -->
    <div class="container">
      <div class="row">

      <!-- Sign Up form -->
    <div class="col-sm-5 col-md-offset-3 col-md-6">


    <div class="form-white">
      <form class="form" role="form" action="" method="POST">

          <?php if (!empty($errors)): ?>
            <div class="alert alert-danger">

              <p>Vous n'avez pas rempli le formulaire correctement !</p>
                <ul>

                  <!-- Cette boucle permet de traiter les différents message d'erreur pour afficher les messages qui conviennent à l'erreur -->
                  
                  <?php foreach ($errors as $error): ?>
                    <li><?= $error; ?></li>
                  <?php endforeach; ?>

                </ul>
            </div>
          <?php endif; ?>
        <h3 class="text-center">Inscription</h3>
        <div class="form-group">
          <label for="name">Prénom :</label>
        <input type="text" class="form-control" name="user_first" placeholder="Prénom">
        </div>
        <div class="form-group">
          <label for="name">Nom :</label>
        <input type="text" class="form-control" name="user_last" placeholder="Nom">
        </div>
        <div class="form-group">
          <label for="username">Identifiant :</label>
        <input type="text" class="form-control" name="user_uid" placeholder="Identifiant">
        </div>
        <div class="form-group">
          <label for="email2">Adresse E-mail :</label>
        <input type="email" class="form-control" name="user_email" placeholder="Adresse E-mail">
        </div>
        <div class="form-group">
          <div class="form-group">
          <label for="password2">Mot de passe :</label>
          <input type="password" class="form-control" name="user_pwd" placeholder="Mot de passe">
          </div>
        </div>
        <button type="submit" name="submit" class="btn btn-block btn-primary btn-xxl">S'inscrire !</button>
      </form>
    </div>
    </div>
  </div>
  </div>
</div>


</section>

</body>
</html>
