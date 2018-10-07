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

    $bdd = new PDO('mysql:host=localhost;dbname=gameover', 'root', '');

    //Je choisis le champ login
    $reponse_login = $bdd->query('SELECT email FROM redacteur'); // Je choisis de la base de donné login le champ login
    $reponse_password = $bdd->query('SELECT passe FROM redacteur'); // Je choisis de la base de donné login le champ password

//Je vérifie tout mes champs logins
    while ($donnees = $reponse_login->fetch() AND $donees2 = $reponse_password->fetch()) // EDIT : Il n'y a plus d'erreur mais c'est à la ligne 20 maintenant
    {
        if ($_POST['login'] == $donnees['email'] AND $_POST['lcode'] == $donees2['passe']) // ERREUR ICI
        {
            session_start();
            $_SESSION['count']=1;
        }
    }
    $reponse_login->closeCursor(); // Termine le traitement de la requête
    $reponse_password->closeCursor(); // Termine le traitement de la requête

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