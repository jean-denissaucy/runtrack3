// Variables globales
let totalSeconds = 0;
let remainingSeconds = 0;
let timerInterval = null;
let isRunning = false;
let isPaused = false;

// Éléments du DOM
const timerDisplay = document.getElementById('timerDisplay');
const hoursInput = document.getElementById('hours');
const minutesInput = document.getElementById('minutes');
const secondsInput = document.getElementById('seconds');
const startBtn = document.getElementById('startBtn');
const pauseBtn = document.getElementById('pauseBtn');
const resetBtn = document.getElementById('resetBtn');
const timerStatus = document.getElementById('timerStatus');

// Fonction pour formater le temps
function formatTime(seconds) {
    const h = Math.floor(seconds / 3600);
    const m = Math.floor((seconds % 3600) / 60);
    const s = seconds % 60;

    return `${String(h).padStart(2, '0')}:${String(m).padStart(2, '0')}:${String(s).padStart(2, '0')}`;
}

// Fonction pour démarrer le minuteur
function startTimer() {
    if (isRunning && !isPaused) {
        return;
    }

    if (!isPaused) {
        // Calculer le temps total en secondes
        const hours = parseInt(hoursInput.value) || 0;
        const minutes = parseInt(minutesInput.value) || 0;
        const seconds = parseInt(secondsInput.value) || 0;

        totalSeconds = hours * 3600 + minutes * 60 + seconds;

        if (totalSeconds <= 0) {
            showStatus('Veuillez définir un temps valide', 'warning');
            return;
        }

        remainingSeconds = totalSeconds;
    }

    isRunning = true;
    isPaused = false;

    // Désactiver les inputs
    hoursInput.disabled = true;
    minutesInput.disabled = true;
    secondsInput.disabled = true;

    // Mettre à jour les boutons
    startBtn.disabled = true;
    pauseBtn.disabled = false;

    showStatus('Minuteur en cours...', 'active');

    // Démarrer le compte à rebours
    timerInterval = setInterval(() => {
        remainingSeconds--;
        timerDisplay.textContent = formatTime(remainingSeconds);

        if (remainingSeconds <= 0) {
            stopTimer();
            showStatus('Temps écoulé !', 'finished');
            playBeep();
        }
    }, 1000);
}

// Fonction pour mettre en pause
function pauseTimer() {
    if (!isRunning) {
        return;
    }

    clearInterval(timerInterval);
    isRunning = false;
    isPaused = true;

    startBtn.disabled = false;
    pauseBtn.disabled = true;
    startBtn.textContent = 'Reprendre';

    showStatus('Minuteur en pause', 'paused');
}

// Fonction pour arrêter le minuteur
function stopTimer() {
    clearInterval(timerInterval);
    isRunning = false;
    isPaused = false;
}

// Fonction pour réinitialiser
function resetTimer() {
    stopTimer();

    remainingSeconds = 0;
    timerDisplay.textContent = '00:00:00';

    hoursInput.value = 0;
    minutesInput.value = 0;
    secondsInput.value = 0;

    hoursInput.disabled = false;
    minutesInput.disabled = false;
    secondsInput.disabled = false;

    startBtn.disabled = false;
    pauseBtn.disabled = true;
    startBtn.textContent = 'Démarrer';

    timerStatus.className = 'timer-status';
    timerStatus.textContent = '';
}

// Fonction pour afficher un message de statut
function showStatus(message, type) {
    timerStatus.textContent = message;
    timerStatus.className = `timer-status ${type}`;
}

// Fonction pour jouer un son de notification
function playBeep() {
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

    // Jouer 3 bips
    beep();
    setTimeout(beep, 600);
    setTimeout(beep, 1200);
}

// Event listeners
startBtn.addEventListener('click', startTimer);
pauseBtn.addEventListener('click', pauseTimer);
resetBtn.addEventListener('click', resetTimer);

// Désactiver le bouton pause au démarrage
pauseBtn.disabled = true;
