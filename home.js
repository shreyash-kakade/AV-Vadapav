// var imageno =1;
// displayimg(imageno);

// function nextimg(n){
//     displayimg(imageno += n)
// }

// function currentSlide(n){
//     displayimg(imageno = n)
// }

// function displayimg(n){
//     var i;
//     var image = document.querySelectorAll(".slides .image");
//     var dots = document.querySelectorAll(".dot");

//     if(n > image.length){
//         imageno = 1;
//     }

//     if(n < 1){
//         imageno = image.length;
//     }

//     for(i=0 ; i < image.length ; i++){
//         image[i].style.display = "none";
//     }

//     for(i=0 ; i < image.length ; i++){
//         dots[i].className = dots[i].className.replace(" active", "");
//     }

//     image[imageno - 1].style.display = "block";
//     dots[imageno - 1].className += " active";

// }


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
