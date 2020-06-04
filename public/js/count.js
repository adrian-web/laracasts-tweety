window.addEventListener("load", function () {
    let body = document.getElementById('body');
    if (body) {
        let max = body.maxLength = 255;
        let dropZone = document.getElementById('drop-zone');
        let paragraph = document.createElement("p");
        paragraph.classList.add("text-sm");
        let lineBreak = document.getElementById('line-break');
        dropZone.insertBefore(paragraph, lineBreak);
        let num = 0;
        let sum = 0;
        body.addEventListener("keyup", function () {
            num = body.value.length;
            sum = max - num;
            if (sum >= 0) {
                paragraph.classList.remove("text-red-500");
                paragraph.classList.add("text-blue-500");
                paragraph.innerHTML = "Remaining characters: " + sum;
            } else {
                paragraph.classList.remove("text-blue-500");
                paragraph.classList.add("text-red-500");
                paragraph.innerHTML = "Characters over the limit: " + Math.abs(sum) + "!";
            }

        })
    }
});
