<!DOCTYPE html>
<html>
    <head>

      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,all"/>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <link rel="shortcut icon" href="assets/Logo.ico">
      <title>Gallery</title>
        <style>
body {
    background-color: lightgreen;
}
</style>
    </head>

    <body>
        <header>
      <?php
      require('nav.php')
      ?>
      
        <a><img class="responsive-img" src="assets/headerImg.jpeg" alt="header" /></a>
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
                <a href="VaS.html">View And Search</a>
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
                <a href="Login.html">Login</a>
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
                <a href="AR.html">Add and remove</a>
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
