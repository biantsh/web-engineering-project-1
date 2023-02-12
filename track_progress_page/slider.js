var photo = document.querySelector("img");

function showPhoto(photoIdx) {
    photo.style.marginLeft = "-" + photoIdx * 25 + "%";
}
