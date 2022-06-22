<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/evenementen-details.css">

    <title>Neon - Evenementen Details</title>
</head>
<body>
<header>
        <a href="#"><img src="images/Neon Logo Klein.png" alt="Neon Logo"></a>
        <nav>
            <ul>
                <li><a href="index.php" class="active">Home</a></li>
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


$sql = "SELECT *, DATE_FORMAT(evenementen.datum, '%m %d %Y') as dag FROM evenementen
LEFT JOIN locaties 
ON evenementen.locatie_id = locaties.locatie_id 
LEFT JOIN artiesten 
ON evenementen.artiest_id = artiesten.artiest_id WHERE evenementen.evenement_id = ".$_GET['id'];


if($result = $conn->query($sql)){
    $row = $result-> fetch_row();
    echo "<section class='evenement_detail'>
    <div class='datum'>".$row[18]."</div>
    <div class='locatie'>" .$row[11]."</div>
    <div class='locatie'>" .$row[15]."</div>
    <div class='locatie'>" .$row[1]."</div>
    <div class='locatie'>" .$row[4]."</div>
    <div class='locatie'>" .$row[6]."</div>
    <div class='locatie'>" .$row[7]."</div>
    </section>";
} else {
    echo "query werkt niet";
}
?>

    </main>
</body>
</html>