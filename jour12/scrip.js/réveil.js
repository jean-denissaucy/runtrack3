// Variables globales
let alarmTime = null;
let alarmTimeout = null;
let alarmAudio = null;

// Éléments du DOM
const currentTimeElement = document.getElementById('currentTime');
const alarmTimeInput = document.getElementById('alarmTime');
const setAlarmBtn = document.getElementById('setAlarm');
const stopAlarmBtn = document.getElementById('stopAlarm');
const alarmStatusElement = document.getElementById('alarmStatus');

// Fonction pour mettre à jour l'horloge
function updateClock() {
    const now = new Date();
    const hours = String(now.getHours()).padStart(2, '0');
    const minutes = String(now.getMinutes()).padStart(2, '0');
    const seconds = String(now.getSeconds()).padStart(2, '0');

    currentTimeElement.textContent = `${hours}:${minutes}:${seconds}`;

    // Vérifier si l'alarme doit sonner
    if (alarmTime && `${hours}:${minutes}` === alarmTime) {
        triggerAlarm();
    }
}

// Fonction pour programmer l'alarme
function setAlarm() {
    const timeValue = alarmTimeInput.value;

    if (!timeValue) {
        alert('Veuillez sélectionner une heure pour le réveil');
        return;
    }

    alarmTime = timeValue;

    // Afficher le statut
    alarmStatusElement.textContent = `Alarme programmée pour ${alarmTime}`;
    alarmStatusElement.className = 'alarm-status active';

    // Changer les boutons
    setAlarmBtn.style.display = 'none';
    stopAlarmBtn.style.display = 'block';

    // Désactiver l'input
    alarmTimeInput.disabled = true;
}

// Fonction pour arrêter l'alarme
function stopAlarm() {
    alarmTime = null;

    // Arrêter le son si il joue
    if (alarmAudio) {
        alarmAudio.pause();
        alarmAudio = null;
    }

    // Réinitialiser l'interface
    alarmStatusElement.className = 'alarm-status';
    setAlarmBtn.style.display = 'block';
    stopAlarmBtn.style.display = 'none';
    alarmTimeInput.disabled = false;
    alarmTimeInput.value = '';
}

// Fonction pour déclencher l'alarme
function triggerAlarm() {
    alarmStatusElement.textContent = 'RÉVEIL ! Il est temps de se réveiller !';
    alarmStatusElement.className = 'alarm-status ringing';

    // Créer un son d'alarme (bip répété)
    playAlarmSound();

    // Réinitialiser l'alarme après 1 minute
    setTimeout(() => {
        if (alarmTime) {
            stopAlarm();
        }
    }, 60000);
}

// Fonction pour jouer un son d'alarme
function playAlarmSound() {


    // Utiliser l'API Web Audio pour créer un son de bip
    const audioContext = new (window.AudioContext || window.webkitAudioContext)();

    function beep() {
        const oscillator = audioContext.createOscillator();
        const gainNode = audioContext.createGain();

        oscillator.connect(gainNode);
        gainNode.connect(audioContext.destination);

        oscillator.frequency.value = 800;
        oscillator.type = 'sine';

        gainNode.gain.setValueAtTime(0.3, audioContext.currentTime);
        gainNode.gain.exponentialRampToValueAtTime(0.01, audioContext.currentTime + 0.5);

        oscillator.start(audioContext.currentTime);
        oscillator.stop(audioContext.currentTime + 0.5);
    }

    // Répéter le bip toutes les secondes
    const beepInterval = setInterval(() => {
        if (!alarmTime || alarmStatusElement.className !== 'alarm-status ringing') {
            clearInterval(beepInterval);
            return;
        }
        beep();
    }, 1000);

    // Premier bip immédiat
    beep();
}

// Event listeners
setAlarmBtn.addEventListener('click', setAlarm);
stopAlarmBtn.addEventListener('click', stopAlarm);

// Mettre à jour l'horloge chaque seconde
setInterval(updateClock, 1000);
updateClock(); // Appel initial
