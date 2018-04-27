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
$search=$_POST['search'];
$sql = "SELECT image_id,Title,description,url FROM image WHERE (image_id LIKE '%$search%')";
 $res = $conn->query($sql);
		 WHILE ($row = $res->fetch_assoc()){ 
		 
                        echo '<IMG SRC="'.$row['url'].'">'
                    $row['Title']
                     $row['description']  
		 }
$conn->close();
?>
