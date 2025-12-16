// Citations de Blade Runner (1982)
const bladeRunnerQuotes = [
    "J'ai vu des choses que vous, humains, ne pourriez pas croire. Des vaisseaux d'attaque en feu au large de l'épaule d'Orion. J'ai vu des rayons C briller dans l'obscurité près de la Porte de Tannhäuser. Tous ces moments se perdront dans le temps, comme les larmes dans la pluie. Il est temps de mourir.",
    "C'est dommage qu'elle ne vivra pas ! Mais après tout, qui vit ?",
    "Je veux plus de vie, enfoiré !",
    "Réveille-toi ! Il est temps de mourir.",
    "Tout ce qu'il voulait, c'était les mêmes réponses que nous voulons tous. D'où viens-je ? Où vais-je ? Combien de temps me reste-t-il ?",
    "Quelle expérience de vivre dans la peur, n'est-ce pas ? C'est ça, être un esclave.",
    "Vous avez fait le travail d'un homme, monsieur !",
    "Plus humain que l'humain, c'est notre devise.",
    "Je pense, Sebastian, donc je suis.",
    "De feu tombèrent les anges ; un profond tonnerre roula autour de leurs rivages ; brûlant des feux d'Orc."
];

//pagination
const paginationContent = {
    1: {
        title: "L'univers du développement web",
        text: "Explorez les merveilles du HTML, CSS et JavaScript. Créez des expériences web exceptionnelles et donnez vie à vos idées les plus créatives."
    },
    2: {
        title: "Innovation et technologie",
        text: "La technologie évolue chaque jour. Restez à la pointe de l'innovation et maîtrisez les outils qui façonnent l'avenir du numérique."
    },
    3: {
        title: "L'apprentissage continu",
        text: "Le code est un voyage sans fin. Chaque ligne écrite est une nouvelle leçon apprise. Continuez à explorer, à créer et à grandir."
    }
};

