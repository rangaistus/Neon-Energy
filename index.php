<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">

    <title>Neon - Home</title>
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

    <section class='center'>
        <article>
            <h1>Welkom op onze website!</h1>
            <h2>Wij zijn <strong><b>NEON</b></strong>.</h2>
        </article>
    </section>

        <?php 
        require ('database/dbconnect.php');
        
        echo "<h1 class='aanbiedingen'>Huidige aanbiedingen</h1>";
        
        $sql = "SELECT titel, omschrijving FROM aanbiedingen LIMIT 3 OFFSET 4";
        
        if($result = $conn->query($sql)) {
            while($row = $result->fetch_row()) {
                echo "<section class='aanbiedingen'><h2>".$row[0]."</h2>"."<p>".$row[1]."</p>"."</section>";
            }
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        echo "<a href='aanbiedingen.php' class='details'>Meer details</a>"
        ?>

        <?php 
        require ('database/dbconnect.php');
        echo "<section class='aankomende-events'>";
        echo "<h1 class='aankomende-events'>Aankomende Events</h1>";

        $sql = "SELECT evenementen.datum, locaties.gebouw FROM evenementen LEFT JOIN locaties ON evenementen.locatie_id = locaties.locatie_id LIMIT 3";
       
        if($result = $conn->query($sql)){
            
            while ($row = $result-> fetch_row()){
             echo "<section><p>$row[0]".' '."$row[1]</p></section>";
            } 
            echo "<a href='evenementen.php' class='details'>Meer details</a>";
            echo "</section>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        
        ?>


    

    <script src="js/index.js"></script>
</body>
</html>