<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/aanbiedingen.css">

    <title>Neon - Aanbiedingen</title>
</head>
<body>
    <header>
        <a href="#"><img src="images/Neon Logo Klein.png" alt="Neon Logo"></a>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="producten.php">Producten</a></li>
                <li><a href="aanbiedingen.php" class="actief">Aanbiedingen</a></li>
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

    <section>
        <?php
            require('database/dbconnect.php');
            $sql = "SELECT * FROM aanbiedingen";
            if($result = $conn->query($sql)){
            while ($row = $result-> fetch_array()){
                $image = $row['afbeelding'];
        ?>
            <a href='aanbiedingen-detail.php?id=<?php echo $row['aanbiedingen_id'];?>'><img src="aanbiedingen/<?php echo $image; ?>"  /></a>;
        <?php
            }
            } else {
                echo "query werkt niet";
            }
        ?>
    </section>
</body>
<script src="js/index.js"></script>
</html>