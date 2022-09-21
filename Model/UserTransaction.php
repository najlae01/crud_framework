<?php
require_once "User.php";
// C'est la classe UserTransaction qui rassemble toutes les méthodes nécessaires pour gérer un formulaire des users.
class UserTransaction {
// Les attributs de la classe UserTransaction
private $_db; // Instance de la PDO

// La méthode __construct() responsable pour la création de nouvelles objets de la classe UserTransaction
public function __construct() {
    try{
        $this->_db = new PDO('mysql:host=localhost;dbname=etudiant;charset=utf8', 'root', ''); 

    }catch(Exception $e) {
        die('Erreur : '.$e->getMessage()); 
    } 
}

// Méthode responsable de l'ajout d'un user dans la bdd
public function add($user) {
    $q = $this->_db->prepare("INSERT INTO users (username, email, passwrd) VALUES(:username,  :email, :passwrd)");
    $q->execute(array( 'username' => $user->getUsername(),
     'email' => $user->getEmail(), 'passwrd' => $user->getPassword()));
    
    header('Location: http://localhost/framework_crud/index.php?action=home');
}


// Méthode qui retourne un user de la bdd en spécifiant son passwrd dans les paramètres de la méthode.
public function get($passwrd){
    $q=$this->_db->prepare('SELECT * FROM users WHERE passwrd=:passwrd');
    $q->execute(array('passwrd'=>$passwrd));
    $User=$q->fetch(PDO::FETCH_ASSOC);
    return $User;
}


}
?>