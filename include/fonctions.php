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

function TestUser($mysqli){

    $test = 123456;

    $reponse = $mysqli->query('SELECT email, passe FROM membres WHERE passe='.$test);

    //Je vérifie tout mes champs logins
while ($donnees = $reponse_login->fetch() AND $donees2 = $reponse_password->fetch()) // ICI INTERVIENT L'ERREUR!!!!!!!
{
    if ($_POST['login'] == $donnees['login'] AND $_POST['password'] == $donnees['password']) // Si mon login et password du formulaire == login et password de la base de données alors :
    {
        // La suite de mon code qui y sera après que je n'ai plus d'erreur et pour l'instant c'est :
        echo "Ouais!!!!!! J'ai plus d'érreur!!!! ( C'EST BEAU LES REVES !)" ;
    }
}

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