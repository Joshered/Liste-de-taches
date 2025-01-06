<?php
$host = 'localhost';
$bdd = 'bd_tacheslist';
$user = 'root';
$pass = '';

try{
    $pdo = new PDO("mysql:host=$host;dbname=$bdd",$user,$pass);
    $pdo->setATtribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo 'echec de la connaixion' . $e->getMessage();
}
?>