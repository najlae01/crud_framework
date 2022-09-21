<!doctype html>
<html lang="fr">
<head>
<meta charset="UTF-8" />
<link rel="stylesheet" href="./css/template.css" /> 
<title><?= $title ?></title>
    </head>
    <body>
        <div id="global">
<!-- header section starts  -->

<header>

    <div id="menu" class="fas fa-bars"></div>

    <a href="http://localhost/framework_crud/index.php?action=home" class="logo"><i class="fas fa-user-graduate"></i>LIBRARIES</a>

    <nav class="navbar">
        <ul>
            <li><a class="active" href="http://localhost/framework_crud/index.php?action=home">home</a></li>
            <li><a href="http://localhost/framework_crud/index.php?action=home">about</a></li>
            <li><a href="http://localhost/framework_crud/index.php?action=home">Interest</a></li>
            <li><a href="http://localhost/framework_crud/index.php?action=home">leaders</a></li>
            <li><a href="http://localhost/framework_crud/index.php?action=home">contact</a></li>
            <li><a href="http://localhost/framework_crud/index.php?action=prelogin">log out</a></li>
        </ul>
    </nav>

    <div id="login" class="fas fa-user-circle"></div>

</header>

<!-- header section ends -->

<!-- login form  -->



<!-- contact section ends -->
        <div id="content">
            <?= $content ?>
        </div>

        <!-- #contenu -->

<!-- footer section starts  -->

<div class="footer">

    <div class="box-container">

        <div class="box">
            <h3>Who Are We</h3>
            <p>Lorem ipsum dolor sit amet</br> consectetur adipisicing elit.</br> Dolorem, beatae.
                 Modi quos </br>excepturi id quibusdam? </br> Molestiae quis nihil non debitis!</p>
        </div>

        <div class="box">
            <h3>quick links</h3>
            <a href="http://localhost/framework_crud/index.php?action=home">home</a>
            <a href="http://localhost/framework_crud/index.php?action=home">about</a>
            <a href="http://localhost/framework_crud/index.php?action=home">Interest</a>
            <a href="http://localhost/framework_crud/index.php?action=home">leaders</a>
            <a href="http://localhost/framework_crud/index.php?action=home">contact</a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <p> <i class="fas fa-map-marker-alt"></i> 86 Rue Pasteur, 69007 Lyon, France. </p>
            <p> <i class="fas fa-envelope"></i> libraries.lumiere@gmail.com </p>
            <p> <i class="fas fa-phone"></i> +33 4 76 66 73 00 </p>
        </div>

    </div>

    <h1 class="credit"> <a href="http://localhost/framework_crud/index.php?action=home">&copy; LIBRARIES</a> </h1>

</div>
<!-- jquery cdn link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

<!-- footer section ends -->
    </div> <!-- #global -->
    </body>
</html>