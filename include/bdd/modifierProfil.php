<?php

include 'connect_bdd.inc.php';



if (isset($_POST['prenom']) && isset($_POST['nom'])) {
    // Récupérer les nouvelles informations de l'utilisateur depuis la requête POST
    $id = $_SESSION['user']->getId();
    $nouveauPrenom = $_POST['prenom'];
    $nouveauNom = $_POST['nom'];
    $nouvelleAdresseEmail = $_POST['email'];
    $nouveauMotDePasse = $_POST['mdp'];
    $mdpc = $_POST['mdpc'];
    $nouveauTel = $_POST['tel'];
    $nouvelleAddresse = $_POST['adresse'];

    // Requête de mise à jour des informations de l'utilisateur
    $sql = "UPDATE Utilisateur 
    SET prenom='$nouveauPrenom',
     nom='$nouveauNom',
      email='$nouvelleAdresseEmail', 
      mdp='$nouveauMotDePasse',
       tel='$nouveauTel',
       adresse='$nouvelleAdresse'
        WHERE idUtilisateur='$id'";

    if ($link->query($sql) === TRUE) {
        echo "Informations de l'utilisateur mises à jour avec succès.";
    } else {

    }

    // Fermer la connexion à la base de données
    $link->close();
}

?>