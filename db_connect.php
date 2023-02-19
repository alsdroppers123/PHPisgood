<?php

$servername = "sql112.epizy.com";
$username = "epiz_31249493";
$password = "Af0RXQyXomI";
$dbname = "epiz_31249493_hello";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
