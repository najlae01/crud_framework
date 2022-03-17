<?php
require_once 'Controller/ControllerEtudiant.php';
require_once 'View/view.php';

// C'est la classe Route qui fait appel aux méthodes de la classe ControllerEtudiant selon l'action spécifiée
class Route
{
    // L'attribut de la classe Route
    private $ctrlEtudiant;

    // La méthode __construct() responsable pour la création de nouvelles objets de la classe Route
    public function __construct()
    {   
        // Appel au constructeur de la classe ControllerEtudiant pour initialiser l'attribut ctrlEtudiant
        $this->ctrlEtudiant = new ControllerEtudiant();
    }

    /* La Méthode responsable de l'éxecution des méthodes de la classe ControllerEtudiant
     selon les actions spécifiées. Cette méthode analyse la requete entrante afin de déterminer
      la méthode de la classe ControllerEtudiant à appeler */
    public function routeRequest()
    {

        try {
            if (isset($_GET['action'])) {
                
                if ($_GET['action'] == 'etudiant') {
                    $this->ctrlEtudiant->welcome();

                } else if ($_GET['action'] == 'afficher') {
                    $this->ctrlEtudiant->getOne($_POST['cne_updated']);

                } else if ($_GET['action'] == 'ajouter') {
                    $this->ctrlEtudiant->add();

                } else if ($_GET['action'] == 'enregistrer') {
                    $this->ctrlEtudiant->save();

                } else if ($_GET['action'] == 'supprimer') {
                    $this->ctrlEtudiant->delete();

                } else if ($_GET['action'] == 'modifier') {
                    $this->ctrlEtudiant->update($_POST['old_cne']);

                } else { 
                    // Si l'action spécifiée ne correspond à aucune de nos actions, ce message s'affichera à l'ecran
                    throw new Exception("Action not valid");
                }
            } else {
                // Si l'action n'est pas spécifiée, le fichier contenant la liste des étudiant sera généré
                $this->ctrlEtudiant->welcome();
            }
        } catch (Exception $e) {

            $this->erreur($e->getMessage());
        }
    }

    /* La Méthode responsable d'affichage des erreurs, elle génére le fichier View/Error.php"*/
    private function erreur($msgErreur)
    {
        $view = new View("Error");
        $view->generate(array('msgErreur' => $msgErreur));
    }
}
?>