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
start_session();
$TITLE=$_POST['title'];
$DESCRIPTION=$_POST['Description'];
$URL=$_POST['Url'];
$ID=$_SESSION['Id'];
	$sql = "INSERT INTO image (Title, description,url,customer_id)
        VALUES ('$TITLE', '$DESCRIPTION','$URL','$ID')";
if($conn->query($sql) === TRUE){
echo "succeed";
}
else{
echo"error";
}
$conn->close();
?>
