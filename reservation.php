<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Réservation de billets</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="form-container">
            <h2>Réservation de billets</h2>
            <form action="traitement_reservation.php" method="post" id="reservationForm">
                <div class="form-group">
                    <label for="categorie">Catégorie de place :</label>
                    <select name="categorie" id="categorie">
                        <option value="cat1">Catégorie 1</option>
                        <option value="cat2">Catégorie 2</option>
                        <option value="cat3">Catégorie 3</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="quantite">Quantité de places :</label>
                    <input type="number" name="quantite" id="quantite" min="1" max="10" value="1">
                </div>
                <input type="submit" value="Réserver">
            </form>
        </div>
        <div class="image-container">
            <img src="asset/top_1.jpg" alt="Image du stade de football">
        </div>
    </div>

    <script>
        function afficherPopup(message) {
            alert(message);
        }
    </script>
</body>
</html>
