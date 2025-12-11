async function button() {
    const button = document.getElementById("filtrer");

    if (!button) {
        console.error('Le bouton avec l\'id "filtrer" n\'existe pas');
        return;
    }

    button.addEventListener("click", async () => {
        try {
            const response = await fetch('pokemon.json');
            const data = await response.json();

            //données
            console.log(data);

            //affichage
            const container = document.getElementById("results");
            container.innerHTML = `<pre>${JSON.stringify(data, null, 2)}</pre>`;
        } catch (error) {
            console.error('Erreur lors du chargement du fichier:', error);
        }
    });
}

//chargé
document.addEventListener('DOMContentLoaded', button);