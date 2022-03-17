
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link  rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
     integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Formulaire Etudiant</title>
</head>

<body>
    <div class="container">
        <button class="btn btn-primary my-5">
        <a href="http://localhost/framework_crud/index.php?action=ajouter"  class="text-light">Ajouter</a></button>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Prenom</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Age</th>
                    <th scope="col">Cne</th>
                    <th scope="col">Operations</th>
                </tr>
            </thead>
            <tbody>

            <?php foreach ($etudiants as $etudiant): ?>

<tr>


  <td><?php echo $etudiant->getNom();?></td>
  <td><?php echo $etudiant->getPrenom();?></td>
  <td><?php echo $etudiant->getAge();?></td>
  <td><?php echo $etudiant->getCne();?></td>

  <td>
     
  <?php $tab=array("nom"=>$etudiant->getNom(),"prenom"=>$etudiant->getPrenom(),"age"=>$etudiant->getAge(),"cne"=>$etudiant->getCne()) ?>


  <form action="http://localhost/framework_crud/index.php?action=afficher" method="POST" >
        <button class="btn btn-primary mb-1" value="<?php echo $etudiant->getCne();?>" name="cne_updated">
                Modifier
        </button>
  </form>
  <form action="http://localhost/framework_crud/index.php?action=supprimer" method="POST" >
        <button class="btn btn-danger px-2" value="<?php echo $etudiant->getCne();?>" name="deletecne">
                Supprimer
        </button>
  </form>
  </td>


</tr>
<?php endforeach; ?>

            </tbody>
        </table>
    </div>
</body>

</html>