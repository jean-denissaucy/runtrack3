// Afficher un message d'erreur
function afficherErreur(champId, message) {
    document.getElementById(champId + '-error').textContent = message;
    document.getElementById(champId + '-error').classList.add('show');
}

// Effacer un message d'erreur
function effacerErreur(champId) {
    document.getElementById(champId + '-error').textContent = '';
    document.getElementById(champId + '-error').classList.remove('show');
}

// Mettre à jour la barre de force du mot de passe
function updatePasswordStrength(password) {
    const bar = document.getElementById('password-strength-bar');
    const text = document.getElementById('password-strength-text');

    if (!bar || !text) return;

    // Calculer la force
    let force = 0;
    if (password.length >= 8) force++;
    if (password.length >= 12) force++;
    if (/[a-z]/.test(password)) force++;
    if (/[A-Z]/.test(password)) force++;
    if (/[0-9]/.test(password)) force++;
    if (/[^a-zA-Z0-9]/.test(password)) force++;

    // Réinitialiser les classes
    bar.classList.remove('weak', 'medium', 'strong');

    // Appliquer la classe selon la force
    if (password.length === 0) {
        text.textContent = '';
    } else if (force >= 5) {
        bar.classList.add('strong');
        text.textContent = 'Fort';
    } else if (force >= 3) {
        bar.classList.add('medium');
        text.textContent = 'Moyen';
    } else {
        bar.classList.add('weak');
        text.textContent = 'Faible';
    }
}

// Valider l'inscription
function validerInscription(e) {
    e.preventDefault();

    // Effacer toutes les erreurs
    effacerErreur('nom');
    effacerErreur('prenom');
    effacerErreur('email');
    effacerErreur('password');
    effacerErreur('confirmPassword');
    effacerErreur('adresse');
    effacerErreur('codePostal');

    let valide = true;

    // Récupérer les valeurs
    const nom = document.getElementById('nom').value.trim();
    const prenom = document.getElementById('prenom').value.trim();
    const email = document.getElementById('email').value.trim();
    const password = document.getElementById('password').value;
    const confirmPassword = document.getElementById('confirmPassword').value;
    const adresse = document.getElementById('adresse').value.trim();
    const codePostal = document.getElementById('codePostal').value.trim();

    // Vérifier le nom
    if (nom.length < 2) {
        afficherErreur('nom', 'Le nom doit contenir au moins 2 caractères');
        valide = false;
    }

    // Vérifier le prénom
    if (prenom.length < 2) {
        afficherErreur('prenom', 'Le prénom doit contenir au moins 2 caractères');
        valide = false;
    }

    // Vérifier l'email
    if (!email.includes('@') || !email.includes('.')) {
        afficherErreur('email', 'Email invalide');
        valide = false;
    }

    // Vérifier le mot de passe
    if (password.length < 8) {
        afficherErreur('password', 'Minimum 8 caractères');
        valide = false;
    }

    // Vérifier confirmation mot de passe
    if (password !== confirmPassword) {
        afficherErreur('confirmPassword', 'Les mots de passe ne correspondent pas');
        valide = false;
    }

    // Vérifier l'adresse
    if (adresse.length < 5) {
        afficherErreur('adresse', 'Adresse trop courte');
        valide = false;
    }

    // Vérifier le code postal
    if (!/^[0-9]{5}$/.test(codePostal)) {
        afficherErreur('codePostal', '5 chiffres requis');
        valide = false;
    }

    if (valide) {
        alert('Inscription réussie !');
    }
}

// Valider la connexion
function validerConnexion(e) {
    e.preventDefault();

    // Effacer les erreurs
    effacerErreur('email');
    effacerErreur('password');

    let valide = true;

    // Récupérer les valeurs
    const email = document.getElementById('email').value.trim();
    const password = document.getElementById('password').value;

    // Vérifier l'email
    if (!email.includes('@') || !email.includes('.')) {
        afficherErreur('email', 'Email invalide');
        valide = false;
    }

    // Vérifier le mot de passe
    if (password.length < 8) {
        afficherErreur('password', 'Minimum 8 caractères');
        valide = false;
    }

    if (valide) {
        alert('Connexion réussie !');
    }
}

// Attacher les événements
document.addEventListener('DOMContentLoaded', function () {
    const inscriptionForm = document.getElementById('inscriptionForm');
    const loginForm = document.getElementById('loginForm');

    if (inscriptionForm) {
        inscriptionForm.addEventListener('submit', validerInscription);

        // Ajouter l'événement pour la barre de force du mot de passe
        const passwordField = document.getElementById('password');
        if (passwordField) {
            passwordField.addEventListener('input', function () {
                updatePasswordStrength(this.value);
            });
        }
    }

    if (loginForm) {
        loginForm.addEventListener('submit', validerConnexion);
    }
});