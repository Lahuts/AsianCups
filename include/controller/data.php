<?php 
require_once 'include/bdd/connect_bdd.inc.php';
require_once 'include/models/Billet.php';

$query = "SELECT * FROM `Billet` INNER JOIN Matchs INNER JOIN Stade";
# ($id ,$heure, $date, $stade, $etape, $categorie,$equipe1, $equipe2,$prix)
$result = $link->query($query);
$billets = array();
$resultat = $result->fetch_all();

foreach ($resultat as $key => $value) {
    $billets[] = new Billet($value[0], $value[9], $value[8], $value[16], $value[12],'Categorie 1', $value[10], $value[11], $value[1]);
}


