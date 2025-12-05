function afficherPrenom() {
    // Récupérer la valeur de l'input
    let prenom = document.getElementById('prenom').value;

    // Afficher dans un paragraphe
    let resultat = document.getElementById('resultat');
    resultat.textContent = 'Bonjour ' + prenom + ' !';

    // Changer la couleur
    resultat.style.color = '#bb3f3fff';
    resultat.style.fontSize = '1.5em';
}