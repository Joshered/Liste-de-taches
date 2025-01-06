<?php
include 'bdd.php';

if(isset($_GET['id_tach'])){
    $id_tach = $_GET['id_tach'];

    $soum = $pdo->prepare("UPDATE taches SET tach_accomplies=1 WHERE id_tach = :id_tach");
    $soum -> execute(['id_tach'=> $id_tach]);

    header('location: index.php');
}
?>