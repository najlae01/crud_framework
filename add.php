
<!doctype html>
<html lang="fr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link  rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
     integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Formulaire Etudiant</title>
</head>
<body>
    <div class="container my-5">
        <form method="post" action="http://localhost/framework_crud/index.php?action=enregistrer">
            <div class="mb-3">
                <label class="form-label">Prénom</label>
                <input type="text" class="form-control" 
                placeholder="Entrer le prénom" 
                name="nom" id="prenom" autocomplete="off">
            </div>
            <div class="mb-3">
                <label class="form-label">Nom</label>
                <input type="text" class="form-control" 
                placeholder="Entrer le nom" 
                name="prenom" id="nom" autocomplete="off">
            </div>
            <div class="mb-3">
                <label class="form-label">Age</label>
                <input type="number" class="form-control" 
                placeholder="Entrer l'age" 
                name="age" id="age" autocomplete="off">
            </div>
            <div class="mb-3">
                <label class="form-label">Cne</label>
                <input type="text" class="form-control" 
                placeholder="Entrer le cne" 
                name="cne" id="cne" autocomplete="off">
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Ajouter</button>
        </form>

</body>

</html>