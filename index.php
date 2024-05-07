<?php
require_once 'include/controller/data.php';
?>

<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link
      href="
https://cdn.jsdelivr.net/npm/reset-css@5.0.2/reset.min.css
"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="/style/reset.css">
    <link rel="stylesheet" href="/style/main.css" />
    <script src="
https://cdn.jsdelivr.net/npm/flag-icon-css@4.1.7/svgo.config.min.js
"></script>
    <link
      href="
https://cdn.jsdelivr.net/npm/flag-icon-css@4.1.7/css/flag-icons.min.css
"
      rel="stylesheet"
    />

    <title>AsianCup E-Ticket</title>
  </head>
  <body>
    <header>
      <nav>
        <ul>
          <li><a href="/connec.php">S'identifier | Connexion</a></li>
        </ul>
      </nav>
    </header>
    <main>
      <section class="heroBanner">
        <div class="left_side">
          <h1>
            ASIANCUP <br />
            E-TICKET
          </h1>
          <p>
            Trouvez vos billets pour les matchs les plus passionnants avec notre
            large sélection et vivez des moments inoubliables sur le terrain.
          </p>
          <a href="" class="btn_acc">Découvrez tout les futurs matchs</a>
        </div>
        <div class="ticket_container">
          <h3>Derniers billets :</h3>
          <ul>
            <?php
            foreach ($billets as $key => $billet) {
                echo $billet->getCard();
            }
            ?>
          </ul>
        </div>
      </section>
      <section class="doha">
        <h2>
          Découvrez les 10 choses incontournables <br />
          a faire ou a visiter à Doha
        </h2>
        <p class="doha_desc">
          Découvrez les 10 incontournables de Doha : du charme du Souq Waqif à
          l'histoire du Musée d'art islamique, explorez une ville où les marchés
          traditionnels côtoient les musées renommés, offrant une expérience
          captivante pour tous les visiteurs
        </p>
        <ul>
          <li class="grid_r">
            <figure>
              <img src="/asset/souq.jpg" alt="" />
              <figcaption>
                <h3>Souq Waqif</h3>
                <p>
                  Explorez ce marché traditionnel où vous trouverez une large
                  gamme de produits locaux, des épices et des souvenirs. C'est
                  aussi un endroit idéal pour déguster des plats traditionnels
                  qataris.
                </p>
                <a href="">En savoir plus </a>
              </figcaption>
            </figure>
          </li>
          <li class="">
            <figure>
              <img src="/asset/museum.webp" alt="" />
              <figcaption>
                <h3>Musée d'art islamique</h3>
                <p>
                  Admirez la magnifique architecture de ce musée, ainsi que sa
                  collection exceptionnelle d'artefacts islamiques provenant du
                  monde entier.
                </p>
                <a href="">En savoir plus </a>
              </figcaption>
            </figure>
          </li>
          <li class="grid_r">
            <figure>
              <img src="/asset/pearl.jpg" alt="" />
              <figcaption>
                <h3>La Perle-Qatar</h3>
                <p>
                  Découvrez une île fascinante à Doha, où le luxe, les
                  divertissements et une communauté prospère coexistent.
                </p>
                <a href="">En savoir plus </a>
              </figcaption>
            </figure>
          </li>
          <li class="">
            <figure>
              <img src="/asset/natMuseum.jpg" alt="" />
              <figcaption>
                <h3>Musée national du Qatar</h3>
                <p>
                  Explorez ce marché traditionnel où vous trouverez une large
                  gamme de produits locaux, des épices et des souvenirs. C'est
                  aussi un endroit idéal pour déguster des plats traditionnels
                  qataris.
                </p>
                <a href="">En savoir plus </a>
              </figcaption>
            </figure>
          </li>
        </ul>
      </section>
    </main>
    <footer>
      <nav>
        <ul>
          <li>
            <a href="/index.html">Accueil</a>
        </li>
          <li>
            <a href="/teams.html">Equipes</a>
        </li>
          <li>
            <a href="/matches.html">Matchs</a>
        </li>
          <li>
            <a href="/players.html">Joueurs</a>
        </li>
        </ul>
      </nav>
    </footer>
  </body>
</html>
