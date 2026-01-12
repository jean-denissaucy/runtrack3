// Éléments du DOM
const digitalClock = document.getElementById('digitalClock');
const hourHand = document.getElementById('hourHand');
const minuteHand = document.getElementById('minuteHand');
const secondHand = document.getElementById('secondHand');
const clockDate = document.getElementById('clockDate');

// Noms des jours et mois en français
const jours = ['Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi'];
const mois = ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'];

// Fonction pour mettre à jour l'horloge
function updateClock() {
    const now = new Date();

    // Obtenir les valeurs de temps
    const hours = now.getHours();
    const minutes = now.getMinutes();
    const seconds = now.getSeconds();

    // Mettre à jour l'horloge digitale
    const hoursStr = String(hours).padStart(2, '0');
    const minutesStr = String(minutes).padStart(2, '0');
    const secondsStr = String(seconds).padStart(2, '0');
    digitalClock.textContent = `${hoursStr}:${minutesStr}:${secondsStr}`;

    // Calculer les angles pour les aiguilles
    const secondAngle = seconds * 6; // 6 degrés par seconde
    const minuteAngle = minutes * 6 + seconds * 0.1; // 6 degrés par minute + mouvement fluide
    const hourAngle = (hours % 12) * 30 + minutes * 0.5; // 30 degrés par heure + mouvement fluide

    // Appliquer les rotations
    secondHand.style.transform = `rotate(${secondAngle}deg)`;
    minuteHand.style.transform = `rotate(${minuteAngle}deg)`;
    hourHand.style.transform = `rotate(${hourAngle}deg)`;

    // Mettre à jour la date
    const jourSemaine = jours[now.getDay()];
    const jour = now.getDate();
    const moisNom = mois[now.getMonth()];
    const annee = now.getFullYear();
    clockDate.textContent = `${jourSemaine} ${jour} ${moisNom} ${annee}`;
}

// Mettre à jour l'horloge toutes les secondes
setInterval(updateClock, 1000);

// Appel initial
updateClock();
