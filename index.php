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
        <input class='btn' type="submit" value='ajouter'>
    </form>
    <ol type='1'>
        <?php foreach ($taches as $tache): ?>
            <li>
                <?php if($tache['tach_accomplies']):?>
                    <tricke><?php echo htmlspecialchars($tache['tache']);?></tricke>
                    <?php else: ?>
                        <?php echo htmlspecialchars($tache['tache']);?>
                        <?php echo htmlspecialchars($tache['id_tach']);?>
                        <a class='aa' href="taches_termin.php?id_tach=<?php echo $tache['id_tach'];?>">cocher comme termner</a>
                        <?php endif;?>
                        <a class='aaa' href="sup_taches.php?id_tach=<?php echo $tache['id_tach'];?>">supprimer</a>
            </li>
        <?php endforeach; ?>
    </ol>
</body>
</html>