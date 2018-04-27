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
	    <br><br><br><br><br><br><br><br><br><br><br><br>
        <center><h2>Sign Up</h2>

<form method="post" action="newuser.php">
  <div class="container">
    <label for="pseudo"><b>Username</b></label>
    <input type="text" placeholder="Create Username" name="pseudo" id="pseudo" required>

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Create Password" name="password" id"password" required>
        
    <button type="submit">Register</button>
  </div>
</form>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br><br><br><br><br><br><br><br><br><br><br><br>
		<br>
      <?php 
 require 'footer.php';
	    
            ?>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
  </html>
