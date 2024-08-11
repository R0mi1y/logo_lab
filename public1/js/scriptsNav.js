const navbar = document.getElementById("navNav");
let prevScrollpos = window.pageYOffset;
const btnNav = document.getElementById("expandBar");

btnNav.addEventListener("click", () => {
    if (window.pageYOffset < 100) {
        navbar.classList.toggle("blue");
    }
});

window.onscroll = function () {
    if (prevScrollpos > window.pageYOffset) {
        navbar.classList.remove("hidden");
    } else {
        navbar.classList.add("hidden");
    }
    if (window.pageYOffset > 100) {
        navbar.classList.add("blue");
    } else {
        navbar.classList.remove("blue");
    }
    prevScrollpos = window.pageYOffset;
}
setInterval(mudarElemento, 1000);

function mudarElemento() {
    let services = document.getElementsByClassName("col-md-4 service-box");
    if (services[services.length - 1].classList.contains("blue")) {
        services[0].classList.add("blue");
        services[services.length - 1].classList.remove("blue");
        return;
    }
    for (let i = 0; i < services.length; i++) {
        if (services[i].classList.contains("blue") && i + 1 < services.length) {
            services[i + 1].classList.add("blue");
            services[i].classList.remove("blue");
            break;
        }
    }
}