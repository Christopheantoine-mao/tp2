<?php
// public/index.php

// Inclure les fichiers de classes
require_once '../classes/Group.php';
require_once '../classes/Team.php';
require_once '../classes/Game.php';
require_once '../classes/Stadium.php';
require_once '../classes/City.php';

// Création des villes
$paris = new City(1, "Paris");
$lyon = new City(2, "Lyon");
$berlin = new City(3, "Berlin");
$madrid = new City(4, "Madrid");

// Création des stades
$stadeDeFrance = new Stadium(1, "Stade de France", 80000, $paris);
$stadeDeLyon = new Stadium(2, "Groupama Stadium", 59000, $lyon);
$olympiastadion = new Stadium(3, "Olympiastadion", 74475, $berlin);
$santiagoBernabeu = new Stadium(4, "Santiago Bernabéu", 81044, $madrid);

// Création des équipes
$teamGermany = new Team(1, "Allemagne");
$teamScotland = new Team(2, "Écosse");
$teamFrance = new Team(3, "France");
$teamItaly = new Team(4, "Italie");
$teamSpain = new Team(5, "Espagne");
$teamPortugal = new Team(6, "Portugal");
$teamEngland = new Team(7, "Angleterre");
$teamBelgium = new Team(8, "Belgique");

// Création des matchs pour chaque ville
$matchesParis = [
    new Game(1, "2024-06-14", $teamGermany, $teamScotland, $stadeDeFrance, "2-1"),
    new Game(2, "2024-06-15", $teamFrance, $teamItaly, $stadeDeFrance, "1-0"),
];

$matchesLyon = [
    new Game(3, "2024-06-16", $teamSpain, $teamPortugal, $stadeDeLyon, "0-0"),
    new Game(4, "2024-06-17", $teamEngland, $teamBelgium, $stadeDeLyon, "2-2"),
];

$matchesBerlin = [
    new Game(5, "2024-06-18", $teamGermany, $teamEngland, $olympiastadion, "3-2"),
    new Game(6, "2024-06-19", $teamFrance, $teamSpain, $olympiastadion, "1-1"),
];

$matchesMadrid = [
    new Game(7, "2024-06-20", $teamSpain, $teamItaly, $santiagoBernabeu, "2-2"),
    new Game(8, "2024-06-21", $teamPortugal, $teamBelgium, $santiagoBernabeu, "0-1"),
];

// Fusionner les tableaux de matchs pour toutes les villes
$allMatches = array_merge($matchesParis, $matchesLyon, $matchesBerlin, $matchesMadrid);

// Fonction pour récupérer tous les matchs pour une ville donnée
function getMatchesForCity(City $city, array $allMatches) {
    return array_filter($allMatches, function ($game) use ($city) {
        return $game->stadium->city === $city;
    });
}

// Utilisation de la fonction pour obtenir les matchs de chaque ville
$parisMatches = getMatchesForCity($paris, $allMatches);
$lyonMatches = getMatchesForCity($lyon, $allMatches);
$berlinMatches = getMatchesForCity($berlin, $allMatches);
$madridMatches = getMatchesForCity($madrid, $allMatches);
// Inclure le fichier de vue pour l'affichage des matchs
include '../views/header.php';
include '../views/game_list.php';  // Assurez-vous de passer la variable $parisMatches à cette vue.
include '../views/footer.php';
?>

