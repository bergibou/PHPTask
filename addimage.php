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
$TITLE=$_POST['title'];
$DESCRIPTION=$_POST['Description'];
$URL=$_POST['Url'];
$session=['customer_id'];
	$sql = "INSERT INTO image (Title, description,url,customer_id)
        VALUES ('$TITLE', '$DESCRIPTION','$URL','$session')";
if($conn->query($sql) === TRUE){
echo "succeed";
}
else{
echo"error";
}
$conn->close();
?>