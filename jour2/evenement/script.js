
// Attendre que le DOM soit chargé
document.addEventListener('DOMContentLoaded', function () {

    // Sélectionner le bouton
    let bouton = document.getElementById('monBouton');

    // Ajouter un écouteur d'événement
    bouton.addEventListener('click', function () {
        let message = document.getElementById('message');
        message.textContent = 'Merci Tu as cliqué';

    });

});