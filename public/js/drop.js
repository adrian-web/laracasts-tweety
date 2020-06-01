function dropHandler(ev) {
    console.log('File(s) dropped');

    // Prevent default behavior (Prevent file from being opened)
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
    console.log('File(s) in drop zone');

    // Prevent default behavior (Prevent file from being opened)
    ev.preventDefault();
}