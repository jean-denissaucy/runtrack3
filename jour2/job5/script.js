const footer = document.querySelector('footer');

window.addEventListener('scroll', () => {
    // Calcul
    const scrollTop = window.scrollY;
    const docHeight = document.body.scrollHeight - window.innerHeight;
    const scrollPercent = (scrollTop / docHeight) * 100;

    // Conversion 
    const red = Math.max(0, 255 - (scrollPercent * 2.55));
    const green = Math.min(255, scrollPercent * 2.55);

    footer.style.backgroundColor = `rgb(${red}, ${green}, 0)`;
});