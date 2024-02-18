
<!-- Cette fonction effectue une opération spécifique.
Elle prend en paramètre un argument et retourne un résultat. -->

<?php
require_once("helper.php");
require_once('Models/Database.class.php');
require_once('Models/Film.class.php');
// Inclusion des fichiers nécessaires


$filmModel = new Film;

if (array_key_exists('id', $_GET)) {
    $film = $filmModel->getById($_GET['id']);
}

include("Views/film.php");
// Affiche la vue du film
