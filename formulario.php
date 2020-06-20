<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo '<link rel="stylesheet" href="assets/css/bootstrap.min.css">'?>
    <?php echo '<link rel="stylesheet" href="assets/style.css">'?>
    <?php echo '<script src="assets/js/jquery-3.4.1.min.js"></script>'?>
    <?php echo '<script src="assets/js/bootstrap.min.js"></script>'?>
    <title>Admin | Dashboard</title>
</head>

<body>

    <!--    
    <form action="add.php" method="POST" enctype="multipart/form-data">
        <input type="text" name="descripcion" required>
        <input type="file" name="imagen" required>
        <input type="submit" value="Registrar nueva noticia">        
    </form>
    
    <h4>Bienvenido : <i><?php echo $user->getNombre(); ?></i> </h4>
                    <h4>Hora : <?php echo date("h:i:s A", strtotime("- 7 hour")); ?> </h4>
                    <a href="includes/logout.php"><img src="imagenes/off.png" alt="">Cerrar session</a>
                    -->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark navadmin">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand welcom" href="#">UEPOM dmin</a>
  
    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item active">
          <a class="nav-link user-2" href="#">Bienvenido</a>
        </li>
        <li class="nav-item">
          <a class="nav-link user" href="#"><?php echo $user->getNombre(); ?></a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
      <a class="navbar-brand linkclose">Datos</a>
      <a href="index.php"><img class="closeimg-2" src="imagenes/dbt.png" alt=""></a>
        <a class="nav-link userhour col-sm user-2">Hora de inicio : <?php echo date("h:i:s A", strtotime("- 7 hour")); ?> </a>
        <a class="navbar-brand linkclose">Cerrar session</a>
        <a href="includes/logout.php"><img class="closeimg" src="imagenes/offbtn.png" alt=""></a>
      </form>
    </div>
</nav>

    <br>
    <br>

    <div class="">
        <form class="border" action="add.php" method="POST" enctype="multipart/form-data">
            <div class="form-group col ">
                <label class="fontlabel">Descripcion</label>
                <textarea class="form-control alincontend-2" type="text" name="descripcion" required
                    rows="5"></textarea>
            </div>
            <div class="form-group col-sm">
                <label class="col-md-auto fontlabel-2">selecciona</label>
                <svg class="bi bi-file-earmark-arrow-up" width="2em" height="2em" viewBox="0 0 16 16"
                    fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M4 1h5v1H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V6h1v7a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2z" />
                    <path d="M9 4.5V1l5 5h-3.5A1.5 1.5 0 0 1 9 4.5z" />
                    <path fill-rule="evenodd"
                        d="M5.646 8.854a.5.5 0 0 0 .708 0L8 7.207l1.646 1.647a.5.5 0 0 0 .708-.708l-2-2a.5.5 0 0 0-.708 0l-2 2a.5.5 0 0 0 0 .708z" />
                    <path fill-rule="evenodd" d="M8 12a.5.5 0 0 0 .5-.5v-4a.5.5 0 0 0-1 0v4a.5.5 0 0 0 .5.5z" />
                </svg>
                <input type="file" class="form-control-file fontlabel-2 col-xs-4" type="file" name="imagen" required>
                <br>
                <input class="btn btn-success fontlabel-3 col col-lg-3" type="submit" value="Registrar nueva noticia">
            </div>
            <br>
        </form>
    </div>
</body>

</html>