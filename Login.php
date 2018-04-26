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
        <center><h2>Login</h2>

<form action="/action_page.php">
  <div class="imgcontainer">
    <img src="assets/images.png" alt="Avatar" class="avatar">
    </div></center>
<div class="container">
   <?php 
  require 'connexion.php';
  $sql = "SELECT customer_id, customer_name FROM customers";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> id: ". $row["customer_id"]. " - Name: ". $row["customer_name"]. "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?> 

  </div>
  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
        
    <button type="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>
        <?php
                require 'footer.php';
            ?>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
  </html>
