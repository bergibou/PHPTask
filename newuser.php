<?php
$servername = "localhost:3306";
$username = "samy";
$password = "S@4khadra92";
$dbname = "samy_";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$username=$_POST['pseudo'];
$password=$_POST['password'];
	$sql = "INSERT INTO customers (customer_name, customer_password)
        VALUES ('$username', '$password')";
if($conn->query($sql) === TRUE){
require 'Login.php';
}
else{
echo"error";
}
$conn->close();
?>
