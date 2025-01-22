let slideIndex = 0;
showSlides(); // Initial call to show the first slide

function showSlides(n) {
    let slides = document.getElementsByClassName("mySlides");
    if (n === undefined) {
        n = ++slideIndex; // If no argument is passed, increment the slideIndex
    } else {
        slideIndex += n; // Update slideIndex by the given parameter
    }

    if (slideIndex > slides.length) {
        slideIndex = 1; // Loop back to the first slide
    }
    if (slideIndex < 1) {
        slideIndex = slides.length; // Loop back to the last slide
    }

    for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = "none"; // Hide all slides
    }
    slides[slideIndex - 1].style.display = "block"; // Show the current slide
}

// Change slide every 10 seconds
setInterval(() => showSlides(), 10000);

function plusSlides(n) {
    showSlides(n); // Call showSlides with the provided argument
}



function toggleMenu() {
    const mobileMenu = document.querySelector('.mobile-menu');
    mobileMenu.classList.toggle('active');
}