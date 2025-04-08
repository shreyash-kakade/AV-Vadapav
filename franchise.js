
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
