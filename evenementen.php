<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Neon - Evenementen</title>

    <link rel="stylesheet" href="css/evenementen.css">
</head>
<body>  
<header>
        <a href="#"><img src="images/Neon Logo Klein.png" alt="Neon Logo"></a>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="producten.php">Producten</a></li>
                <li><a href="aanbiedingen.php">Aanbiedingen</a></li>
                <li><a href="evenementen.php" class="active">Evenementen</a></li>
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
        <h1>Evenementen details met datum.</h1>
        <p>Als u de datum wilt weten moet u wel onthouden dat je eerst naar Maand moet kijken daarna naar Dag en daarna naar Jaar.</p>
        <ul>
            <?php
        require('database/dbconnect.php');
        
        $sql = "SELECT *, DATE_FORMAT(evenementen.datum, '%m %d %Y') as dag FROM evenementen
        LEFT JOIN locaties 
        ON evenementen.locatie_id = locaties.locatie_id 
        LEFT JOIN artiesten 
        ON evenementen.artiest_id = artiesten.artiest_id";
        
        if($result = $conn->query($sql)){
        while ($row = $result-> fetch_row()){
            echo "<li class='evenementen'><div class='datum'>".$row[18]. "</div><div class='locatie'>".'&nbsp;'.$row[7]."</div><div class='link'><a href='evenementen-details.php?id=".$row[0]."'>meer info</a></div></li>";
        } 
        } else {
            echo "query werkt niet";
        }
        ?>
        </ul>
    </section>


<script src="js/index.js"></script>
</body>
</html>