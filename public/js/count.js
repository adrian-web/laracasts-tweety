window.onload = function () {
    let body = document.getElementById('body');
    let max = body.maxLength = 255;
    let par = document.createElement("p");
    let dropZone = document.getElementById('drop-zone');
    dropZone.insertBefore(par, document.getElementById('par-body'));
    let num;
    body.addEventListener("keyup", function () {
        num = body.value.length;
        par.innerHTML = max - num;
    })
};

