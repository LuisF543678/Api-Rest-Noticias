<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php echo '<link rel="shortcut icon" href="assets/images/iconlock.ico">'?>
  <?php echo '<link rel="stylesheet" href="assets/login_style.css">'?>
  <title>UEPOM | Login</title>
</head>

<body>
    <?php 
        if(isset($errorLogin)) {
            echo $errorLogin;
        }
    ?>
  <div class="wrapper fadeInDown">
        <div id="formContent">
          <div class="fadeIn first">
            <img src="assets/images/user.png">
          </div>
          <h2 class="active"> Iniciar sesi&oacute;n </h2>
          <form action="" method="POST">
            <input type="text" class="fadeIn second" name="username" placeholder="Username">
            <input type="password" class="fadeIn third" name="password" placeholder="Password">
            <input type="submit" class="fadeIn fourth" value="Iniciar Sesión">
          </form>
        </div>
    </div>
</body>
</html>