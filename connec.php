<?php 
require_once 'include/bdd/auth.php';
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Authentification - AsianCup E-ticket</title>
    <link rel="stylesheet" href="/style/main.css" />
    <link rel="stylesheet" href="/style/auth.css" />
  </head>
  <body>
    <header></header>
    <main>
      <section class="register">
        <div class="l_side_register">
          <h2>Votre compte E-ticket</h2>
          <p>
            Inscrivez-vous gratuitement dès maintenant pour profiter pleinement
            de notre plateforme AsianCup eTicket
          </p>
        </div>
        <fieldset class="f_register">
          <div class="regCo">
            <a id="btnInscription">Inscription</a>
            <a id="btnConnexion">Connexion</a>
          </div>
          <form action="/connec.php" id="inscription" method="post">
            <label for="surname">Votre prénom </label>
            <input type="text" id="name" name="prenom" placeholder="prénom" />
            <label for="name">Votre nom </label>
            <input type="text" id="surname" name="nom" placeholder="nom" />
            <label for="tel">Votre télephone </label>
            <input type="tel" id="tel" name="tel" placeholder="télephone" />
            <label for="email">Votre email </label>
            <input type="email" id="email" name="email" placeholder="email" />
            <label for="mdp">Votre mot de passe </label>
            <input type="password" id="mdp" name="pass" placeholder="mot de passe" />
            <label for="cmdp">Confirmation mot de passe </label>
            <input
              type="password"
              id="cmdp"
              name="cpass"
              placeholder="confirmation mot de passe"
            />
            <div>
              <input type="checkbox" name="cgu" id="cgu"/>
              <label for="cgu">
                J'accepte les <a href="/cgu.html">conditions générales d'utilisation</a></label>
            </div>
              <input type="submit" name="" id="" value="Valider" />
            </div>
          </form>
          <form action="/connec.php" id="connexion" method="post">
            <label for="email">Votre email </label>
            <input type="email" id="email" name="username" placeholder="email" />
            <label for="mdp">Votre mot de passe </label>
            <input type="password" id="mdp" name="password" placeholder="mot de passe" />
            <input type="submit" name="" id="" value="Valider" />
            <a href="">mot de passe oublié ?</a>
          </form>
        </fieldset>
      </section>
    </main>
    <script src="/js/auth.js"></script>
  </body>
</html>
