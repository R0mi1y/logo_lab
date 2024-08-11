const button = document.querySelector('.button');
const containerLeft = document.querySelector('.container-left');
const containerRight = document.querySelector('.container-right');
const img = document.getElementsByClassName('img');

button.addEventListener('click', change2);

function change2() {
    containerLeft.classList.toggle("priority");
    containerRight.classList.toggle("priority");

    img[0].classList.toggle('hidden');
    img[1].classList.toggle('hidden');

    containerLeft.classList.toggle('hide-container');
    containerRight.classList.toggle('hide-container');

    if (button.innerHTML == "Artista?") {
        button.innerHTML = "Requisitor?";
    } else {
        button.innerHTML = "Artista?";
    }
}

function sleep(milliseconds) {
    return new Promise(resolve => setTimeout(resolve, milliseconds))
}