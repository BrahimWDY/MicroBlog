<?php

 class Auth{

   // initialisé l'authentification

   private $db;

   public function __construct($db){

     $this->db = $db;
   }


   public function register($first, $last, $uid, $password, $email){

     // Crypté le mot de passe

     $password = password_hash($password, PASSWORD_DEFAULT);

     // On exécute

     $this->db->query("INSERT INTO users SET user_first = ?, user_last = ?, user_uid = ?, user_email = ?, user_pwd = ?, user_date = ?",
       [$first,
       $last,
       $uid,
       $email,
       $password,
       date("Y-m-d")

     ]);

   }
 }

?>
