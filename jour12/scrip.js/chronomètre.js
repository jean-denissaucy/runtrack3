// Variables globales
let startTime = 0;
let elapsedTime = 0;
let timerInterval = null;
let isRunning = false;
let lapCounter = 1;

// Éléments du DOM
const stopwatchDisplay = document.getElementById('stopwatchDisplay');
const startStopBtn = document.getElementById('startStopBtn');
const lapBtn = document.getElementById('lapBtn');
const resetBtn = document.getElementById('resetBtn');
const lapsContainer = document.getElementById('lapsContainer');
const lapsList = document.getElementById('lapsList');

// Fonction pour formater le temps
function formatTime(ms) {
    const totalSeconds = Math.floor(ms / 1000);
    const hours = Math.floor(totalSeconds / 3600);
    const minutes = Math.floor((totalSeconds % 3600) / 60);
    const seconds = totalSeconds % 60;
    const centiseconds = Math.floor((ms % 1000) / 10);

    return `${String(hours).padStart(2, '0')}:${String(minutes).padStart(2, '0')}:${String(seconds).padStart(2, '0')}.${String(centiseconds).padStart(2, '0')}`;
}

// Fonction pour mettre à jour l'affichage
function updateDisplay() {
    const currentTime = Date.now();
    elapsedTime = currentTime - startTime;
    stopwatchDisplay.textContent = formatTime(elapsedTime);
}

// Fonction pour démarrer/arrêter le chronomètre
function toggleStartStop() {
    if (!isRunning) {

        // Démarrer
        startTime = Date.now() - elapsedTime;
        timerInterval = setInterval(updateDisplay, 10);
        isRunning = true;
        startStopBtn.textContent = 'Arrêter';
        startStopBtn.classList.remove('btn-start-stop');
        startStopBtn.classList.add('btn-stop');
        lapBtn.disabled = false;
    } else {

        // Arrêter
        clearInterval(timerInterval);
        isRunning = false;
        startStopBtn.textContent = 'Reprendre';
        startStopBtn.classList.remove('btn-stop');
        startStopBtn.classList.add('btn-start-stop');
    }
}

// Fonction pour enregistrer un tour
function recordLap() {
    if (!isRunning) return;

    const lapTime = elapsedTime;
    const lapItem = document.createElement('div');
    lapItem.className = 'lap-item';
    lapItem.innerHTML = `
        <span class="lap-number">Tour ${lapCounter}</span>
        <span class="lap-time">${formatTime(lapTime)}</span>
    `;

    // Insérer au début de la liste
    if (lapsList.firstChild) {
        lapsList.insertBefore(lapItem, lapsList.firstChild);
    } else {
        lapsList.appendChild(lapItem);
    }

    lapCounter++;
    lapsContainer.style.display = 'block';
}

// Fonction pour réinitialiser
function reset() {
    clearInterval(timerInterval);
    isRunning = false;
    startTime = 0;
    elapsedTime = 0;
    lapCounter = 1;

    stopwatchDisplay.textContent = '00:00:00.00';
    startStopBtn.textContent = 'Démarrer';
    startStopBtn.classList.remove('btn-stop');
    startStopBtn.classList.add('btn-start-stop');
    lapBtn.disabled = true;

    // Effacer les tours
    lapsList.innerHTML = '';
    lapsContainer.style.display = 'none';
}

// Event listeners
startStopBtn.addEventListener('click', toggleStartStop);
lapBtn.addEventListener('click', recordLap);
resetBtn.addEventListener('click', reset);

// Masquer le conteneur de tours au démarrage
lapsContainer.style.display = 'none';
