<?php 
include 'include/bdd/connect_bdd.inc.php';
include_once 'include/bdd/auth.php';
include 'include/controller/data_cli.php';
include 'include/bdd/modifierProfil.php';


?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Informations du compte</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.3/dist/css/bootstrap.min.css">
    <style>
        body {
            background-image: url('/asset/ball.jpeg'); 
            background-position: center; 
            background-size: cover; 
            background-repeat: no-repeat; 
            width: 100vw;
            height: 100vh;
        }

        h1{
            font-family: 'Montserrat', sans-serif;
            font-size: 3rem;
        }

        header>h1>a{
    margin-left: 6rem;
    font-size: 2rem;
    font-weight: 600;
    color: #000000;
    font-family: 'Montserrat', sans-serif;
    margin-right: auto;

}


        .container {
            max-width: 500px;
            margin-top: 18rem;
            margin-bottom: 20px;
            padding: 20px;
            border-radius: 20px;
            background-color: rgba(255, 255, 255, 0.9);
            box-shadow: 0 4px 8px rgba(0,0,0,0.05);
            margin-left: auto;
            margin-right: auto;
            display: flex;
            gap: 1rem;
        }

        .header {
            background-color: #125bd9;
            color: white;
            padding: 10px 0;
            border-radius: 10px;
            margin-bottom: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 2rem;
        }
        form{
            display: flex;
            flex-direction: column;
            gap: 1rem;
            width: 100%;
        }

        form>div{
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
        }

        form>div:nth-child(9){
            display: block;
            font-size: 1.2rem;
            font-family: 'Montserrat', sans-serif;
        }
        

        .form-control, .form-select, .form-label, .form-check-label, h1, h2 {
            display: block; 
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 2px solid #ccc; 
            border-radius: 5px; 
            box-sizing: border-box;
            font-family: 'Montserrat', sans-serif;
        }
        input{
            font-size: 1.2rem;
            font-weight: 500;
        }

        .form-check-input {
            margin-bottom: 20px;
        }

        .form-check-label {
            margin-left: 5px; 
        }

        .btn-primary {
            background-color: #125bd9;
            color: white;
            border: 2px solid #125bd9;
            border-radius: 8px;
            padding: 10px 20px;
            cursor: pointer;
        }

        .btn-primary:hover {
            background-color: #0e4c8e;
        }
        header{
            height: fit-content;
            display: flex;
            justify-content: space-between;
            align-items: center;
            align-content: center;
        }
        h1{
            margin-left: 20px;
        }

        h1, h2 {
            padding: 0;
            display: flex;
            border: none;
        }

        label {
            font-weight: bold;
            font-size: 1.3rem;
            font-family: 'Montserrat', sans-serif; 
        }

    </style>
    <link rel="stylesheet" href="./style/reset.css">
    <link rel="stylesheet" href="./style/home_cli.css">
</head>
<body>
    <header>
        <h1><a href="/home_cli.php">AsianCUP</a></h1>
        <div class="user_container">
                <div class="user_tab">
                    <img src="/asset/Khabib.png" alt="">
                    <a href="">Alexis Lahuts</a>
            </div>
        </div>
    </header>
    <div class="container">
        <div class="header text-center">
            <h1 align="center">Mon Compte</h1>
        </div>
        <form action="/modifier_profil.php" method="post">
            
                <label for="firstname" >Prénom:</label>
                <input type="text" class="form-control" id="firstname" name="prenom" value="<?php echo $_SESSION['user']->getPrenom() ?>" required>
          
            <div >
                <label for="lastname">Nom:</label>
                <input type="text" class="form-control" id="lastname" name="nom" value="<?php echo $_SESSION['user']->getNom() ?>" required>
            </div>
            <div class="mb-3">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" value="<?php echo $_SESSION['user']->getEmail() ?>" required>
            </div>
            <div class="mb-3">
                <label for="password">Mot de passe:</label>
                <input type="password" name="mdp" class="form-control" id="password">
            </div>
            <div class="mb-3">
                <label for="password">Confirmer le mot de passe:</label>
                <input type="password" name="mdpc" class="form-control" id="password">
            </div>
            <div class="mb-3">
                <label for="phone">Téléphone:</label>
                <input type="tel" class="form-control" name="phone" id="phone" value="<?php echo $_SESSION['user']->getAddrs() ?>">
            </div>
            <div class="mb-3">
                <label for="address">Adresse:</label>
                <input type="text" name="adresse" class="form-control" id="address" value="<?php echo $_SESSION['user']->getTel() ?>">
            </div>

            <div>
                <input type="checkbox" class="form-check-input" id="newsletter"
                class="form-check-label" for="newsletter">Recevoir les nouveautés et offres
            </div>
            
            <div>
                <button type="submit" class="btn btn-primary">Mettre à jour</button>
            </div>
        </form>
    </div>
</body>
</html>
