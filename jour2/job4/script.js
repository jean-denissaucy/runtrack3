document.addEventListener("keydown", function (e) {

    if (/^[a-z]$/i.test(e.key)) {
        const textarea = document.getElementById("keylogger");


        if (document.activeElement === textarea) {
            textarea.value += e.key + e.key; // 2
        } else {
            textarea.value += e.key; // 1
        }
    }
});