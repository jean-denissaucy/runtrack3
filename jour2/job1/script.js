function citation() {
    const citationElement = document.getElementById("citation");
    const contenu = citationElement.textContent;
    console.log(contenu);

}

const button = document.getElementById("button");
console.log(button);

if (button) {
    button.addEventListener("click", citation);
}