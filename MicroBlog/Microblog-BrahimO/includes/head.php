<?php require_once 'includes/bootstrap.php'; ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>MicroBlog</title>

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">



  </head>
  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <a href="index.php" class="navbar-brand">MicroBlog</a>
        </div>

      </div>

    </nav>



  <div class="container">
    <?php if(Session::getInstance()->hasFlashes()): ?>
      <?php foreach (Session::getInstance()->getFlashes() as $type => $message): ?>
        <div class="alert alert-<?= $type; ?>">
          <?= $message; ?>
        </div>
      <?php endforeach; ?>
    <?php endif; ?>
  </div>
