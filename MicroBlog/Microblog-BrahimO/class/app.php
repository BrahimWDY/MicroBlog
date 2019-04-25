<?php

  class App{

    static $db = null;

    static function getDatabase(){

      if(!self::$db){

        self::$db = new Database('root', 'root', 'microblog');

      }

      return self::$db;
    }

    static function redirect($page){

?>
      <meta http-equiv="refresh" content="1; URL=<?= $page; ?>"/>;
<?php
   exit();
    }
  }

?>
