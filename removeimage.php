<?php
session_start();
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
$URL=$_POST['Url'];
	$sql = "DELETE FROM `image` WHERE `image`.`image_id` = '$URL';";
if($conn->query($sql) === TRUE){
require'VaS.php';
}
else{
echo"error";
}
$conn->close();
?>
