// SearchBar component

// input aangeven
let search = document.getElementById('search');


// functie aanmaken waarmee de search wordt laten zien
searchButton.addEventListener('click', function() {

    console.log(search.style.display)
    if(search.style.display === "none") {
        document.getElementById('search').style.display = 'block';
    } else {
        document.getElementById('search').style.display = 'none';
    }

});
/////////////////////////////////////////////////////////////////////////////////

// FAQ JS

// FAQ Class aangeven
var faq = document.getElementsByClassName("faq-page");
var i;
for (i = 0; i < faq.length; i++) {
    faq[i].addEventListener("click", function () {
        /* Wissel tussen het toevoegen en verwijderen van de "active" klasse,
        om de knop te markeren die het paneel bestuurt */
        this.classList.toggle("active");
        /* Schakelen tussen verbergen en weergeven van het active paneel */
        var body = this.nextElementSibling;
        if (body.style.display === "block") {
            body.style.display = "none";
        } else {
            body.style.display = "block";
        }
    });
}