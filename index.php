

<?php
require_once("helper.php"); // Inclut le fichier helper.php qui contient des fonctions utiles
require_once('Models/Database.class.php'); // Inclut la classe Database du dossier Models
require_once('Models/Film.class.php'); // Inclut la classe Film du dossier Models
require_once("Models/Genre.class.php"); // Inclut la classe Genre du dossier Models

$filmModel = new Film;
$genreModel = new Genre;

$films = $filmModel->getAll(); // Récupère tous les films
$genres = $genreModel->getAll(); // Récupère tous les genres

if (array_key_exists('genre', $_GET)) {  
    $films = $filmModel->getByGenre($_GET['genre']);  // Les films sont filtrés par genre
}
$allowed_pages = ['home', 'liste des membres', 'sales', 'categories', 'contact', 'login'];
$param = isset($_GET["pg"]) ? $_GET["pg"] : 'home';

// Si la page demandée n'est pas autorisée, rediriger vers la page d'accueil
if (!in_array($param, $allowed_pages)) {
    $param = 'home';
}

include("Views/home.php"); // Inclut la vue home.php
include './Views/footer.php'; // Inclut le fichier footer.php


