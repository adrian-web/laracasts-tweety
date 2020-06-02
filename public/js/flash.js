window.addEventListener("load", function () {
    let flash = document.getElementById("flash");
    if (flash) {
        flash.addEventListener("click", function () {
            flash.remove();
        })
    }
});