// Gestion papillon
document.addEventListener('DOMContentLoaded', function () {
    const buyButterflyBtn = document.getElementById('buyButterfly');
    const butterflyModal = new bootstrap.Modal(document.getElementById('butterflyModal'));

    if (buyButterflyBtn) {
        buyButterflyBtn.addEventListener('click', function (e) {
            e.preventDefault();
            butterflyModal.show();
        });
    }

    // Gestion du bouton
    const rebootWorldBtn = document.getElementById('rebootWorld');
    if (rebootWorldBtn) {
        rebootWorldBtn.addEventListener('click', function () {
            const jumbotron = document.getElementById('jumbotron');
            const randomQuote = bladeRunnerQuotes[Math.floor(Math.random() * bladeRunnerQuotes.length)];

            jumbotron.innerHTML = `
                <div class="d-flex justify-content-center mb-3">
                    <div class="earth-spinner" id="mainSpinner">
                        <div class="earth">🌍</div>
                    </div>
                </div>
                <h1 class="display-3 fw-bold">Blade Runner</h1>
                <p class="lead mb-3">${randomQuote}</p>
                <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                    <button type="button" class="btn btn-primary btn-lg px-4 gap-3" id="rebootWorld">Rebooter le Monde</button>
                </div>
            `;

            // Re-attacher
            document.getElementById('rebootWorld').addEventListener('click', arguments.callee);
        });
    }

    //pagination
    const pageLinks = document.querySelectorAll('.page-link');
    pageLinks.forEach(link => {
        link.addEventListener('click', function (e) {
            e.preventDefault();
            const pageNum = this.getAttribute('data-page');
            const content = paginationContent[pageNum];

            if (content) {
                const jumbotron = document.getElementById('jumbotron');
                jumbotron.innerHTML = `
                    <div class="d-flex justify-content-center mb-3">
                        <div class="earth-spinner" id="mainSpinner">
                            <div class="earth">🌍</div>
                        </div>
                    </div>
                    <h1 class="display-3 fw-bold">${content.title}</h1>
                    <p class="lead mb-3">${content.text}</p>
                    <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                        <button type="button" class="btn btn-primary btn-lg px-4 gap-3" id="rebootWorld">Rebooter le Monde</button>
                    </div>
                `;

                // Re-attacher l'événement au nouveau bouton
                const newRebootBtn = document.getElementById('rebootWorld');
                if (newRebootBtn) {
                    newRebootBtn.addEventListener('click', function () {
                        const jumbotron = document.getElementById('jumbotron');
                        const randomQuote = bladeRunnerQuotes[Math.floor(Math.random() * bladeRunnerQuotes.length)];

                        jumbotron.innerHTML = `
                            <div class="d-flex justify-content-center mb-3">
                                <div class="earth-spinner" id="mainSpinner">
                                    <div class="earth">🌍</div>
                                </div>
                            </div>
                            <h1 class="display-3 fw-bold">Blade Runner</h1>
                            <p class="lead mb-3">${randomQuote}</p>
                            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                                <button type="button" class="btn btn-primary btn-lg px-4 gap-3" id="rebootWorld">Rebooter le Monde</button>
                            </div>
                        `;

                        document.getElementById('rebootWorld').addEventListener('click', arguments.callee);
                    });
                }

                // Mettre à jour les classes active de la pagination
                pageLinks.forEach(l => l.parentElement.classList.remove('active'));
                this.parentElement.classList.add('active');
            }
        });
    });

    // Gestion du clic sur les éléments de la liste groupée
    const listItems = document.querySelectorAll('.list-group-item');
    listItems.forEach(item => {
        item.addEventListener('click', function () {
            // Retirer la classe active de tous les éléments
            listItems.forEach(i => i.classList.remove('active'));
            // Ajouter la classe active à l'élément cliqué
            this.classList.add('active');
        });
    });

    // Gestion de la progress bar
    let progressValue = 0;
    const progressBar = document.getElementById('mainProgressBar');
    const increaseBtn = document.getElementById('increaseProgress');
    const decreaseBtn = document.getElementById('decreaseProgress');

    if (increaseBtn) {
        increaseBtn.addEventListener('click', function () {
            if (progressValue < 100) {
                progressValue += 10;
                updateProgressBar();
            }
        });
    }

    if (decreaseBtn) {
        decreaseBtn.addEventListener('click', function () {
            if (progressValue > 0) {
                progressValue -= 10;
                updateProgressBar();
            }
        });
    }

    function updateProgressBar() {
        if (progressBar) {
            progressBar.style.width = progressValue + '%';
            progressBar.setAttribute('aria-valuenow', progressValue);
            progressBar.textContent = progressValue + '%';
        }
    }

    // Détection de la séquence de touches D, G, C
    let keySequence = [];
    const targetSequence = ['d', 'g', 'c'];
    const formInfoModal = new bootstrap.Modal(document.getElementById('formInfoModal'));

    document.addEventListener('keydown', function (e) {
        const key = e.key.toLowerCase();
        keySequence.push(key);

        // Garder seulement les 3 dernières touches
        if (keySequence.length > 3) {
            keySequence.shift();
        }

        // Vérifier si la séquence correspond
        if (keySequence.length === 3 &&
            keySequence[0] === targetSequence[0] &&
            keySequence[1] === targetSequence[1] &&
            keySequence[2] === targetSequence[2]) {

            // Récupérer les informations du formulaire
            const email = document.getElementById('exampleFormControlInput1').value;
            const password = document.getElementById('inputPassword6').value;

            // Afficher dans la modale
            const formInfoContent = document.getElementById('formInfoContent');
            formInfoContent.innerHTML = `
                <p><strong>Email:</strong> ${email || '(vide)'}</p>
                <p><strong>Mot de passe:</strong> ${password ? '••••••••' : '(vide)'}</p>
            `;

            formInfoModal.show();

            // Réinitialiser la séquence
            keySequence = [];
        }
    });

    // Validation du formulaire pour changer la couleur du spinner
    const submitFormBtn = document.getElementById('submitForm');
    const earthEmojis = ['🌍', '🌎', '🌏', '🔴', '🟠', '🟡', '🟢', '🔵', '🟣', '🟤'];

    if (submitFormBtn) {
        submitFormBtn.addEventListener('click', function () {
            const email = document.getElementById('exampleFormControlInput1').value;
            const password = document.getElementById('inputPassword6').value;

            // Vérifier que l'email et le mot de passe ne sont pas vides
            if (email && password) {
                const spinner = document.getElementById('mainSpinner');

                if (spinner) {
                    const earthElement = spinner.querySelector('.earth');
                    if (earthElement) {
                        // Changer aléatoirement l'emoji
                        const randomEmoji = earthEmojis[Math.floor(Math.random() * earthEmojis.length)];
                        earthElement.textContent = randomEmoji;
                    }
                }
            }
        });
    }
});