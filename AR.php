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
    background-image: url("assets/Home.jpeg");
}
</style>
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
