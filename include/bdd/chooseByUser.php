<?php 

include 'include/bdd/connect_bdd.inc.php';


    $query = "SELECT DISTINCT Billet.*, Utilisateur.*, Matchs.*, Categorie.*, Stade.*
FROM Billet
INNER JOIN Utilisateur ON Billet.idUtilisateur = Utilisateur.idUtilisateur
INNER JOIN Matchs ON Billet.idMatch = Matchs.idMatch
INNER JOIN Categorie ON Billet.idCategorie = Categorie.idCategorie
INNER JOIN Stade ON Matchs.idStade = Stade.idStade";

$result = $link->query($query);
$ress = $result->fetch_all();

$Choosebillets = array();

foreach ($ress as $key => $value) {
    // Here are the ticket parameters ($id, $time, $date, $stadium, $step, $category, $team1, $team2, $price, $assignedTo, $location, $seat)
    $Choosebillets[] = [
        "id" => $value[0],
        "time" => $value[17],
        "date" => $value[16],
        "stadium" => $value[25],
        "step" => $value[20],
        "category" => "",
        "team1" => $value[18],
        "team2" => $value[19],
        "price" => $value[1],
        "assignedTo" => $value[7],
        "location" => "",
        "seat" => $value[23]
    ];
}

