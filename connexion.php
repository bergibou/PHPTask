<?php
$servername = "localhost";
$username = "samy";
$password = "170595";
$dbname = "samy_";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

?>
