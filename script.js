let slideIndex = 0;
showSlides();

function showSlides() {
    let slides = document.getElementsByClassName("mySlides");
    for (let i = 0; i < slides.length; i++) {
        slides[i].classList.remove("active");
    }
    slideIndex++;
    if (slideIndex > slides.length) { slideIndex = 1 }
    slides[slideIndex - 1].classList.add("active");
    setTimeout(showSlides, 5000);
}

document.addEventListener('DOMContentLoaded', function() {
    const toggleButton = document.getElementById('toggleButton');
    const courseTable = document.getElementById('courseTable');

    toggleButton.addEventListener('click', function() {
        if (courseTable.style.display === 'none') {
            courseTable.style.display = 'block';
        } else {
            courseTable.style.display = 'none';
        }
    });
});