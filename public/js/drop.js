function dropHandler(ev) {
    ev.preventDefault();

    let dt = new DataTransfer();
    let tweetyImage = document.getElementById("image");

    for (let i = 0; i < ev.dataTransfer.files.length; i++) {
        console.log('... file[' + i + '].name = ' + ev.dataTransfer.files[i].name);

        dt.items.add(ev.dataTransfer.files[i]);
    }

    tweetyImage.files = dt.files;
    tweetyImage.hidden = false;
}

function dragOverHandler(ev) {
    ev.preventDefault();
}