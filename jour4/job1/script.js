const button = document.getElementById("button");

// clic
button.addEventListener("click", () => {
    // fetch récupére
    fetch('expression.txt')
        .then(response => {
            if (!response.ok) {
                throw new Error("Erreur lors de la récupération du fichier");
            }
            return response.text();
        })
        .then(text => {
            //paragraphe 
            const p = document.createElement('p');
            p.textContent = text;

            //le container
            const container = document.getElementById('expression-container');
            container.appendChild(p);
        })
        .catch(error => {
            console.error("Erreur:", error);
        });
});