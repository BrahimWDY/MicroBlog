<?php

  class Session{


    // Sauvegarder l'instance de la session qui est deja charger

    static $instance;

    static function getInstance(){

      if(!self::$instance){

        self::$instance =  new Session();

      }

      return self::$instance;

    }

    public function setFlash($key, $message){

      $_SESSION['flash'][$key] = $message;
    }

    public function hasFlashes(){

      return isset($_SESSION['flash']);
    }

    public function getFlashes(){

      $flash = $_SESSION['flash'];
      unset($_SESSION['flash']);
      return $flash;
    }

  }


?>
