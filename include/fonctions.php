<?php

Global $mysqli;
$mysqli = new mysqli("localhost", "root", "", "gameover");

function ConnexionBase($mysqli){
    if ($mysqli->connect_errno)
        return 0;
    else
        return 1;

}

function AjouterPost($mysqli,$titre,$nom){

    $sql = $mysqli->prepare("INSERT INTO article VALUES(NULL,?,NOW(),?)");
    $sql->bind_param('ss', $titre,$nom);
    $sql->execute();

    header("Refresh:0");

}

function Affichdansphp($texte){
    ?>
    <?php echo $texte; ?>
    <?php
}

function RecupBlog($mysqli){

    $sql = 'SELECT id, titre, ladate, redacteur FROM article';
    $res = $mysqli->query($sql);

    return $res;

}

function Get_mysqli($mysqli){
    return $mysqli;
}

?>