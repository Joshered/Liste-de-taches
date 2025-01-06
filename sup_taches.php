<?php
include 'bdd.php';

if(isset($_GET['id_tach'])){
    $id = $_GET['id_tach'];

    $soum = $pdo->prepare("DELETE  FROM taches WHERE id_tach = :id");
    $soum -> execute(['id_tach'=>$id]);

    header('location: index.php')
}
?>