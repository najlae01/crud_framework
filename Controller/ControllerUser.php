<?php
require_once 'Model/User.php';
require_once 'Model/UserTransaction.php';
require_once 'View/auth.php';
require_once 'View/view.php';

/* C'est la classe ControllerUser qui génère les fichiers du dossier View selon les méthodes de la classe 
 UserTransaction appelées */
class ControllerUser
{
    /* Les attributs de la classe ControllerUser; des instances des deux classes dans la partie Modèle;
    / classe User et classe UserTransaction */
    private $user;
    private $UserTransaction;

    // La méthode __construct() responsable pour la création de nouvelles objets de la classe ControllerUser
    public function __construct()
    {   // Appel au constructeur de la classe User pour initialiser l'attribut User
        $this->user = new User();
        // Appel au constructeur de la classe UserTransaction pour initialiser l'attribut UserTransaction
        $this->userTransaction = new UserTransaction(); 
        
    }



    public function home()
    {
        $view = new View("home");        
        $view->generate(array());
    }

    /* La Méthode responsable de l'affichage de la liste des étudiants, 
    elle génère le fichier View/display.php contenant la liste des étudiants */
    public function prelogin()
    {
        $view = new Auth("login");        
        $view->generate(array());
    }

    /* La Méthode responsable de l'affichage d'un étudiant correspondant à un cne spécifié aux paramètres, 
    elle génère le fichier View/update.php contenant le formulaire correspondant à cet étudiant */
    public function login() {
     
        $conn = new PDO('mysql:host=localhost;dbname=etudiant;charset=utf8', 'root', '');
        $email = $_POST['email'];
        $passwd = $_POST['password'];
        $q=$conn->query("SELECT * FROM users WHERE email='$email' AND passwd='$passwd'");
        $result = $q->fetchAll();
        if (count($result) > 0) {
            $row = $result[0];
            $_SESSION['username'] = $row['username'];
            if($row['id'] == 1 ){
                header('Location: http://localhost/framework_crud/index.php?action=dashboard');
            }else{
                header('Location: http://localhost/framework_crud/index.php?action=home');
            }           
        } else {
            echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
            header('Location: http://localhost/framework_crud/index.php?action=prelogin');
        }
    } 

    /* La Méthode responsable de l'ajout d'un étudiant, 
    elle génère le fichier View/add.php qui affiche un formulaire à remplir */
    public function preRegister() {
        $view = new Auth("register");        
        $view->generate(array());
    } 
    
    /* La Méthode responsable d'enregistrement d'un étudiant ajouté dans la bdd */
    public function register() {  
        $conn = new PDO('mysql:host=localhost;dbname=etudiant;charset=utf8', 'root', ''); 
        $username = $_POST['username'];
        $email = $_POST['email'];
        $passwd = md5($_POST['password']);
        $cpasswd = md5($_POST['cpassword']);
    
        if ($passwd == $cpasswd) {
            $q=$conn->query("SELECT * FROM users WHERE email='$email'");
            $result = $q->fetchAll();
            if (!count($result) > 0) {
                $result=$conn->query("INSERT INTO users (username, email, passwd)
                VALUES ('$username', '$email', '$passwd')");
                if ($result) {
                    echo "<script>alert('Wow! User Registration Completed.')</script>";
                    $username = "";
                    $email = "";
                    $_POST['passwd'] = "";
                    $_POST['cpasswd'] = "";
                    header('Location: http://localhost/framework_crud/index.php?action=home');
                } else {
                    echo "<script>alert('Woops! Something Wrong Went.')</script>";
                    header('Location: http://localhost/framework_crud/index.php?action=preregister');
                }
            } else {
                echo "<script>alert('Woops! Email Already Exists.')</script>";
                header('Location: http://localhost/framework_crud/index.php?action=preregister');
            }
            
        } else {
            echo "<script>alert('Password Not Matched.')</script>";
            header('Location: http://localhost/framework_crud/index.php?action=home');
        }  
    }
    
    /* La Méthode responsable de la suppression d'un étudiant de la bdd */
    public function logout(){
        session_destroy();
        header('Location: http://localhost/framework_crud/index.php?action=prelogin');
    }

}

?>