<?php

  class Validator{

    // On crée une propriété

    private $data;
    private $errors = [];


    public function __construct($data){

      $this->data = $data;

    }

    // cette fonction prendra en paramètre les champs et retournera les résultats

    private function getField($field){

      // Si ($this->data[$field]) n'existe pas alors on return null

      if(!isset($this->data[$field])){

        return null;

      }

      return $this->data[$field];

    }

    public function alpha($field, $errorMsg){

      // Si c'est différent de preg_match alors on stock ça dans les erreurs
      // Si le champ identifiant est vide alors on execute la variable $erreurs
      // L'identifiant doit être alphanumérique !

      if(!preg_match('/^[a-zA-Z0-9_]+$/', $this->getField($field))){

      // Si on a un problème alors on fait

        $this->errors[$field] = $errorMsg;

      }

    }

    public function uniqUid($field, $db, $table, $errorMsg){

      // On vérifie si il y a un identifiant identique dans la base de donnée, si oui on exécute la variable $erreurs

      $record = $db->query("SELECT user_uid FROM $table WHERE user_uid = ?", [$this->getField('user_uid')])->rowCount();


      if($record === 1){

        $this->errors['user_uid'] = $errorMsg;

      }

    }

    public function email($errorMsg){

      // Si l'email n'est pas valide alors execute l'erreur

      if(!filter_var($this->getField('user_email'), FILTER_VALIDATE_EMAIL)){

        $this->errors['user_email'] = $errorMsg;

      }

    }

    public function uniqEmail($field, $db, $table, $errorMsg){

      // On vérifie si il y a un email identique dans la base de donnée, si oui on exécute la variable $erreurs

      $record = $db->query("SELECT user_email FROM $table WHERE user_email = ?", [$this->getField('user_email')])->rowCount();

      if($record === 1){

        $this->errors['user_email'] = $errorMsg;

      }


    }

    public function pwdConfirmed($field, $errorMsg){

      // Vérifier si le mot de passe est valide sinon on execute l'erreur

      $value = $this->getField('user_pwd');

      if (empty($value) || $value != $value){

        $this->errors['user_pwd'] = $errorMsg;

      }

    }

    public function first($field, $errorMsg){

        // Vérifier si le champ prénom est remplis sinon on execute la variable $errorMsg

        if (empty($this->getField('user_first'))){

          $this->errors['user_first'] = $errorMsg;

        }

    }

    public function last($field, $errorMsg){

        // Vérifier si le champ nom est remplis sinon on execute la variable $errorMsg

        if (empty($this->getField('user_last'))){

          $this->errors['user_last'] = $errorMsg;

        }

    }

    // si le tableau est vide ça faudra true, si il y a des erreurs ça renvoie false

    public function isValid(){

      return empty($this->errors);
    }


    public function getErrors(){

      return $this->errors;
    }


  }
