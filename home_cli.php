<?php
include 'include/bdd/revendreBillet.php';
include 'include/bdd/reserverBillet.php';
include 'include/bdd/modifier.php'; 
include_once 'include/bdd/auth.php';
include 'include/controller/data_cli.php';

?>

<?php


// Vérifier si l'utilisateur est connecté
if (isset($_SESSION['user'])) {

} else {
    // Utilisateur non connecté, rediriger vers index.php
    header('Location: index.php');
    exit;
}
?>



<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | AsianCup_eTicket</title>
    <link rel="stylesheet" href="/style/reset.css">
    <link rel="stylesheet" href="/style/home_cli.css">
    <script src="https://cdn.jsdelivr.net/npm/flag-icon-css@4.1.7/svgo.config.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/flag-icon-css@4.1.7/css/flag-icons.min.css" rel="stylesheet" />
</head>

<body>
    <header>
        <h1>AsianCUP</h1>
        <div class="user_container">
            <div>
                <a href="/logout.php"><img class="logout" src="/asset/logout.png" alt=""></a>
            </div>
            <div class="user_tab">
                <img src="/asset/Khabib.png" alt="">
                <a href="/modifier_profil.php"><?php echo $_SESSION['user']->getPrenom() . ' ' . $_SESSION['user']->getNom() ?></a>
            </div>
        </div>

    </header>
    <nav class="nav_container">

    </nav>
    <main>
        <section class="home_pres">
            <!-- Dynamic content goes here -->
            <h2 class="pres_title">Bonjour <?php echo $_SESSION['user']->getPrenom() ?>,</h2>
            <p>Vous avez <?php echo $ticketCount; ?> billets à utiliser</p>
            <p>

            </p>
        </section>

        <div class="match">
            <h2 class="match_title">Le Prochain Match à ne pas manqué</h2>
            <div class="vs">
                <ul>
                    <li>
                        <img src="/asset/jap.png" alt="">
                        <h3><?php echo $nextMatch['team1']; ?></h3>
                    </li>
                    <li>
                        <H3>vs</H3>
                    </li>
                    <li>
                        <img src="asset/coree.png" alt="">
                        <h3><?php echo $nextMatch['team2']; ?></h3>
                    </li>
                </ul>
            </div>
        </div>
        </section>
        <section class="my_res">
            <h2>Mes réservations</h2>
            <ul class="my_ticket">
                <?php foreach ($billets as $billet): ?>
                    <li>
                        <div class="border">
                            <img src="/asset/ticket.png" alt="">
                        </div>
                        <div class="info">
                            <h3><?php echo $billet->getEquipe1() . '-' . $billet->getEquipe2(); ?></h3>
                            <ul>
                                <li><span>Assigné à :</span> <?php echo $billet->getAssignedTo(); ?></li>
                                <li><span>Debut :</span> <?php echo $billet->getHeure() . ' - ' . $billet->getDate(); ?></li>
                                <li><span>Stade :</span> <?php echo $billet->getStade(); ?></li>
                                <li><span>Place :</span> <?php echo $billet->getPlace(); ?></li>
                            </ul>
                            <div class="bottom_pres">
                                <p class="pending state_match"></p>
                                <a class="show" 
                                data-id="<?php echo $billet->getId(); ?>"
                                data-name="<?php echo $billet->getAssignedTo(); ?>"
                                    data-date="<?php echo $billet->getHeure(); ?>"
                                    data-lieux="<?php echo $billet->getStade(); ?>"
                                    data-place="<?php echo $billet->getPlace(); ?>"></a>
                            </div>
                        </div>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
        </section>
        <section class="proche">
            <h2>Prochains événements</h2>
            <ul class="proche_event">
                <?php foreach ($matchsArray as $match): ?>
                    <li class="event_2face">
                        <img src="asset/afc.png" alt="">
                        <div>
                            <h3><?php echo $match->getTeam1() . ' VS ' . $match->getTeam2() ?></h3>
                            <ul>
                                <li>début :</li>
                                <li>lieux :</li>
                                <li><?php echo $match->getHeure() . ' - ' . $match->getDate(); ?></li>
                                <li><?php echo $match->getStade() ?></li>
                            </ul>
                            <div class="bottom_pres">
                                <p class="pending state_match"></p>
                                <a class="mhow" data-id="<?php echo $match->getId() ?>"></a>
                            </div>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
        </section>


        <section class="event_doha">
            <h2>Découvrez les activités à Doha</h2>
            <p>Explorez une ville où les marchés traditionnels côtoient les musées renommés, offrant une expérience
                captivante pour tous les visiteurs</p>
            <ul>
                <li>
                    <img src="asset/souq.jpg" alt="">
                    <h3>Souq Waqif</h3>
                    <p>Le Souq Waqif est un marché traditionnel situé au cœur de Doha, au Qatar. Il est l'un des plus
                        anciens marchés du Moyen-Orient et propose une variété de produits locaux, notamment des épices,
                        des tissus, des bijoux et des souvenirs.</p>
                </li>
                <li>
                    <img src="asset/museum.webp" alt="">
                    <h3>Musée d'art islamique</h3>
                    <p>Le Musée d'art islamique de Doha est l'un des musées les plus importants du Qatar. Il abrite une
                        collection exceptionnelle d'art islamique provenant du monde entier, y compris des manuscrits
                        anciens, des céramiques, des textiles et des bijoux.</p>
                </li>
                <li>
                    <img src="asset/pearl.jpg" alt="">
                    <h3>Qanat Quartier</h3>
                    <p>Le Qanat Quartier est un quartier résidentiel situé sur l'île artificielle de Pearl-Qatar. Il est
                        connu pour son architecture inspirée de Venise, avec des canaux, des ponts et des places
                        pittoresques. C'est un endroit idéal pour se promener et profiter de la vue sur la marina.</p>
                </li>
            </ul>
        </section>
        <section class="modal">
        <script>
        if(localStorage.getItem('billet_id') != null){
            let mod = document.querySelector(".modal");
            <?php include 'include/bdd/chooseByUser.php'; ?>
            let tabBillet = <?php echo json_encode( $Choosebillets); ?>;
            let id = localStorage.getItem('billet_id');
            let billet = tabBillet.find(billet => billet.id == id);
            console.log(billet);

            mod.innerHTML = `
            <section class="modal_ticket">
            <div class="modal_ticket_header">
            <img src="/asset/ticket.png" alt="">
            <h3>Réservez votre billet </h3>
            </div>
            <div class="modal_ticket_liste">
            <h2 class="modal_ticket_conf"> Confirmation de réservation :</h2>
            <ul class="modal_info_match">
                <h3>Informations de réservation :</h3>
                <li><span>Match :</span>${billet.team1} - ${billet.team2}</li>
                <li><span>Début :</span> ${new Date(billet.date).toLocaleDateString('fr-FR')} ${new Date(billet.time).toLocaleTimeString('fr-FR', { hour: '2-digit', minute: '2-digit' })}</li>
                <li><span>Lieu :</span> ${billet.stadium} </li>
                <li><span>N° de place :</span>${billet.id}</li>
                <li><span>Type :</span>${billet.seat}</li>
            </ul>
                <div class="modal_info_perso">
                    <h3>Informations personelles :</h3>
                    <form action="" method="POST">
                    <label for="name">Nom :</label>
                    <input type="text" id="name" name="name" value="<?php echo $_SESSION['user']->getNom(); ?>" required>

                    <label for="email">Email :</label>
                    <input type="email" id="email" name="email" value="<?php echo $_SESSION['user']->getEmail(); ?>" required>

                    <label for="phone">Téléphone :</label>
                    <input type="tel" id="phone" name="phone" value="<?php echo $_SESSION['user']->getTel(); ?>" required>

                    <label for="address">Adresse :</label>
                    <input type="text" id="address" name="address" value="<?php echo $_SESSION['user']->getAddrs(); ?>" required>

                    <input type="hidden" name="id_billet" value="${id}" style="display: none;">
                    <input type="hidden" name="id_utilisateur" value="<?php echo $_SESSION['user']->getId(); ?>" style="display: none;">

                    <input type="submit" value="Réserver" />
                    </form>
                </div>
                <div class="modal_footer">
                    <a onclick="closeModal()">Annuler</a>
                </div>
                </div>
            </section>
            `;





            mod.style.display = "flex";

            localStorage.removeItem('billet_id');
           
           

        }
    </script>
        </section>
    </main>
    <script>
        const closeModal = () => {
            let modal = document.querySelector(".modal");
            modal.style.display = "none";
            modal.innerHTML = "";
        };

        const openModal = (datas) => {

            let modal = document.querySelector(".modal");
            modal.style.display = "flex";
            modal.innerHTML = `
            <div class="modal_container">
                <div class="modal_header">
                <img src="/asset/ticket.png" alt=""><h2>Informations Billets</h2>
                </div>
                <div class="modal_body">
                <form action="/home_cli.php" method="post">
                    <label for="name">Nom</label>
                    <input type="text" name="assignedto" id="name" value="${datas.name}" readonly>
                    <label for="date">Date</label>
                    <input type="text" name="date" id="date" value="${datas.date}" readonly>
                    <label for="lieux">Stade</label>
                    <input type="text" name="lieux" id="lieux" value="${datas.lieux}" readonly>
                    <label for="place">Place</label>
                    <input type="text" name="place" id="place" value="${datas.place}" readonly>
                    <input type="text" name="idbilletss" value="${datas.id}" style="display: none;">
                    <input type="submit" id="modification" value="Valider" style="display: none;">
                </form>
                </form>
                <div class="revendre">
                    <h2>Impossible pour vous de venir ?</h2>
                    <p>Revendez votre ticket facilement, saisissez un prix ont s'occupe du reste</p>
                    <a class="rev_btn" onclick="revendre(${datas.id})">revendre</a>
                </div>
                </div>
                <div class="modal_footer">
                <a onclick="closeModal()">Annuler</a>
                <a onclick="modifier(this)">Modifier</a>
                </div>
            </div>
            `;
        };

        const revendre = (datas) => {
            let rev = document.querySelector(".revendre");

            rev.innerHTML = `
                <div class="rev_tab" >
                    <form action="home_cli.php" method="post">
                        <h3>À Combien souhaitez vous le revendre ?</h3>
                        <label for="">prix :</label>
                        <input type="number" name="number">
                        <input type="text" name="idbillet" value="${datas}" style="display: none;">
                        <div>
                            <a onclick="annulRevendre()">Annuler</a>
                            <input type="submit" value="Valider">
                        </div>
                    </form>
                </div>
            `;
        };

        const annulRevendre = () => {
            let rev = document.querySelector(".rev_tab");

            rev.innerHTML = `
                <div class="revendre">
                    <h2>Impossible pour vous de venir ?</h2>
                    <p>Revendez votre ticket facilement, saisissez un prix ont s'occupe du reste</p>
                    <a class="rev_btn" onclick="revendre()"> revendre </a>
                </div>
            `;
        };

        const modifier = (e) => {
            if(e.innerText == "Valider"){
                let submitBtn = document.querySelector("#modification");
                submitBtn.click();
            }

            let name = document.querySelector("#name");

            nm = name.value;

            name.style.backgroundColor = "#FFF";
            name.removeAttribute("readonly");
            e.innerText = "Valider";
        };

        const reserverTicket = (id, equipes, date,heure, stade, place) => {

            let mod_t = document.querySelector(".modal");
            mod_t.innerHTML = `
            <section class="modal_ticket">
            <div class="modal_ticket_header">
            <img src="/asset/ticket.png" alt="">
            <h3>Réservez votre billet </h3>
            </div>
            <div class="modal_ticket_liste">
            <h2 class="modal_ticket_conf"> Confirmation de réservation :</h2>
            <ul class="modal_info_match">
                <h3>Informations de réservation :</h3>
                <li><span>Match :</span>${equipes}</li>
                <li><span>Début :</span> ${new Date(date).toLocaleDateString('fr-FR')} ${new Date(heure).toLocaleTimeString('fr-FR', { hour: '2-digit', minute: '2-digit' })}</li>
                <li><span>Lieu :</span> ${stade} </li>
                <li><span>N° de place :</span>${id}</li>
                <li><span>Type :</span>${place}</li>
            </ul>
                <div class="modal_info_perso">
                    <h3>Informations personelles :</h3>
                    <form action="" method="POST">
                    <label for="name">Nom :</label>
                    <input type="text" id="name" name="name" value="<?php echo $_SESSION['user']->getNom(); ?>" required>

                    <label for="email">Email :</label>
                    <input type="email" id="email" name="email" value="<?php echo $_SESSION['user']->getEmail(); ?>" required>

                    <label for="phone">Téléphone :</label>
                    <input type="tel" id="phone" name="phone" value="<?php echo $_SESSION['user']->getTel(); ?>" required>

                    <label for="address">Adresse :</label>
                    <input type="text" id="address" name="address" value="<?php echo $_SESSION['user']->getAddrs(); ?>" required>

                    <input type="hidden" name="id_billet" value="${id}" style="display: none;">
                    <input type="hidden" name="id_utilisateur" value="<?php echo $_SESSION['user']->getId(); ?>" style="display: none;">

                    <input type="submit" value="Réserver" />
                    </form>
                </div>
                <div class="modal_footer">
                    <a onclick="closeModal()">Annuler</a>
                </div>
                </div>
            </section>
            `;
        };

        const openModalRes = (datas) => {
            var billets = <?php echo json_encode($billetsParMatch); ?>;
            console.log(billets);

            let modal = document.querySelector(".modal");
            modal.style.display = "flex";
            modal.innerHTML = `
            <section class="modal_ticket">
                <div class="modal_ticket_header">
                <img src="/asset/ticket.png" alt="">
                <h3>Réservez votre billets </h3>
                </div>
                <div class="modal_ticket_liste">
                <h3>${billets[datas][0]['equipe1']} - ${billets[datas][0]['equipe2']}</h3>
                <p>Réservez votre billets des maintenant, et obtenez les meilleurs places !</p>
                <ul class="all_ticket">
                
                ${billets[datas].map(billet => `
                    <li class="ticket_match">
                    <ul>
                        <li>${billet['id']}</li>
                        <li>${new Date(billet['date']).toLocaleDateString('fr-FR')}</li>
                        <li>${new Date(billet['heure']).toLocaleTimeString('fr-FR', { hour: '2-digit', minute: '2-digit' })}</li>
                        <li>Al-Maktoum</li>
                        <li>${billet['place']}</li>
                        <li>${billet['prix']} $</li>
                        <li>
                        <a class="show_res" onclick="reserverTicket(${billet['id']}, '${billet['equipe1']} - ${billet['equipe2']}', '${billet['date']}','${billet['heure']}', 'Al-Maktoum', '${billet['place']}')">réservez</a>
                        </li>
                    </ul>
                    </li>
                `).join('')}
                
                </ul>
                <div class="modal_footer">
                    <a onclick="closeModal()">Annuler</a>
                </div>
                </div>
            </section>
            `;
        };


        document.addEventListener("DOMContentLoaded", function () {
            const showsColl = document.querySelectorAll(".show");

            const modal = document.querySelector(".modal");

            showsColl.forEach((show) => {
                show.addEventListener("click", (e) => {
                    e.preventDefault();
                    const name = show.dataset.name;
                    const date = show.dataset.date;
                    const lieux = show.dataset.lieux;
                    const place = show.dataset.place;
                    const id = show.dataset.id;
                    openModal({ id,name, date, lieux, place });
                });
            });
        });

        const showsMa = document.querySelectorAll(".mhow");

        showsMa.forEach((shows) => {
            shows.addEventListener("click", (e) => {
                e.preventDefault();
                const id = shows.dataset.id;
                openModalRes(id);
            });
        });

    </script>

</body>

</html>