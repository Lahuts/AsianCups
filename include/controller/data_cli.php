<?php 

include_once 'include/bdd/connect_bdd.inc.php';
include_once 'include/models/Utilisateur.php';
include_once 'include/models/Billet.php';
include_once 'include/models/Matchs.php';

if(isset($_SESSION['id'])){
    $id = $_SESSION['id'];
    $query = "SELECT * FROM `Utilisateur` WHERE idUtilisateur = $id";
    $result = $link->query($query);
    $resultat = $result->fetch_all();
    $user = new Utilisateur($resultat[0][0], $resultat[0][1], $resultat[0][2], $resultat[0][3], $resultat[0][5], $resultat[0][6]);
    $_SESSION['user'] = $user;

    $billets = array();
    $query = "SELECT DISTINCT Billet.*, Utilisateur.*, Matchs.*, Categorie.*, Stade.*
    FROM Billet
    INNER JOIN Utilisateur ON Billet.idUtilisateur = Utilisateur.idUtilisateur
    INNER JOIN Matchs ON Billet.idMatch = Matchs.idMatch
    INNER JOIN Categorie ON Billet.idCategorie = Categorie.idCategorie
    INNER JOIN Stade ON Matchs.idStade = Stade.idStade
    WHERE Utilisateur.idUtilisateur = $id";

    $result = $link->query($query);
    $ress = $result->fetch_all();

    foreach ($ress as $key => $value) {
        // voici les parametre de billets ($id ,$heure, $date, $stade, $etape, $categorie,$equipe1, $equipe2,$prix,$assignedto,$lieux,$place)
        $billets[] = new Billet($value[0], $value[17], $value[16],$value[25],$value[20],"",$value[18], $value[19], $value[1],$value[7],"", $value[23]);
    }
    $_SESSION['billets'] = $billets;




    // MATCHS
    $query = "SELECT * FROM Matchs";
    $result = $link->query($query);
    $matchs = $result->fetch_all();
    $_SESSION['matchs'] = $matchs;

    foreach ($matchs as $key => $value) {

        $query = "SELECT nom FROM Stade WHERE idStade = $value[6]";
        $result = $link->query($query);
        $stade = $result->fetch_all();
        $stade = $stade[0][0];
        $matchsArray[] = new Matchs($value[0], $value[1], $value[2], $value[3], $value[4], $value[5],$stade);
    }

    function getBilletsByMatch($link, $idUtilisateur, $idMatch) {
        $billets = array();
        $query = "SELECT DISTINCT Billet.*, Utilisateur.*, Matchs.*, Categorie.*, Stade.*
        FROM Billet
        INNER JOIN Utilisateur ON Billet.idUtilisateur = Utilisateur.idUtilisateur
        INNER JOIN Matchs ON Billet.idMatch = Matchs.idMatch
        INNER JOIN Categorie ON Billet.idCategorie = Categorie.idCategorie
        INNER JOIN Stade ON Matchs.idStade = Stade.idStade
        WHERE Utilisateur.idUtilisateur = $idUtilisateur AND Matchs.idMatch = $idMatch";
    
        $result = $link->query($query);
        $ress = $result->fetch_all();
    
        foreach ($ress as $key => $value) {
            $billets[] = [
                'id' => $value[0],
                'heure' => $value[17],
                'date' => $value[16],
                'stade' => $value[25],
                'etape' => $value[20],
                'categorie' => $value[26],
                'equipe1' => $value[18],
                'equipe2' => $value[19],
                'prix' => $value[1],
                'assignedto' => $value[7],
                'lieux' => $value[28],
                'place' => $value[23]
            ];
        }
        return $billets;
    }
    
    // Supposons que $matchsArray contient vos matchs avec leurs ID
    $billetsParMatch = array();
    foreach ($matchsArray as $key => $match) {
        $idMatch = $match->getId();
        $billetss = getBilletsByMatch($link, -1, $idMatch);
        $billetsParMatch[$idMatch] = $billetss;
    }
    $jsonBilletsParMatch = json_encode($billetsParMatch);

}    