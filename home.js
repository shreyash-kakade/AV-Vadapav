
// slider
let slideIndex = 1;
showSlides(slideIndex);

function nextimg(n) {
    showSlides(slideIndex += n);
}

function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
    let i;
    const slides = document.querySelectorAll(".slides .image");
    const dots = document.querySelectorAll(".dot");

    if (n > slides.length) {
        slideIndex = 1
    }

    if (n < 1) {
        slideIndex = slides.length
    }

    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }

    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }

    slides[slideIndex - 1].style.display = "flex";
    dots[slideIndex - 1].className += " active";
}

// Auto slide every 5 seconds
setInterval(() => {
    nextimg(1);
}, 5000);


// navbar
const menuIcon = document.querySelector(".menu-icon");
const closeIcon = document.querySelector(".close-icon");
const navbar = document.querySelector(".navbar");


//Toggle navbar on hamburger click
menuIcon.addEventListener("click", () => {
    navbar.classList.toggle("active");
});                           


// Also close navbar when ✕ icon is clicked
closeIcon.addEventListener("click", () => {
    navbar.classList.remove("active");
});
