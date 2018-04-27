<?php
$db = new PDO('mysql:host=localhost:3306;dbname=samy_;charset=utf8mb4', 'samy', 'S@4khadra92');

$id = $_GET['image_id'];
$id = mysql_real_escape_string($id);
$query = "SELECT * FROM `image` WHERE `image_id`='" . $id . "'";
$result = mysql_query($query);
for($rows = array(); $tmp = mysql_fetch_array($result);)
        {
            $rows[] = $tmp;
        }
?>
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
         <table><?php foreach($row as $r):?>
    <td><?php echo $r['id'] ?></td><?php endforeach ?>
</table>
        <div class="row container">
            <!--card1-->
        <div class="col s4">
            <div class="card">
                <div class="card-image">
                    <img src="assets/card1.jpeg" alt="card1">
                    <span class="card-title">View And Search</span>
                </div>
                <div class="card-content">
                    <p>Here you can search and view your image.</p>
                </div>
                <div class="card-action">
                <a href="VaS.php">View And Search</a>
                </div>
            </div>
        </div>
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
