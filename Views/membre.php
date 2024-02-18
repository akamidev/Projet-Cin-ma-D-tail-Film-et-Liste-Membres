<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/membre.css">
    <title>Document</title>
</head>
<body>
<?php include 'navbar.php'; ?> 
<!-- // Inclut le fichier 'navbar.php' dans cette page -->
<div class="container">
    <h1 class="title">Liste des membres</h1>
    <?php if ($membres): ?> 
        <!-- // Si la variable $membres est définie et non vide -->
        <table class="member-table">
            <thead>
                <tr>
                    <th>ID du membre</th>
                    <th>ID du dernier film vu</th>
                    <th>Date du dernier film vu</th>
                    <th>Date d'inscription</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($membres as $membre): ?> 
                <!-- // Pour chaque élément dans $membres, assigne la valeur à $membre -->
                <tr class="member-item">
                    <td><?php echo $membre['id']; ?></td>
                     <!-- // Affiche la valeur de 'id' dans $membre -->
                    <td><?php echo $membre['dernier_film_id']; ?></td>
                     <!-- // Affiche la valeur de 'dernier_film_id' dans $membre -->
                    <td><?php echo $membre['date_dernier_film']; ?></td>
                     <!-- // Affiche la valeur de 'date_dernier_film' dans $membre -->
                    <td><?php echo $membre['date_inscription']; ?></td> 
                    <!-- // Affiche la valeur de 'date_inscription' dans $membre -->
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?> // Sinon
        <p class="error">Aucun membre trouvé.</p> 
        <!-- // Affiche un message d'erreur indiquant qu'aucun membre n'a été trouvé -->
    <?php endif; ?>
</div>
</body>
</html>