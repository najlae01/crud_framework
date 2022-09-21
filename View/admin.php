<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/admin-style.css">
    <title>Admin Panel</title>
</head>

<body>
    <div class="side-menu">
        <div class="brand-name">
            <h1>LIBRARIES</h1>
        </div>
        <ul>
            <li><img src="images/dashboard (2).png" alt="">&nbsp;
            <a href="http://localhost/framework_crud/index.php?action=dashboard"> <span>Dashboard</span></a> </li>
            <li><img src="images/reading-book (1).png" alt="">&nbsp;
            <a href="http://localhost/framework_crud/index.php?action=dashboard"><span>Members</span></a> </li>
            <li><img src="images/teacher2.png" alt="">&nbsp;
            <a href="http://localhost/framework_crud/index.php?action=dashboard"><span>Events</span></a> </li>
            <li><img src="images/school.png" alt="">&nbsp;
            <a href="http://localhost/framework_crud/index.php?action=dashboard"><span>Competitions</span></a> </li>
            <li><img src="images/settings.png" alt="">&nbsp;
            <a href="http://localhost/framework_crud/index.php?action=prelogin"><span>Log Out</span></a> </li>
        </ul>
    </div>
    <div class="container">
        <div class="header">
            <div class="nav">
                <div class="search">
                    <input type="text" placeholder="Search..">
                    <button  type="submit"><img src="images/search.png" alt=""></button>
                </div>
                <div class="user">
                    <img src="images/notifications.png" alt="">
                    
                </div>
            </div>
        </div>
        <div class="content">
            <div class="cards">
                <div class="card">
                    <div class="box">
                        <h1>23</h1>
                        <h3>Open Projects</h3>
                    </div>
                    <div class="icon-case">
                        <img src="images/students.png" alt="">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <h1>5</h1>
                        <h3>Events</h3>
                    </div>
                    <div class="icon-case">
                        <img src="images/teacher2.png" alt="">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <h1>5</h1>
                        <h3>Competitions</h3>
                    </div>
                    <div class="icon-case">
                        <img src="images/schools.png" alt="">
                    </div>
                </div>
                
            </div>
            <div class="content-2">
                <div class="recent-payments">
                    <div class="title">
                        <h2>Members</h2>
                    </div>
                    <table>
                        <tr>
                        <th >Prenom</th>
                    <th >Nom</th>
                    <th >Age</th>
                    <th >Cne</th>
                    <th >Operations</th>
                        </tr>
                        <?php foreach ($etudiants as $etudiant): ?>

<tr class="active-row">


  <td><?php echo $etudiant->getNom();?></td>
  <td><?php echo $etudiant->getPrenom();?></td>
  <td><?php echo $etudiant->getAge();?></td>
  <td><?php echo $etudiant->getCne();?></td>

  <td>
     
  <?php $tab=array("nom"=>$etudiant->getNom(),"prenom"=>$etudiant->getPrenom(),
  "age"=>$etudiant->getAge(),"cne"=>$etudiant->getCne()) ?>

  <form action="http://localhost/framework_crud/index.php?action=afficher" method="POST" >
        <button  class="btn" value="<?php echo $etudiant->getCne();?>" name="cne_updated">
                Edit
        </button>
  </form>

  <form action="http://localhost/framework_crud/index.php?action=supprimer" method="POST" >
        <button class="btn" value="<?php echo $etudiant->getCne();?>" name="deletecne">
                Delete
        </button>
  </form>
  </td>


</tr>
<?php endforeach; ?>
                        
                    </table>
                
            </div>
        </div>
    </div>
</body>

</html>