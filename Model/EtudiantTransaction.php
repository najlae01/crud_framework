<?php
require_once "Etudiant.php";
// C'est la classe EtudiantTransaction qui rassemble toutes les méthodes nécessaires pour gérer un formulaire des étudiants.
class EtudiantTransaction {
// Les attributs de la classe EtudiantTransaction
private $_db; // Instance de la PDO

// La méthode __construct() responsable pour la création de nouvelles objets de la classe EtudiantTransaction
public function __construct() {
    try{
        $this->_db = new PDO('mysql:host=localhost;dbname=etudiant;charset=utf8', 'root', ''); 

    }catch(Exception $e) {
        die('Erreur : '.$e->getMessage()); 
    } 
}

// Méthode responsable de l'ajout d'un étudiant dans la bdd
public function add($etudiant) {
    $q = $this->_db->prepare("INSERT INTO etudiant (nom, prenom, age, cne) VALUES(:nom, :prenom, :age, :cne)");
    $q->execute(array( 'nom' => $etudiant->getNom(), 'prenom' => $etudiant->getPrenom(),
     'age' => $etudiant->getAge(), 'cne' => $etudiant->getCne()));
    
    header('Location: http://localhost/framework_crud/index.php?action=home');
}

// Méthode responsable de la suppression d'un étudiant de la bdd  en spécifiant son cne dans les paramètres de la méthode.
public function delete($cne) {

    $q = $this->_db->prepare('DELETE FROM etudiant WHERE cne = :deletecne'); 
    $q->execute(array('deletecne'=>$cne));

    header('Location: http://localhost/framework_crud/index.php?action=dashboard');
}

// Méthode qui retourne un étudiant de la bdd en spécifiant son cne dans les paramètres de la méthode.
public function get($cne){
    $q=$this->_db->prepare('SELECT * FROM etudiant WHERE cne=:cne');
    $q->execute(array('cne'=>$cne));
    $etudiant=$q->fetch(PDO::FETCH_ASSOC);
    return $etudiant;
}

// Méthode responsable de la modification d'un étudiant dans la bdd en spécifiant son cne dans les paramètres de la méthode.
public function update($cne){
    $q=$this->_db->prepare('UPDATE etudiant SET nom=:nom,prenom=:prenom,age=:age,cne=:cne WHERE cne=:old_cne');
    $q->execute(array( 'nom' =>$_POST['nom'], 'prenom' => $_POST['prenom'],
     'age' => $_POST['age'], 'cne'=>$_POST['cne'], 'old_cne'=>$cne ));

    header('Location: http://localhost/framework_crud/index.php?action=dashboard');
}

// Méthode qui retourne une liste de tous les étudiants dans la bdd.
public function getList() {
    $etudiant_list = [];
    $q = $this->_db->query('SELECT * FROM etudiant ORDER BY nom');
    while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
       // die($donnees['nom']);
         $etud = new Etudiant( $donnees['nom'], $donnees['prenom'], $donnees['age'], $donnees['cne']); 
         array_push($etudiant_list , $etud); 
    }
return $etudiant_list; 
}
}
?>