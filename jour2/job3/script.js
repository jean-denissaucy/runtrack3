function addone() {
    const compteur = document.getElementById("compteur");
    compteur.textContent = parseInt(compteur.textContent) + 1;
}

document.getElementById("button").addEventListener("click", addone);