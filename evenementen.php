<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>evenementen</title>
    <link rel="stylesheet" href="css/style.css">
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
      
<?php
require('database/dbconnect.php');
$sql = "SELECT *, DATE_FORMAT(evenementen.datum, '%m %d %Y') as dag FROM evenementen LEFT JOIN locaties ON evenementen.locatie_id = locaties.locatie_id LEFT JOIN artiesten ON evenementen.artiest_id = artiesten.artiest_id";
if($result = $conn->query($sql)){
    while ($row = $result-> fetch_row()){
        echo "<section class='evenementen'>".$row[18].$row[7]."' alt=''></section>";
    } 
} else {
    echo "werkt niet";
}

?>


</body>
</html>