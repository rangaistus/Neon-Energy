<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/aanbiedingen-details.css">

    <title>Neon - Aanbiedingen Details</title>
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
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </ul>
        </nav>
    </header>

    <main>
    <?php

require('database/dbconnect.php');

$sql = "SELECT * FROM aanbiedingen WHERE aanbiedingen_id =".$_GET['id'];

if($result = $conn->query($sql)){
   $row = $result-> fetch_row();
        echo "<section class='aanbiedingen'>
        <h2>Titel</h2>
        <div class='omschrijving'>".$row[1]. "</div>
        <div class='datum'>" .$row[2]."</div>
        <div class='omschrijving'>" .$row[4]."</div>
        <div class='link-aanbiedingen'><a href='aanbiedingen.php?id=".$row[0]."'>Terug naar Pagina</a></div>
        </section>";
    } else {
        echo "query werkt niet";
    }
    ?>
    </main>
</body>
</html>