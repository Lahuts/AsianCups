<?php

require_once 'connect_bdd.inc.php';

session_start(); // Start the session

if(isset($_POST['username']) && isset($_POST['password'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM Utilisateur WHERE email = '$username' and mdp = '$password'";
    $result = $link->query($query);

    if($result->num_rows > 0){
        $_SESSION['id'] = $result->fetch_assoc()['idUtilisateur']; // Store the 'id' in the session variable
        header('Location: /home_cli.php');
    }else{
        echo 'Wrong username or password';
    }
}

if(isset($_POST['prenom']) && isset($_POST['nom']) && isset($_POST['tel']) && isset($_POST['email']) && isset($_POST['pass']) && isset($_POST['cpass'])){
    $prenom = $_POST['prenom'];
    $nom = $_POST['nom'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];
    $mdp = $_POST['pass'];
    $cmdp = $_POST['cpass'];
    $cgu = $_POST['cgu'];

    if($mdp == $cmdp && $cgu == 'on'){
        if ($link->query("SELECT * FROM Utilisateur WHERE email = '$email'")->num_rows == 0){
            $link->query("INSERT INTO Utilisateur (prenom, nom, tel, email, mdp) VALUES ('$prenom', '$nom', '$tel', '$email', '$mdp')");
            $_SESSION['id'] = $link->insert_id; // Store the 'id' in the session variable
            header('Location: /home_cli.php');
        }else{
            echo 'Email already used';
        }
    }
}