<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin Home</title>
</head>
<body>
<?php 
//echo '<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
 //integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">';

echo date("h:i:s A", strtotime("- 7 hour"));
?>
    <div id="menu">
        <ul>
            <li>Home</li>
            <li class="cerrar-session">
            <a href="includes/logout.php">Cerrar session</a>
            </li>
        </ul>
    </div>
    <section>
        <h1>Bienvenido <?php echo $user->getNombre(); ?> </h1>
    </section>
</body>
</html>