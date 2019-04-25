<?php
  session_start();

  require 'includes/head.php';
  require 'includes/login1.php';
?>


 <!-- MAIN -->
 <section id="connexion">

   <!-- Body -->
<div class="wrapper body-inverse"> <!-- wrapper -->
  <div class="container">
    <div class="row">
    <!-- Sign In form -->
      <div class="col-sm-5 col-sm-offset-1 col-md-offset-3 col-md-6" >

        <div class="form-white">

         <form class="form" role="form" action="" method="POST">
          <h3 class="text-center">Connexion </h3>
         <div class="form-group">
         <label for="email">Identifiant / E-mail :</label>
         <input type="text" class="form-control" name="user_uid" placeholder="Identifiant / E-mail">
         </div>
         <div class="form-group">
         <label for="password">Mot de passe :</label>
         <input type="password" class="form-control" name="user_pwd" placeholder="Mot de passe">
         </div>
         </div>
         <button type="submit" name="submit" class="btn btn-block btn-primary btn-xxl">Se connecter</button>
         </form>
        </div>
      </div>
    </div>
  </div>
</div>

 </section>

</body>
</html>
