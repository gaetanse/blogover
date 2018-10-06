<?php

Global $mysqli;
$mysqli = new mysqli("localhost", "root", "", "gameover");

include "../../fonctions.php";

$mail = $_POST["login"];
$pass = $_POST["lcode"];

echo $mail." / ".$pass;

TestUser($mysqli);

return;
 ?>
