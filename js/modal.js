const closeModal = () => {
  let modal = document.querySelector(".modal");
  modal.style.display = "none";
  modal.innerHTML = "";
};

const openModal = () => {
  let modal = document.querySelector(".modal");
  modal.style.display = "flex";

  modal.innerHTML = `            <div class="modal_container">
                
  <div class="modal_header">
      <img src="/asset/ticket.png" alt=""><h2>Informations Billets</h2>
  </div>
  <div class="modal_body">
      
      <form action="">
          <label for="name">Nom</label>
          <input type="text" name="name" id="name" value="Alexis Lahuts" readonly>
          <label for="date">Date</label>
          <input type="text" name="date" id="date" value="16:00 22/05/2024" readonly>
          <label for="lieux">Lieux</label>
          <input type="text" name="lieux" id="lieux" value="El Kafir - Doha" readonly>
          <label for="place">Place</label>
          <input type="text" name="place" id="place" value=" VIP" readonly>
      </form>
      <div class="revendre">
          <h2>Impossible pour vous de venir ?</h2>
          <p>Revendez votre ticket facilement, saisissez un prix ont s'occupe du reste</p>
          <a class="rev_btn" onclick="revendre()">revendre</a>
      </div>
  </div>
  <div class="modal_footer">
      <a onclick="closeModal()">Annuler</a>
      <a onclick="modifier(this)">Modifier</a>
  </div>
  </div>
    `;
};

const revendre = () => {
    let rev = document.querySelector(".revendre");

    rev.innerHTML = `                        
<div class="rev_tab">
    <form action="">
        <h3>À Combien souhaitez vous le revendre ?</h3>
        <label for="">prix :</label>
        <input type="number">
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
  let name = document.querySelector("#name");

  nm = name.value;

  name.style.backgroundColor = "#FFF";
  name.removeAttribute("readonly");
  e.innerText = "Valider";
};

const reserverTicket = () => {
    
    let mod_t = document.querySelector(".modal");
    mod_t.innerHTML = ` <section class="modal_ticket">
    <div class="modal_ticket_header">
            <img src="/asset/ticket.png" alt="">
            <h3>Réservez votre billets </h3>
        </div>
        <div class="modal_ticket_liste">
            <h2 class="modal_ticket_conf"> Confirmation de réservation :</h2>
            <ul class="modal_info_match">
                <h3>Informations réservations :</h3>
                <li><span>Match :</span>Paris - Barcelone</li>
                <li><span>Debut :</span> 16h00 - 22/05/2024</li>
                <li><span>Lieux :</span> El Kafir </li>
                <li><span>N° de place :</span>6</li>
                <li><span>Type :</span>VIP</li>
            </ul>
           
           <div class="modal_info_perso">
            <h3>Informations personelles :</h3>
            <form action="">
                <label for="name">Nom :</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email :</label>
                <input type="email" id="email" name="email" required>

                <label for="phone">Téléphone :</label>
                <input type="tel" id="phone" name="phone" required>

                <label for="address">Adresse :</label>
                <input type="text" id="address" name="address" required>

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

const openModalRes = () => {
  let modal = document.querySelector(".modal");
  modal.style.display = "flex";
  modal.innerHTML = `             
  <section class="modal_ticket">
  <div class="modal_ticket_header">
          <img src="/asset/ticket.png" alt="">
          <h3>Réservez votre billets </h3>
      </div>
      <div class="modal_ticket_liste">
          <h3>France - Espagne</h3>
          <p>Réservez votre billets des maintenant, et obtenez les meilleurs places !</p>
          <ul class="all_ticket">
              <li class="ticket_match">
                  <ul>
                      <li>6</li>
                      <li>16:00 22/03/2024</li>
                      <li>Stade el Kafir</li>
                      <li>VIP</li>
                      <li>50$</li>
                      <li><a class="show_res" onclick="reserverTicket()">réservez</a></li>
                  </ul>
              </li>
              <li class="ticket_match">
                  <ul>
                      <li>6</li>
                      <li>16:00 22/03/2024</li>
                      <li>Stade el Kafir</li>
                      <li>VIP</li>
                      <li>50$</li>
                      <li><a  class="show_res" onclick="reserverTicket()">réservez</a></li>
                  </ul>
              </li>
              <li class="ticket_match">
                  <ul>
                      <li>6</li>
                      <li>16:00 22/03/2024</li>
                      <li>Stade el Kafir</li>
                      <li>VIP</li>
                      <li>50$</li>
                      <li><a class="show_res" onclick="reserverTicket()">réservez</a></li>
                  </ul>
              </li>

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
  const showsMa = document.querySelectorAll(".mhow");
  const modal = document.querySelector(".modal");

  showsColl.forEach((show) => {
    show.addEventListener("click", (e) => {
      e.preventDefault();
      openModal();
    });
  });

  showsMa.forEach((showMa) => {
    showMa.addEventListener("click", (e) => {
      e.preventDefault();
      openModalRes();
    });
  });
});
