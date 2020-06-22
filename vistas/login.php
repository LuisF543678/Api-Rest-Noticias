<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
  
    <?php echo '<link rel="stylesheet" href="css/style.css">'?>

</head>
<body>
    <?php 
        if(isset($errorLogin)) {
            echo $errorLogin;
        }
    ?>
  <div class="wrapper fadeInDown">
        <div id="formContent">
          <!-- Tabs Titles -->
          <h2 class="active"> Iniciar sesi&oacute;n </h2>
          <!-- Login Form -->
          <form action="" method="POST">
            <input type="text" class="fadeIn second" name="username" placeholder="Username">
            <input type="password" class="fadeIn third" name="password" placeholder=Ppassword">
            <input type="submit" class="fadeIn fourth" value="Iniciar Sesión">
          </form>
        </div>
    </div>
</body>
</html>