
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
        <form method="post"action="http://localhost/framework_crud/index.php?action=modifier">

        <div class="mb-3">
        <input type="hidden" class="form-control"
        name="old_cne" value="<?= $etudiant['cne'] ?>">
        </div>
            <div class="mb-3">
                <label class="form-label">Prénom</label>
                <input type="text" class="form-control" 
                placeholder="Entrer le prénom" 
                name="prenom" id="prenom"
                value="<?= $etudiant['prenom'] ?>"
                autocomplete="off">
            </div>
            <div class="mb-3">
                <label class="form-label">Nom</label>
                <input type="text" class="form-control" 
                placeholder="Entrer le nom" 
                name="nom" id="nom" value="<?= $etudiant['nom'] ?>" 
                autocomplete="off">
            </div>
            <div class="mb-3">
                <label class="form-label">Age</label>
                <input type="number" class="form-control" 
                placeholder="Entrer l'age" 
                name="age" id="age"
                value="<?= $etudiant['age'] ?>"
                autocomplete="off">
            </div>
            <div class="mb-3">
                <label class="form-label">Cne</label>
                <input type="text" class="form-control" 
                placeholder="Entrer le cne" 
                name="cne" id="cne"
                value="<?= $etudiant['cne'] ?>"
                autocomplete="off">
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Enregistrer</button>
        </form>

</body>

</html>