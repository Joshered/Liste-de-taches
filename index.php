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
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>List des taches</h1>
    </header>
    
    <form action="ajout_tache.php" method="POST">
        <input type="text" name='tache' placeholder="nouvelle teche" required>
        <input type="submit" value='ajouter'>
    </form>
    <ul>
        <?php foreach ($taches as $tache): ?>
            <li>
                <?php if($tache['tach_accomplies']):?>
                    <tricke><?php echo htmlspecialchars($tache['tache']);?></tricke>
                    <?php else: ?>
                        <?php echo htmlspecialchars($tache['tache']);?>
                        <a href="taches_termin.php?id_tach=<?php echo $tache['id_tach'];?>">[terminer]</a>
                        <?php endif;?>
                        <a href="sup_taches.php?id_tach=<?php echo $tache['id_tach'];?>">[supprimer]</a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>