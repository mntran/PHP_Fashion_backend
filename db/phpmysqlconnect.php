<?php
    $host = 'localhost';
    $dbname = 'cis4270_MTran';
    $username = 'root';
    $password = 'root';
 
try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    if($conn != null) {
        // echo "Connected to $dbname at $host successfully.";
    }
} catch (PDOException $pe) {
    die("Could not connect to the database $dbname :" . $pe->getMessage());
}