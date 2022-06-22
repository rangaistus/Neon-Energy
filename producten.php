<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Neon - Producten</title>

    <link rel="stylesheet" href="css/producten.css">
</head>
<body>
<header>
        <a href="#"><img src="images/Neon Logo Klein.png" alt="Neon Logo"></a>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="producten.php" class="actief">Producten</a></li>
                <li><a href="aanbiedingen.php">Aanbiedingen</a></li>
                <li><a href="evenementen.php">Evenementen</a></li>
                <li><a href="faq.php">F.A.Q</a></li>
                <ul class="right">
                    <li><a href="#" id="searchButton"><img src="images/search.png" alt=""></a></li>
                    <ul id="search">
                        <li><input type="text" placeholder="Zoeken.."></li>
                    </ul>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </ul>
        </nav>
    </header>

    <section class="center">
        <article>
            <h1>Welkom naar onze producten pagina.</h1>
            <p>We hebben tot nu toe 4 smaken, maar in de toekomst zal het meer worden!</p>
        </article>
    </section>
    <section class="producten">
        <!-- Slideshow container -->
        <div class="slideshow-container">

        <!-- Full-width images with number and caption text -->
        <div class="mySlides fade" style="text-align:center">
            <div class="numbertext">1 / 4</div>
            <img src="images/Neon Cherry.png" style="width:300px; height:200px;" alt="Neon Energy Cherry">
            <div class="text">Neon Cherry</div>
        </div>

        <div class="mySlides fade" style="text-align:center">
            <div class="numbertext">2 / 4</div>
            <img src="images/Neon Grape.png" style="width:300px; height:200px;" alt="Neon Energy Grape">
            <div class="text">Neon Grape</div>
        </div>

        <div class="mySlides fade" style="text-align:center">
            <div class="numbertext">3 / 4</div>
            <img src="images/Neon Lemon.png" style="width:300px; height:200px;" alt="Neon Energy Lemon">
            <div class="text">Neon Lemon</div>
        </div>

        <div class="mySlides fade" style="text-align:center">
            <div class="numbertext">4 / 4</div>
            <img src="images/Neon Raspberry.png" style="width:300px; height:200px;" alt="Neon Energy Raspberry">
            <div class="text">Neon Raspberry</div>
        </div>

        <!-- Next and previous buttons -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
        <br>

        <!-- The dots/circles -->
        <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
        <span class="dot" onclick="currentSlide(4)"></span>
        </div>
    </section>
    <script src="js/index.js"></script>
</body>
</html>