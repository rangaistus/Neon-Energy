<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/style.css">

    <title>Home - Neon</title>
</head>
<body>
    <header>
        <a href="#"><img src="images/Neon Logo Klein.png" alt="Neon Logo"></a>
        <nav>
            <ul>
                <li><a href="index.php" class="active">Home</a></li>
                <li><a href="">Product</a></li>
                <li><a href="#">Solutions</a></li>
                <li><a href="evenementen.php">Evenementen</a></li>
                <li><a href="#">Support</a></li>
                <ul class="right">
                    <li><a href="#" id="searchButton"><img src="images/search.png" alt=""></a></li>
                    <ul id="search">
                        <li><input type="text" placeholder="Zoeken.."></li>
                    </ul>
                    <li><a href="#">Contact</a></li>
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

        echo "<h1>Huidige aanbiedingen</h1>";

        $sql = "SELECET titel, omschrijving FROM aanbiedingen LIMIT 3 OFFSET 4";

        if($result = $conn->query($sql)) {
            while($row = $result->fetch_row()) {
                echo "<h2>".$row[0]."</h2>";
                echo "<p>".$row[1]."</p>";
            }
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }


    ?>

    <script src="js/index.js"></script>
</body>
</html>