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

<form method="post" action="AR.php">
  <div class="imgcontainer">
    <img src="assets/images.png" alt="Avatar" class="avatar">
    </div></center>
  <div class="container">
    <label for="pseudo"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="pseudo" id="pseudo" required>

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" id"password" required>
        
    <button type="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>
</form>
      <?php 
  require 'connexion.php';
  if (!isset($_POST['submit']))
{
	$retour = mysqli_query($link ,'SELECT customer_id FROM customers WHERE customer_name = :pseudo AND customer_password = :password');
	
} 
else{
echo '<div> <p>message<p></div>';
}
$conn->close();
 require 'footer.php';
            ?>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
  </html>
