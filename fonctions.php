<?php

Global $mysqli;
$mysqli = new mysqli("localhost", "root", "", "gameover");

function ConnexionBase($mysqli){
    if ($mysqli->connect_errno)
        return 0;
    else
        return 1;

}

function RecupBlog($mysqli){

    $sql = 'SELECT Titre, Date, Redacteur, Texte FROM articles;';
    $res = $mysqli->query($sql);

    while ($row = $res->fetch_assoc()) {
        printf ("%s (%s) %s %s\n", $row["Titre"], $row["Date"], $row["Redacteur"], $row["Texte"]);
    }

}

function Get_mysqli($mysqli){
    return $mysqli;
}

?>