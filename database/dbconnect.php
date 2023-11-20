<?php

class Database {
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "neon_energy";
    private $conn;

    public function getConnection() {
        $this->conn = null;

        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->database, 
            $this->username, $this->password);
            $this->conn->exec("set names utf8");
            return $this->conn;
        } catch (PDOException $e) {
            echo "Connection error: ". $e->getMessage();
            return null;
        }
    }
}

?>