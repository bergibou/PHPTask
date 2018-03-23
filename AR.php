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
        <br>
        <br>
        <br>
        <br>
        <label for="uname"><b>ADD</b></label>
    <input type="text" placeholder="Add Here ..." name="" required>
        <button type="submit">Submit</button>
        <br>
        <br>
        <br>
        <br>
        <label for="uname"><b>Remove</b></label>
    <input type="text" placeholder="Remove Here ..." name="" required>
        <button type="submit">Submit</button>
         <br>
        <br>
        <br>
        <br>
        <?php
                require 'footer2.php';
            ?>
      </body>
</html>