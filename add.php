<?php

    include_once 'apinoticias.php';

    $api = new ApiNoticias();
    

    if(isset($_POST['descripcion']) && isset($_FILES['imagen'])){
        if($api->subirImagen($_FILES['imagen'])){
            $item = array(
                'descripcion' => $_POST['descripcion'],
                'imagen' => $api->getImagen()
            );
            $api->add($item);
        }else {
            $api->error('Error con el archivo: ' . $api->getError());
        }
    }else {
        $api->error('Error al llamar a la API');
    }

?>