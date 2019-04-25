<?php

// Connexion à la base de donnée

$pdo = new PDO('mysql:dbname=microblog;host=localhost;port=8889', "root", "root");

// Afficher l'erreur

$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);




// Crypté le mot de passe

$password = password_hash($_POST['user_pwd'], PASSWORD_DEFAULT);

// On exécute

$db->query("INSERT INTO users SET user_first = ?, user_last = ?, user_uid = ?, user_email = ?, user_pwd = ?, user_date = ?",
  [$_POST['user_first'],
  $_POST['user_last'],
  $_POST['user_uid'],
  $_POST['user_email'],
  $password, date("Y-m-d")

]);

?>
