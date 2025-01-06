<?php
include 'bdd.php';

if(isset($_GET['id_tach'])){
    $id = $_GET['id_tach'];

    $soum = $pdo->prepare("UPDATE  FROM taches SET tach_accomplies=1 WHERE id_tach = :id");
    $soum -> execute(['id_tach'=>$id]);

    header('location: index.php');
}
?>