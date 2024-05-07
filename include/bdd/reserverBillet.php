<?php 

include 'include/bdd/connect_bdd.inc.php';

// Modifier le propriétaire du billet
if(isset($_POST['id_billet']) && isset($_POST['id_utilisateur'])) {
    $idBillet = $_POST['id_billet'];
    $idUtilisateur = $_POST['id_utilisateur'];

    $query = "UPDATE Billet SET idUtilisateur = $idUtilisateur WHERE idBillet = $idBillet";
    $result = $link->query($query);

    unset($_POST['id_billet']);
    
}

// Modifier les données de l'utilisateur
if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['address'])) {
    $nom = $_POST['name'];
    $email = $_POST['email'];
    $tel = $_POST['phone'];
    $adresse = $_POST['address'];
    $idUtilisateur = $_POST['id_utilisateur'];

    $query = "UPDATE Utilisateur SET nom = '$nom', email = '$email', tel = '$tel', adresse = '$adresse' WHERE idUtilisateur = $idUtilisateur";
    $res = $link->query($query);

    unset($_POST['name']);
    unset($_POST['email']);
    unset($_POST['phone']);
    unset($_POST['adresse']);
    unset($_POST['id_utilisateur']);

    
}

