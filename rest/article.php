<?php
$json_source = file_get_contents('article.json');
$tr = json_decode($json_source, true);

$id = $_GET["id"]-1;

if($id<0)
    $id=0;

if(count($tr['internaute'])>$id){
    echo "id : ".$tr['internaute'][$id]['id']."<br>";
    echo "email : ".$tr['internaute'][$id]['email']."<br>";
    echo "nom : ".$tr['internaute'][$id]['nom']."<br>";
    echo "prenom : ".$tr['internaute'][$id]['prenom']."<br>";
    echo "region : ".$tr['internaute'][$id]['region'];
}
else{
    echo "L'id est invalide !!!";
}

?>