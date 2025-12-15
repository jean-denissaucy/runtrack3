// Citations de Blade Runner (1982)
const bladeRunnerQuotes = [
    "I've seen things you people wouldn't believe. Attack ships on fire off the shoulder of Orion. I watched C-beams glitter in the dark near the Tannhäuser Gate. All those moments will be lost in time, like tears in rain. Time to die.",
    "It's too bad she won't live! But then again, who does?",
    "I want more life, fucker!",
    "Wake up! Time to die.",
    "All he'd wanted were the same answers the rest of us want. Where did I come from? Where am I going? How long have I got?",
    "Quite an experience to live in fear, isn't it? That's what it is to be a slave.",
    "You've done a man's job, sir!",
    "More human than human is our motto.",
    "I think, Sebastian, therefore I am.",
    "Fiery the angels fell; deep thunder rolled around their shores; burning with the fires of Orc."
];

// Contenu pour la pagination
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

// Gestion du bouton papillon - Afficher la modale
document.addEventListener('DOMContentLoaded', function () {
    const buyButterflyBtn = document.getElementById('buyButterfly');
    const butterflyModal = new bootstrap.Modal(document.getElementById('butterflyModal'));

    if (buyButterflyBtn) {
        buyButterflyBtn.addEventListener('click', function (e) {
            e.preventDefault();
            butterflyModal.show();
        });
    }

    // Gestion du bouton "Rebooter le Monde"
    const rebootWorldBtn = document.getElementById('rebootWorld');
    if (rebootWorldBtn) {
        rebootWorldBtn.addEventListener('click', function () {
            const jumbotron = document.getElementById('jumbotron');
            const randomQuote = bladeRunnerQuotes[Math.floor(Math.random() * bladeRunnerQuotes.length)];

            jumbotron.innerHTML = `
                <h1 class="display-3 fw-bold">Blade Runner</h1>
                <p class="lead mb-3">${randomQuote}</p>
                <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                    <button type="button" class="btn btn-primary btn-lg px-4 gap-3" id="rebootWorld">Rebooter le Monde</button>
                </div>
            `;

            // Re-attacher l'événement au nouveau bouton
            document.getElementById('rebootWorld').addEventListener('click', arguments.callee);
        });
    }

    // Gestion de la pagination
    const pageLinks = document.querySelectorAll('.page-link');
    pageLinks.forEach(link => {
        link.addEventListener('click', function (e) {
            e.preventDefault();
            const pageNum = this.getAttribute('data-page');
            const content = paginationContent[pageNum];

            if (content) {
                const jumbotron = document.getElementById('jumbotron');
                jumbotron.innerHTML = `
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
});