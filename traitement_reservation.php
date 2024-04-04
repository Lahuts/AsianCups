<?php
// Connexion à la base de données (remplacez ces valeurs par les vôtres)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test_reservation";

// Création de la connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérification de la connexion
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Récupération des données du formulaire
$categorie = $_POST['categorie'];
$quantite = $_POST['quantite'];

// Insertion des données dans la base de données
$sql = "INSERT INTO reservations (categorie, quantite) VALUES ('$categorie', '$quantite')";

if ($conn->query($sql) === TRUE) {
    // Affichage de la popup en utilisant PHP
    echo "<script>window.alert('Réservation effectuée');</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Fermeture de la connexion à la base de données
$conn->close();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmation de réservation</title>
    <link rel="stylesheet" href="style_confirmation_reservation.css">
</head>
<body>
    <div class="container">
        <div class="content">
            <h2>Confirmation de réservation</h2>
            <p>Merci pour votre réservation ! Votre demande a été traitée avec succès.</p>
            <img src="https://pictures.tribuna.com/image/cfba80fb-24e6-4e1c-a911-57a8a0242358?width=1920&quality=70" alt="Icône de billet">
        </div>
    </div>
</body>
</html>

