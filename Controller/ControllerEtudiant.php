<?php
require_once 'Model/Etudiant.php';
require_once 'Model/EtudiantTransaction.php';
require_once 'View/view.php';
require_once 'View/auth.php';

/* C'est la classe ControllerEtudiant qui génère les fichiers du dossier View selon les méthodes de la classe 
 EtudiantTransaction appelées */
class ControllerEtudiant
{
    /* Les attributs de la classe ControllerEtudiant; des instances des deux classes dans la partie Modèle;
    / classe Etudiant et classe EtudiantTransaction */
    private $etudiant;
    private $etudiantTransaction;

    // La méthode __construct() responsable pour la création de nouvelles objets de la classe ControllerEtudiant
    public function __construct()
    {   // Appel au constructeur de la classe Etudiant pour initialiser l'attribut etudiant
        $this->etudiant = new Etudiant();
        // Appel au constructeur de la classe EtudiantTransaction pour initialiser l'attribut etudiantTransaction
        $this->etudiantTransaction = new EtudiantTransaction(); 
        
    }

    /* La Méthode responsable de l'affichage de la liste des étudiants, 
    elle génère le fichier View/display.php contenant la liste des étudiants */
    public function dashboard()
    {
        $etudiants = $this->etudiantTransaction->getList();
        $view = new Auth("admin");
        $view->generate(array('etudiants' => $etudiants));
    }

    /* La Méthode responsable de l'affichage d'un étudiant correspondant à un cne spécifié aux paramètres, 
    elle génère le fichier View/update.php contenant le formulaire correspondant à cet étudiant */
    public function getOne($cne) {
        $etudiant = $this->etudiantTransaction->get($cne); 
        $view = new Auth("update"); 
        $view->generate(array('etudiant' => $etudiant));
    } 

    /* La Méthode responsable de l'ajout d'un étudiant, 
    elle génère le fichier View/add.php qui affiche un formulaire à remplir */
    public function add() {
        $view = new View("add");        
        $view->generate(array());
    } 
    
    /* La Méthode responsable d'enregistrement d'un étudiant ajouté dans la bdd */
    public function save() {    
        $this->etudiant =new Etudiant($_POST['nom'],$_POST['prenom'],$_POST['age'],$_POST['cne']) ;
        $this->etudiantTransaction->add($this->etudiant);
    }
    
    /* La Méthode responsable de la suppression d'un étudiant de la bdd */
    public function delete(){
        $this->etudiantTransaction->delete($_POST['deletecne']);
    }
    
    /* La Méthode responsable de la modification d'un étudiant dans la bdd */
    public function update($cne){
        $this->etudiantTransaction->update($cne);
    }
}

?>