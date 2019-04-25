<?php

class Database{

  // on crée une propriété

  private $pdo;

  public function __construct($login, $password, $database_name, $host = 'localhost'){

    // Connexion à la base de donnée

    $this->pdo = new PDO("mysql:dbname=$database_name;host=$host", $login, $password);

    // Afficher l'erreur

    $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
  }

  //On crée une méthode qui va permettre de faire une requete a la base de donnée

  public function query($query, $parameters = false){

    if ($parameters) {

      $req = $this->pdo->prepare($query);
      $req->execute($parameters);

    }else {

      $req = $this->pdo->query($query);

    }

    return $req;
  }


}
