<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>UI-Conditions</title>
    <link rel = "icon" href = "afbeeldingen/UIlogo.php"   type = "image/x-icon"> 
</head>
</head>
<body>
<div class="logo">
    <img src="afbeeldingen/UIlogo.png" class="logo" alt="logo">
</div>
<!--<div class="form">
<div class="form-group">
 <form class="box" action="includes/loginchris.inc.php" method="post">
  <input type="text" name="mailuid" placeholder="Naam/E-mail">
  </form>
</div>
<div class="form-group">
    <form class="box" action="includes/loginchris.inc.php" method="post">
   <input type="password" name="pwd" placeholder="Wachtwoord">
   </form>
  </div>
<div class="login-btn">
<form class="box" action="includes/loginchris.inc.php" method="post">
<button type="submit" name="login-submit">Login</button>
</form>
</div> -->
<div class="form">
<form class="box" action="includes/loginchris.inc.php" method="post">
    <input type="text" name="mailuid" placeholder="Naam">
    <input type="password" name="pwd" placeholder="Wachtwoord">
    <button type="submit" name="login-submit">Login</button>
</form>
</div>
</body>
</html>