<?php
require_once("helper.php");
require_once('Models/Database.class.php');
require_once('Models/Membre.class.php');

$membreModel = new Membre;  // variable membreModel qui instancie la classe Membre

$membres = $membreModel->getAll(); // variable membres qui récupère tous les membres

include("Views/membre.php");