<!DOCTYPE HTML>
<!-- Website Template by freewebsitetemplates.com -->
<html>
<head>
    <meta charset="UTF-8">
    <title>Blog - Business Experts Website Template</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
<div id="header">
    <div>
        <a href="index.html" class="logo">
            <h1>Business Experts</h1>
        </a> <span>talk to the experts<b>9-876-543-210</b></span>
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
        <li class="selected">
            <a href="blog.php">blog</a>
        </li>
        <li>
            <a href="about.html">about</a>
        </li>
        <li>
            <a href="contact.html">contact</a>
        </li>
    </ul>
</div>
<div id="body">
    <div id="blog">


        <?php

        require "fonctions.php" ;

        if(ConnexionBase($mysqli)==1){
            echo "<center>Connexion réussi</center><hr>" ;
            RecupBlog(Get_mysqli($mysqli));
            $mysqli->close();
        }
        else{
            echo "Echec lors de la connexion à MySQL : (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
        }

        ?>

    </div>
    <div id="sidebar">
        <div>
            <h3>recent post</h3>
            <ul>
                <li>
                    <a href="#">This is just a place holder</a>
                </li>
                <li>
                    <a href="#">This is just a place holder</a>
                </li>
                <li>
                    <a href="#">This is just a place holder</a>
                </li>
                <li>
                    <a href="#">This is just a place holder</a>
                </li>
                <li>
                    <a href="#">This is just a place holder</a>
                </li>
            </ul>
        </div>
        <div>
            <h3>archives</h3>
            <ul>
                <li>
                    <a href="#">This is just a place holder</a>
                </li>
                <li>
                    <a href="#">This is just a place holder</a>
                </li>
                <li>
                    <a href="#">This is just a place holder</a>
                </li>
                <li>
                    <a href="#">This is just a place holder</a>
                </li>
                <li>
                    <a href="#">This is just a place holder</a>
                </li>
            </ul>
        </div>
    </div>
</div>
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