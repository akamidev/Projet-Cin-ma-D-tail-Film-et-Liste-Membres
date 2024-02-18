<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <h1>NETFLEX</h1>
    <?php include 'navbar.php'; ?>

    <form action="index.php">
        <select name="genre" id="genre">
    <?php 
    $currentGenre = $_GET['genre'] ?? null; // Récupère le genre actuel à partir de l'URL
    foreach ($genres as $genre): 
    ?>
        <option value="<?= $genre['id'] ?>" <?= $genre['id'] == $currentGenre ? 'selected' : '' ?>>
            <?= $genre['nom'] ?>
        </option>
    <?php endforeach ?>
</select>
       
        <button>Filtrer</button>

    </form>
   
    <div class="grid">
        <?php foreach ($films as $film): ?>
            <div class="film">
                <h2><a href="film.php?id=<?= $film['id'] ?>">
                        <?= $film['titre'] ?>
                    </a></h2>
                <img src="<?= getPoster($film['titre'], $film['annee_prod']) ?>" alt="<?= $film['annee_prod'] ?>">
                <p>
                    <?= $film['annee_prod'] ?>
                </p>
            </div>
        <?php endforeach ?>
    </div>
</body>


</html>