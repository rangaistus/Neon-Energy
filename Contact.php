<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/contact.css">

    <title>Neon - Contact</title>
</head>
<body>
<header>
        <a href="#"><img src="images/Neon Logo Klein.png" alt="Neon Logo"></a>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="producten.php">Producten</a></li>
                <li><a href="aanbiedingen.php">Aanbiedingen</a></li>
                <li><a href="evenementen.php">Evenementen</a></li>
                <li><a href="faq.php">F.A.Q</a></li>
                <ul class="right">
                    <li><a href="#" id="searchButton"><img src="images/search.png" alt=""></a></li>
                    <ul id="search">
                        <li><input type="text" placeholder="Zoeken.."></li>
                    </ul>
                    <li><a href="Contact.php" class="actief">Contact</a></li>
                </ul>
            </ul>
        </nav>
    </header>
    
    <section class='center'>
        <article>
            <h1>Contact</h1>
            <form action="contact.php" method="post">
                <label for="name">Naam</label><br>
                <input type="text" name="name" id="name" placeholder="Naam" require> <br>
                <label for="email">E-mail</label><br>
                <input type="email" name="email" id="email" placeholder="Email" require> <br>
                <label for="message">Bericht</label><br>
                <textarea name="message" id="message" cols="30" rows="5" placeholder="Bericht" require></textarea> <br>
                <input type="submit" name="submit" value="Verzenden">
<?php
if(isset($_POST['submit'])){
    header("Location: index.php");
    }
?>
            </form>
        </article>
    </section>
</body>
<script src="js/index.js"></script>
</html>