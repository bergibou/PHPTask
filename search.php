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
$search=$_POST['search'];
	$sql = "SELECT image_id,Title,description,url FROM image WHERE (image_id LIKE '%$search%')";
if($conn->query($sql) === TRUE){
 $res = $conn->query($sql);
		 WHILE ($row = $res->fetch_assoc()){ 
		 echo '<div class="col s4">
                <div class="card" id="size">
                    <div class="card-image">
                        <IMG SRC="'.$row['URL'].'">
                    </div>
                    <div class="card-content">
                        <p>Description : '.$row['Description'].'</p>
						<p>Id : '.$row['ItemID'].'</p>
                    </div>
                    </div>
                </div>';
		 }
}
else{
echo"error";
}
$conn->close();
?>
