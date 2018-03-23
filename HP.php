<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <style>
body {
    background-color: #42ff004f;
}
</style>
    </head>

    <body>
        <header>
            
            <?php
                require 'nav.php';
            ?>
        <img class="responsive-img" src="assets/headerImg.jpeg" max-width="100%" height="auto"/>
            </header>
        <main>
        <div class="row container">
            <!--card1-->
        <div class="col s4">
            <div class="card">
                <div class="card-image">
                    <img src="assets/card1.jpeg">
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
                    <img src="assets/card2.jpeg">
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
                    <img src="assets/card3.jpeg">
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