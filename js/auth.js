document.addEventListener('DOMContentLoaded', function() {

    console.log('auth.js chargé');
    let inscription = document.querySelector('#inscription');
    let connexion = document.querySelector('#connexion');
    let btnInscription = document.querySelector('#btnInscription');
    let btnConnexion = document.querySelector('#btnConnexion');

    btnInscription.addEventListener('click', function() {
        turnOn(btnInscription,btnConnexion,connexion,inscription);
    });

    btnConnexion.addEventListener('click', function() {
        turnOn(btnConnexion,btnInscription,inscription,connexion);
    });

    const turnOn = (btn1,btn2,form1,form2) => {
        btn1.style.backgroundColor = '#1c5af5';
        btn1.style.color = 'white';
        btn2.style.backgroundColor = 'white';
        btn2.style.color = '#1c5af5';

        form1.style.display = 'none';
        form2.style.display = 'flex';
    };

});