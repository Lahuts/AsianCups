<?php 
require_once 'include/bdd/connect_bdd.inc.php';
require_once 'include/models/Billet.php';
require_once 'include/models/Utilisateur.php';
$query = "SELECT DISTINCT Billet.*, Utilisateur.*, Matchs.*, Categorie.*, Stade.*
FROM Billet
INNER JOIN Utilisateur ON Billet.idUtilisateur = Utilisateur.idUtilisateur
INNER JOIN Matchs ON Billet.idMatch = Matchs.idMatch
INNER JOIN Stade ON Matchs.idStade = Stade.idStade
INNER JOIN Categorie ON Billet.idCategorie = Categorie.idCategorie
WHERE Utilisateur.idUtilisateur = -1";
# ($id ,$heure, $date, $stade, $etape, $categorie,$equipe1, $equipe2,$prix)
$result = $link->query($query);
$billets = array();
$resultat = $result->fetch_all();

foreach ($resultat as $key => $value) {
    $billets[] = new Billet($value[0], $value[17], $value[16],$value[25],$value[20],"",$value[18], $value[19], $value[1],$value[7],"", $value[23]);
}



