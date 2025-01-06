<?php
include 'bdd.php';

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $tache = $_POST['tache'];

    $soum = $pdo->prepare("INSERT  INTO taches(tache) VALUES (:tache)");
    $soum -> execute(['tache'=>$tache]);

    header('location: index.php');
}
?>