<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
</head>

<body>
  <form action="includes/signup.inc.php" method="post">
    <input name="firstname" placeholder="Firstname" type="text">
    <br>
    <input name="last" placeholder="Lastname" type="text">
    <br>
    <input name="email" placeholder="E-mail" type="text">
    <br>
    <input name="user" placeholder="Username" type="text">
    <br>
    <input name="pwd" placeholder="Password" type="password">
    <br>
    <input type="submit" name="submit" value="Submit">
  </form>
  <h2>Or Log in here!</h2>
  <form action="includes/login.inc.php" method="post">
    <input type="text" name="user_login" placeholder="Username">
    <input type="password" name="pwd_login" placeholder="Password">
    <input type="submit" name="submit_login" value="Log in">
  </form>
</body>


</html>
