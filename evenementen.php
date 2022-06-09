<?php

require('dbconnect.php');
$sql = "SELECT * FROM evenementen";
if($result = $conn->query($sql)){
while ($row = $result-> fetch_row()){
    echo "<section class='evenementen'>".$row[1]. "<img src='" .$row[5]."' alt=''></section>";
} 
} else {
    echo "query werkt niet";
}

?>