<!doctype html>
<html lang="fr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="stylesheet" href="./css/template.css">
    <title>LIBRARIES</title>
</head>

<body>

    <section class="contact" id="contact">
        <div class="row">
            <form method="post" action="http://localhost/framework_crud/index.php?action=enregistrer">

                <input type="text" placeholder="Entrer le prénom" name="nom" id="prenom" autocomplete="off" class="box">



                <input type="text" placeholder="Entrer le nom" name="prenom" id="nom" autocomplete="off" class="box">



                <input type="number" placeholder="Entrer l'age" name="age" id="age" autocomplete="off" class="box">



                <input type="text" placeholder="Entrer le cne" name="cne" id="cne" autocomplete="off" class="box">

                <input type="submit" class="btn" value="Submit" name="submit">
            </form>

            <div class="image">
                <img src="images/contact-img.png" alt="">
            </div>

        </div>
    </section>
</body>

</html>