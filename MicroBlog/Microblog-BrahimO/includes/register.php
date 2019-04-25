<?php

  require_once 'includes/bootstrap.php';



  if(!empty($_POST)){

    // on stock les erreurs dans un tableau

    $errors = array();

    // On appelle la base de donnée

    $db = App::getDatabase();

    // Validation des données

    $validator = new Validator($_POST);
    $validator->first('user_first', "Vous devez remplir tout les champs.");
    $validator->last('user_last', "Vous devez remplir tout les champs.");
    $validator->alpha('user_uid', "Votre identifiant n'est pas valide.");
    $validator->uniqUid('user_uid', $db, 'users', "Cet identifiant est déjà pris.");
    $validator->email("Votre email n'est pas valide.");
    $validator->uniqEmail('user_email', $db, 'users', "Cet email est déjà utilisé pour un autre compte.");
    $validator->pwdConfirmed('user_pwd', "Vous devez rentrer un mot de passe valide.");


    if ($validator->isValid()) {


      $auth = new Auth($db);
      $auth->register($_POST['user_first'],$_POST['user_last'],$_POST['user_uid'],$_POST['user_pwd'],$_POST['user_email']);


?>
     <!-- si il n'y a aucune erreur alors on dirige l'utilisateur vers la page connexion -->

      <meta http-equiv="refresh" content="1; URL=login.php">;

<?php
    }else {

      // Si il y a des erreurs alors on excute la varible $errors

      $errors = $validator->getErrors();

    }

  }

?>
