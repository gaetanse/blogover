<!DOCTYPE HTML>
<!-- Website Template by freewebsitetemplates.com -->
<html>
<head>
    <meta charset="UTF-8">
    <title>About - Business Experts Website Template</title>

    <link rel="stylesheet" type="text/css" href="semantic/semantic.min.css">
    <link rel="stylesheet" href="css/style.css" type="text/css">

    <link rel="icon" type="../image/png" sizes="16x16" href="include/identification/images/favicon.png">

    <!-- <link rel="stylesheet" href="./css/bootstrap.css"> -->
    <link href="include/identification/css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="include/identification/css/helper.css" rel="stylesheet">
    <link href="include/identification/css/style.css" rel="stylesheet">
    <link href="include/identification/css/main.css" rel="stylesheet">

    <script src="include/identification/js/main.js"></script>
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script src="semantic/semantic.min.js"></script>

</head>
<body>
<div id="header">
    <div>
        <a href="index.html" class="logo">
            <h2>blog</h2>
    </div>
    <ul>
        <li>
            <a href="index.html">home</a>
        </li>
        <li>
            <a href="services.html">services</a>
        </li>
        <li>
            <a href="process.html">process</a>
        </li>
        <li>
            <a href="blog.php">blog</a>
        </li>
        <li class="selected">
            <a href="about.html">about</a>
        </li>
        <li>
            <a href="contact.html">contact</a>
        </li>
    </ul>
</div>
<div id="body">

    <br>

        <?php

        require "include/fonctions.php";

        ?>

        <?php

        session_start();
        if (!isset($_SESSION['count'])) {

            include("include/identification/index.php");

        }else{

            ?>

            <center>

                <form action="#" method="post">
                    <div class="inverted form segment">
                        <div class="small ui input">
                            <input placeholder="Titre" type="text" name="titre">
                        </div>
                        <div class="small ui input">
                            <input placeholder="numéro" type="text" name="nom">
                        </div>
                        <input type="submit" value="Ajouter un post" class="red ui button">
                </form>

            </center>

            <hr>

            <?php


        if(!empty($_POST['titre'])&&!empty($_POST['nom'])) {

            $_titre = $_POST['titre'];
            $_nom = $_POST['nom'];

            AjouterPost($mysqli, $_titre, $_nom);

        }

        if(ConnexionBase($mysqli)==1){
            echo "<center>Connexion réussi</center><hr>" ;
            $res = RecupBlog(Get_mysqli($mysqli));

            while ($row = $res->fetch_assoc()) {
                Affichdansphp("<div class='decaler segment ui'><div class='label ui'>".$row["id"]." / ".$row["titre"]." / ".$row["ladate"]."</div><br><br>".$row["redacteur"]."<br></div>");
            }

            $mysqli->close();
        }
        else{
            echo "Echec lors de la connexion à MySQL : (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
        }

        }

        ?>



<div id="footer">
    <ul>
        <li id="twitter">
            <a href="http://freewebsitetemplates.com/go/twitter/">twitter</a>
        </li>
        <li id="facebook">
            <a href="http://freewebsitetemplates.com/go/facebook/">facebook</a>
        </li>
        <li id="googleplus">
            <a href="http://freewebsitetemplates.com/go/googleplus/">googleplus</a>
        </li>
    </ul>
    <p>
        &copy; Copyright 2012. All rights reserved.
    </p>
</div>
</body>
</html>