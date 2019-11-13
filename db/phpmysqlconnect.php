<?php
define('NON_WEB_BASE_DIR', '/Users/michelletran/cis4270/');
define('APP_NON_WEB_BASE_DIR', NON_WEB_BASE_DIR . 'cis4270_MTran/');
include_once(APP_NON_WEB_BASE_DIR . 'db/dbconfig.php');
 
try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    //echo "Connected to $dbname at $host successfully.";
} catch (PDOException $pe) {
    die("Could not connect to the database $dbname :" . $pe->getMessage());
}