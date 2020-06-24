<?php

    include_once 'noticia.php';
    //echo '<script src="assets/alertifyjs/alertify.js"></script>';
    class ApiNoticias {

        private $imagen;
        private $error;

        function getAll() {
            $noticia = new Noticia();
            $noticias = array();
            $noticias["items"] = array();
            $res = $noticia->obtenerNoticias();

            if($res->rowCount()) {
                while($row = $res->fetch(PDO::FETCH_ASSOC)){
                    $item = array(
                        'id' => $row['id'],
                        'descripcion' => $row['descripcion'],
                        'imagen' => $row['imagen']
                    );
                    array_push($noticias['items'],$item);
                }
                $this-> printJSON($noticias);
            } else {
                $this-> error('No hay elementos registrados');
            }
        }

        function getById($id){
            $noticia = new Noticia();
            $noticias = array();
            $noticias["items"] = array();
    
            $res = $noticia->obtenerNoticia($id);
    
            if($res->rowCount() == 1){
                $row = $res->fetch();
            
                $item=array(
                    "id" => $row['id'],
                    "descripcion" => $row['descripcion'],
                    "imagen" => $row['imagen'],
                );

                array_push($noticias["items"], $item);
                $this->printJSON($noticias);
            }else {
                echo json_encode(array('mensaje' => 'No hay elementos'));
            }
        }

        function add($item) {
            $noticia = new Noticia();

            $res = $noticia->nuevaNoticia($item);
            //$this->exito('Nueva noticia registrada');
            echo '<script type="text/javascript">alert("Datos agregados"); window.location.href = "dashboard.php";</script>';
        }

        function printJSON($array) {
            echo '<code>' . json_encode($array) . '</code>';
        }

        function exito($mensaje) {
            echo json_encode(array('mensaje' => $mensaje));
        }

        function error($mensaje) {
            echo '<code>' . json_encode(array('mensaje' => $mensaje)) .  '</code>';
        }

        function subirImagen($file){
        $directorio = "imagenes/";

        $this->imagen = basename($file["name"]);
        $archivo = $directorio . basename($file["name"]);

        $tipoArchivo = strtolower(pathinfo($archivo, PATHINFO_EXTENSION));
   
        $checarSiImagen = getimagesize($file["tmp_name"]);

        if($checarSiImagen != false){

            $size = $file["size"];

            if($size > 3000000){
                $this->error = "El archivo tiene que ser menor a 3 mb";
                return false;
            }else{


                if($tipoArchivo == "jpg" || $tipoArchivo == "jpeg"){

                    if(move_uploaded_file($file["tmp_name"], $archivo)){
                        return true;
                    }else {
                        $this->error = "Hubo un error en la subida del archivo";
                        return false;
                    }
                }else {
                    $this->error = "Solo se admiten archivos jpg/jpeg";
                    return false;
                }
            }
            
        }else {
            $this->error = "El documento no es una imagen";
            return false;
        }
    }

        function getImagen() {
        return $this->imagen;
        }

        function getError() {
        return $this->error;
        }
    }

?>