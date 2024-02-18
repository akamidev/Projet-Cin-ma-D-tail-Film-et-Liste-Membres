<!-- /**
 * Fichier de vue pour afficher les détails d'un film.
 */ -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/film.css">
    <link rel="stylesheet" href="./css/navbar.php">
    <link rel="stylesheet" href="./css/footer.php">
    <title>Document</title>
</head>
<body>
   
    
    
<div class="container">
<h1>NETFLEX</h1>
<?php include 'navbar.php'; ?>
    <?php if ($film): ?>
        
        <h1 class="title"><?php echo $film['titre']; ?></h1>
        <img src="<?= getPoster($film['titre'], $film['annee_prod']) ?>" alt="<?= $film['annee_prod'] ?>">
        <p class="summary"><?php echo $film['resum']; ?></p>
        <p class="duration">Durée : <?php echo $film['duree_min']; ?> minutes</p>
        <p class="year">Année de production : <?php echo $film['annee_prod']; ?></p>
        <p class="start-date">Date de début d'affiche : <?php echo $film['date_debut_affiche']; ?></p>
        <p class="end-date">Date de fin d'affiche : <?php echo $film['date_fin_affiche']; ?></p>
    <?php else: ?>
        <p class="error">Ce film n'existe pas.</p>
    <?php endif; ?>
</div>
<?php include './Views/footer.php'; ?>
</body>
</html>