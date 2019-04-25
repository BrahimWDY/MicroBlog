<?php

// Ce fichier va se charger de tout se qui est chargement de nos fichiers

spl_autoload_register('app_autoload');

function app_autoload($class){

  require "class/$class.php";
}


 ?>
