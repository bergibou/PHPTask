<!DOCTYPE html>
<html>
    <head>

       <?php
                require 'header.php';
            ?>
    </head>

    <body>
        <header>
      <?php
      require('nav.php')
      ?>
      
        <a><img class="responsive-img" src="assets/HeaderImg.jpeg" alt="header" /></a>
            </header>
        <main>
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
            <!--card2-->
            <div class="col s4">
            <div class="card">
                <div class="card-image">
                    <img src="assets/card2.jpeg" alt="card2">
                    <span class="card-title">Login</span>
                </div>
                <div class="card-content">
                    <p>You must login yourself if you want add an remove</p>
                </div>
                <div class="card-action">
                <a href="Login.php">Login</a>
                </div>
            </div>
        </div>
            <!--card2-->
            <div class="col s4">
            <div class="card">
                <div class="card-image">
                    <img src="assets/card3.jpeg" alt="card3">
                    <span class="card-title">Add And Remove</span>
                </div>
                <div class="card-content">
                    <p>Here you can add and remove images.</p>
                </div>
                <div class="card-action">
                <a href="AR.php">Add and remove</a>
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
