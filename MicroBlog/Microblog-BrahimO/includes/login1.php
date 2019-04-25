<?php

// On vérifie que les champs sont rempli

if (!empty($_POST) && !empty($_POST['user_uid']) && !empty($_POST['user_pwd'])) {

  // On se connecte à la base de donnée

  require 'includes/dbexe.php';

  // On prepare la requete

  $req = $pdo->prepare('SELECT * FROM users WHERE (user_uid = :user_uid OR user_email = :user_uid ) AND user_date IS NOT NULL');

  // On l'execute

  $req->execute(array(':user_uid' => $_POST['user_uid']));
  $user = $req->fetch();

  if(password_verify($_POST['user_pwd'], $user->user_pwd)){

    $_SESSION['auth'] = $user->user_first;
    $_SESSION['iduser'] = $user->user_uid;
    $_SESSION['lastname'] = $user->user_last;
    $_SESSION['date'] = $user->user_date;
    $_SESSION['email'] = $user->user_email;


    $_SESSION['flash']['success'] = 'Vous êtes connecté';

    //Si les champs rempli sont bon on redirige l'utilisateur vers la page timeline

?>
<meta http-equiv="refresh" content="1;url=timeline.php"/>

<?php

  } else {


    $_SESSION['flash']['danger'] = 'Identifiant ou Mot de passe incorrect !';

  }
}

?>
