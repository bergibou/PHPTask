<?php 
$pseudo = (isset($_POST['pseudo']))?$_POST['pseudo']:'';
$password =(isset($_POST['password']))?$_POST['password']:'';
$db = new PDO('mysql:host=localhost:3306;dbname=samy_;charset=utf8mb4', 'samy', 'S@4khadra92');
$identi = $db->query("SELECT count(customer_id)as nbr FROM customers WHERE customer_name = '$pseudo' AND customer_password = '$password'");
$row = $identi->fetch(PDO::FETCH_ASSOC);

if($row['nbr'] != '1'){
	header("Location: error.php");
}
else{
header("Location: AR.php");
}
?>
<!DOCTYPE html>
  <html>
    <head>
     <?php
                require 'header2.php';
            ?>
    </head>

    <body>
        <header>
        <?php
                require 'nav2.php';
            ?>
      </header>
        <div class="row container">
        <div class="col s12 m6">
            <div class="card">
                <div class="card-image">
                    <img src="assets/Add.jpeg" alt="Add">
                    <span class="card-title">Add</span>
                    <a class="btn-floating halfway-fab1 waves-effect waves-light red"><i class="material-icons">add</i></a>
                </div>
                <div class="card-content">
                 <label ><b>Title</b></label>
    <input type="text" placeholder=" choose a title..." required>
                    <label ><b>Description</b></label>
    <input type="text" placeholder="write here ..." required>
            <button type="submit">Submit</button>
                </div>
            </div>
        </div>
        <div class="col s12 m6">
            <div class="card">
                <div class="card-image">
                    <img src="assets/Remove.jpg" alt="Remove">
                    <span class="card-title">Remove</span>
                </div>
                <div class="card-content">
                    <label ><b>Remove by ID</b></label>
    <input type="text" placeholder="ID ..." required>
            <button type="submit">Remove</button>
                </div>
            </div>
        </div>
  </div>
        <?php
                require 'footer2.php';
            ?>
      </body>
</html>
