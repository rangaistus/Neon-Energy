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
    <main>
    <?php

require('database/dbconnect.php');


$sql = "SELECT *, DATE_FORMAT(evenementen.datum, '%m %d %Y') as dag FROM evenementen
LEFT JOIN locaties 
ON evenementen.locatie_id = locaties.locatie_id 
LEFT JOIN artiesten 
ON evenementen.artiest_id = artiesten.artiest_id WHERE evenementen.evenement_id = ".$_GET['id'];


if($result = $conn->query($sql)){
while ($row = $result-> fetch_row()){
    echo "<section class='evenementen'>
    <div class='datum'>".$row[18]. "</div>
    <div class='locatie'>" .$row[11]."</div>
    <div class='locatie'>" .$row[1]."</div>
    <div class='locatie'>" .$row[4]."</div>
    <div class='locatie'>" .$row[6]."</div>
    <div class='link'><a href='event-details.php?id=".$row[0]."'>meer info</a></div>
    </section>";
} 
} else {
    echo "query werkt niet";
}
?>

    </main>
</body>
</html>