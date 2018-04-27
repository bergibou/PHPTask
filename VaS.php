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
            <label for="uname"><b>Search</b></label>
    <input type="text" placeholder="Search here ..." name="" required>
            <button type="submit">Submit</button>
            </header>
        <main>
		<div class="row container">
        <?php  
		 $conn = new mysqli($servername, $username, $password, $dbname);
		 $sql = "SELECT * FROM collection;";
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
