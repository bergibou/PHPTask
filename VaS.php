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
            <label for="uname"><b>Search</b></label>
    <input type="text" placeholder="Search here ..." name="" required>
            <button type="submit">Submit</button>
            </header>
        <main>
        <div class="row container">
            <!--card1-->
        <div class="col s4">
            
                <div class="card-image">
                    <a href="#"><img src="assets/card4.jpg"></a>
                    
                </div>
                <div class="card-action">  
    
            </div>
        </div>
            <!--card2-->
            <div class="col s4">
            
                <div class="card-image">
                    <a href="#"><img src="assets/card5.jpeg"></a>
                </div>
                <div class="card-action">
                
                
            </div>
        </div>
            <!--card2-->
            <div class="col s4">
            
                <div class="card-image">
                    <a href="#"><img src="assets/card6.jpeg"></a>
                </div>
                <div class="card-action">
                
                </div>
            </div>
                <div class="col s4">
            
                <div class="card-image">
                    <a href="#"><img src="assets/card7.jpeg"></a>
                </div>
                <div class="card-action">
                
                
            </div>
        </div>
                    <div class="col s4">
            
                <div class="card-image">
                    <a href="#"><img src="assets/card8.jpg"></a>
                </div>
                <div class="card-action">
                
                
            </div>
        </div>
            <div class="col s4">
            
                <div class="card-image">
                    <a href="#"><img src="assets/card9.jpeg"></a>
                </div>
                <div class="card-action">
                
                
            </div>
        </div>
            <div class="col s4">
            
                <div class="card-image">
                    <a href="#"><img src="assets/card10.jpeg"></a>
                </div>
                <div class="card-action">
                
            
            </div>
        </div>
            <div class="col s4">
            
                <div class="card-image">
                    <a href="#"><img src="assets/card11.jpeg"></a>
                </div>
                <div class="card-action">
                
                
            </div>
        </div>
            <div class="col s4">
            
                <div class="card-image">
                    <a href="#"><img src="assets/card12.jpeg"></a>
                </div>
                <div class="card-action">
                
                
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