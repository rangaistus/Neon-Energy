// SearchBar component

// input aangeven
let search = document.getElementById('search');


// functie aanmaken waarmee de search wordt laten zien
searchButton.addEventListener('click', function() {
    if(search.style.display === "none") {
        document.getElementById('search').style.display = 'block';
    } else {
        document.getElementById('search').style.display = 'none';
    }

});
/////////////////////////////////////////////////////////////////////////////////

// FAQ JS

// FAQ Class aangeven
let faq = document.getElementsByClassName("faq-page");
let i;
for (i = 0; i < faq.length; i++) {
    faq[i].addEventListener("click", function () {
        /* Wissel tussen het toevoegen en verwijderen van de "active" klasse,
        om de knop te markeren die het paneel bestuurt */
        this.classList.toggle("active");
        /* Schakelen tussen verbergen en weergeven van het active paneel */
        let body = this.nextElementSibling;
        if (body.style.display === "block") {
            body.style.display = "none";
        } else {
            body.style.display = "block";
        }
    });
}

// End of FAQ JS

// Slideshow JS

let slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}
