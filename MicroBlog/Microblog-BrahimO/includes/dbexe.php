<?php


// Connexion à la base de donnée

$pdo = new PDO('mysql:dbname=microblog;host=localhost;port=8889', "root", "root");

// Afficher l'erreur

$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);



?>
