<?php
$error = "";
if(isset($_POST['submit'])) {
    if(!empty($_POST['gebruikersnaam']) && !empty($_POST['wachtwoord'])) {

        require('dbconnect.php');

        $gebruikersnaam = trim($_POST['gebruikersnaam']);
        $wachtwoord = trim($_POST['wachtwoord']);

        $sql = "SELECT * FROM gebruikers WHERE username = '".$gebruikersnaam."'";

        if($result = $conn->query($sql)) {
            
            $dbuser = $result->fetch_row();
            $dbpass = $dbuser[2];
            if(password_verify($wachtwoord, $dbpass)) {
                session_start();
                $_SESSION['ingelogd'] = true;
                $_SESSION['username'] =  $gebruikersnaam;
                $_SESSION['password'] = $_POST['wachtwoord'];
                header("Location: ingelogddb.php");

            } else {
                $error = "Niet de juiste gegevens ingevuld";
            }
        }

}
}


?>