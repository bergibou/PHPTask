<!DOCTYPE html>
  <html>
    <head>
      <?php
                require 'headerlog.php';
            ?>
    </head>

    <body>
        <header>
      <?php
                require 'nav.php';
            ?>
      
        
            </header>
        <center><h2>Sign Up</h2>

<form method="post">
  <div class="container">
    <label for="pseudo"><b>Username</b></label>
    <input type="text" placeholder="Create Username" name="pseudo" id="pseudo" required>

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Create Password" name="password" id"password" required>
        
    <button type="submit">Register</button>
  </div>
</form>
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
$username=$POST['pseudo'];
$password=$POST['password'];
$sql = "INSERT INTO customers (customer_name, customer_password)
VALUES ('$username', '$password')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
 require 'footer.php';
	    
            ?>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
  </html>
