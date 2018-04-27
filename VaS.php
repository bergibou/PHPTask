<!DOCTYPE html>
  <html lang="en">
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
            <form method="post" action"search.php">
		  <label for="uname"><b>Search</b></label>
    <input type="text" placeholder="Search here ..." name="" required>
            <button type="submit">Submit</button>
		    </form>
            </header>
        <main>
		<div class="row container">
        <?php  
		$servername = "localhost:3306";
		$username = "samy";
		$password = "S@4khadra92";
		$dbname = "samy_";
		 $conn = new mysqli($servername, $username, $password, $dbname);
		 $sql = "SELECT * FROM image;";
		 $res = $conn->query($sql);
		 WHILE ($row = $res->fetch_assoc()){ 
		 echo '<div class="col s4">
                <div class="card">
                    <div class="card-image">
                        <IMG SRC="'.$row['url'].'">
                    <span class="card-title">'.$row['Title'].'</span>
		    </div>
                    <div class="card-content">
                        <p>Description : '.$row['description'].'</p>
                    </div>
                    </div>
                </div>';
		 }?>
	</div>
        </main>
        <?php
                require 'footer.php';
            ?>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
  </html>
