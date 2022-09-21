<?php
    // C'est la classe User qui représente l'entité 'users' dans notre base de données 'etudiant'
    class User {
    // Les attributs de la classe User qui correspondent aux colonnes de la table 'User'
    private $username; 
    private $email; 
    private $passwd;

    // La fonction __construct() responsable pour la création de nouvelles objets de la classe User
    public function __construct  ($_username=NULL ,$_email=NULL, $_password=NULL){ 
        $this->username = $_username;
        $this->email = $_email;
        $this->passwd =  $_password; 
    }

    // HELPER METHODS permettant l'accès aux attributs de la classe User en dehors de sa définition
    public function getUsername() {
        return $this->username; 
    }
    public function getEmail() {
        return $this->email; 
        ; 
    }
    public function getPassword() {
        return $this->passwd; 
    }
}
?>