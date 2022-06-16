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

