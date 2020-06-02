window.addEventListener("load", function () {
    let body = document.getElementById('body');
    if (body) {
        let max = body.maxLength = 255;
        let dropZone = document.getElementById('drop-zone');
        let paragraph = document.createElement("p");
        paragraph.classList.add("text-blue-500", "text-sm");
        let lineBreak = document.getElementById('line-break');
        dropZone.insertBefore(paragraph, lineBreak);
        let num = 0;
        let sum = 0;
        body.addEventListener("keyup", function () {
            num = body.value.length;
            sum = max - num;
            paragraph.innerHTML = "Remaining characters: " + sum;
        })
    }
});
