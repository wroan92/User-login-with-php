<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Welcome</title>
  </head>
  <body>
    <h1>Welcome!</h1>
    <h2>
      Welcome
      <!-- Denne fungerer ikke? -->
      <?php echo $_SESSION['u_first']; ?>
      You have successfully logged in
    </h2>
  </body>
</html>
