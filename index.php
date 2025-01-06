<?php
include 'bdd.php';
$soum=$pdo->query("SELECT * FROM taches");
$taches = $soum -> fetchAll();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Gestion de tachest</title>
</head>
<body>
    <h1>lust des taches</h1>
    <form action="ajout_tache.php" method="POST"></form>
</body>
</html>