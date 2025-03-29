let currentSlide = 0;
const slides = document.querySelectorAll('.carousel-slide');

function showSlide(index) {
    if (index >= slides.length) {
        currentSlide = 0;
    } else if (index < 0) {
        currentSlide = slides.length - 1;
    } else {
        currentSlide = index;
    }
    const offset = -currentSlide * 100;
    document.querySelector('.carousel-slides').style.transform = `translateX(${offset}%)`;
}

function changeSlide(direction) {
    showSlide(currentSlide + direction);
}

// Optional: Auto-play functionality
setInterval(() => {
    changeSlide(1);
}, 3000); // Change slide every 3 seconds

// freedom hand image slide
function slideInOnScroll() {
    let img = document.querySelector(".slide-image");
    let imgPosition = img.getBoundingClientRect().top;
    let screenHeight = window.innerHeight;

    if (imgPosition < screenHeight - 50) {
        img.classList.add("show");
    }
}

window.addEventListener("scroll", slideInOnScroll);