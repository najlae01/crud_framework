<?php
    // C'est la classe Etudiant qui représente l'entité 'etudiant' dans notre base de données 'etudiant'
    class Etudiant {
    // Les attributs de la classe Etudiant qui correspondent aux colonnes de la table 'etudiant'
    private $id; 
    private $nom; 
    private $prenom; 
    private $age;
    private $cne;

    // La fonction __construct() responsable pour la création de nouvelles objets de la classe Etudiant
    public function __construct  ($_nom=NULL ,$_prenom=NULL, $_age=NULL, $_cne=NULL){ 
        $this->nom = $_nom;
        $this->prenom = $_prenom;
        $this->age =  $_age; 
        $this->cne = $_cne;
    }

    // HELPER METHODS permettant l'accès aux attributs de la classe Etudiant en dehors de sa définition
    public function getId() {
        return $this->id; 
    }
    public function getNom() {
        return $this->nom; 
    }
    public function getPrenom() {
        return $this->prenom; 
    }
    public function getAge() {
        return $this->age; 
    }
    public function getCne() {
        return $this->cne; 
    }
    public function setId($id) {
        $_id = (int) $id; 
    }
}
?>