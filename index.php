<?php
include 'bdd.php';
$soum=$pdo->query("SELECT * FROM taches");
$taches = $soum -> fetchAll();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Gestion de taches</title>
    <link rel="stylesheet" href="Joshered/css/bootstrap.min.css">
</head>
<body>
    <header class="bg-success text-white">
        <h1 class='h2 ms-2 pb-2' >Liste des taches</h1>
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
                        <a class='aa' href="taches_termin.php?id_tach=<?php echo $tache['id_tach'];?>">cocher comme termner</a>
                        <?php endif;?>
                        <a class='aaa' href="sup_taches.php?id_tach=<?php echo $tache['id_tach'];?>">supprimer</a>
                        <label for="" class='aab'> <?php echo htmlspecialchars($tache['date_d']);?> </label>
                        
            </li>
        <?php endforeach; ?>
    </ol>
    <script src="script.js"></script>
</body>
</html>