<?php

// Connexion à la base de donnée

$pdo = new PDO('mysql:dbname=microblog;host=localhost;port=8889', "root", "root");




    if (isset($_POST['commentSubmit'])) {

      // Si il y a un message et que le champs message n'est pas vide alors

      if (isset($_POST['message']) && !empty($_POST['message'])) {

        $message = htmlspecialchars($_POST['message']);

        // On insert le message dans la base de donnée

        $insert = $pdo->prepare('INSERT INTO posts (uid, udate, message) VALUES (?, ?, ?)');

        $insert->execute([$_SESSION['iduser'], date('Y/m/d H:i:s'), $_POST['message']]);





      } else {

        // Si les champs ne sont pas complétées alors on exécute un message d'erreur

        $errorsl = "Tous les champs doivent être complétés.";
      }
    }

      // On récupère les posts de la base de donnée

    $posts = $pdo->prepare('SELECT `cid`, `uid`, `udate`, `message`, `user_uid` FROM posts, users WHERE user_uid = ? ORDER BY udate desc');
    $posts->execute(array($_SESSION['iduser']));
    $posts = $posts->fetchAll();
    
    // Supprimer le poste depuis la base de donnée

    if (isset($_GET['delete'])) {
      $del = $pdo->prepare('DELETE FROM posts WHERE cid = ?');
      $del->execute(array($_GET['cid']));
    ?>
    <meta http-equiv="refresh" content="1;url=timeline.php"/>

    <?php
    }else {

    }
?>
