<?php

    include_once 'apinoticias.php';

    $api = new ApiNoticias();
    
    if(isset($_GET['id'])) {
        $id = $_GET['id'];

        if(is_numeric($id)) {
            $api->getById($id);
        } else {
            $api->error('Los parametros son incorrectos');
        }

    } else {
        $api->getAll();
    }

?>