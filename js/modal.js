const closeModal = () => {
  let modal = document.querySelector(".modal");
  modal.style.display = "none";
  modal.innerHTML = "";
};

const openModal = () => {
  let modal = document.querySelector(".modal");
  modal.style.display = "flex";

  modal.innerHTML = `<div class="modal_container">
                
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
            <a >revendre</a>
        </div>
    </div>
    <div class="modal_footer">
        <a onclick="closeModal()">Annuler</a>
        <a>Modifier</a>
    </div>
    </div>
    `;
};

const openModalRes = () => {
  let modal = document.querySelector(".modal");
  modal.style.display = "flex";
  modal.innerHTML = `             <section class="modal_ticket">
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
                      <li><a href="" class="show_res">réservez</a></li>
                  </ul>
              </li>
              <li class="ticket_match">
                  <ul>
                      <li>6</li>
                      <li>16:00 22/03/2024</li>
                      <li>Stade el Kafir</li>
                      <li>VIP</li>
                      <li>50$</li>
                      <li><a href="" class="show_res">réservez</a></li>
                  </ul>
              </li>
              <li class="ticket_match">
                  <ul>
                      <li>6</li>
                      <li>16:00 22/03/2024</li>
                      <li>Stade el Kafir</li>
                      <li>VIP</li>
                      <li>50$</li>
                      <li><a href="" class="show_res">réservez</a></li>
                  </ul>
              </li>

          </ul>
          <div class="modal_footer">
              <a onclick="closeModal()">Annuler</a>
          </div>
          </div>
</section>
</section> `;
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
