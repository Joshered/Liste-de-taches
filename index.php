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
    <section class='container-fluid- container-lg'>
        <!-- Espace Ajouter Tache -->
        <form action="ajout_tache.php" method="POST" class='row'>
            <div class='col-lg-9'>
                <input class="form-control md-2 form-control" type="text" name='tache' placeholder="nouvelle teche" required>
            </div>
            <div class='col-lg-3 d-flex flex-row-reverse flex-lg-row'>
             <input class='col-lg-4 btn btn-success' type="submit" value='ajouter'>
            </div>          
            
        </form>
        <!-- Affichage -->
        <ol type='1'>
            <?php foreach ($taches as $tache): ?>
                <li>
                    <?php if($tache['tach_accomplies']):?>
                        <tricke><?php echo htmlspecialchars($tache['tache']);?></tricke>
                        <?php else: ?>
                            <?php echo htmlspecialchars($tache['tache']);?>
                            <label for="" class='d-flex justify-content-end'> <?php echo "à ". htmlspecialchars($tache['date_d']);?> </label>
                            <div class="container">
                                <a class='btn shadow-sm text-success' href="taches_termin.php?id_tach=<?php echo $tache['id_tach'];?>">cocher comme termner</a>
                                <?php endif;?>
                                <a class='btn shadow-sm' href="sup_taches.php?id_tach=<?php echo $tache['id_tach'];?>">supprimer</a>
                                <hr>
                                
                            </div>
                            
                </li>
            <?php endforeach; ?>
        </ol>
    </section>
    
    <script src="script.js"></script>
</body>
</html>