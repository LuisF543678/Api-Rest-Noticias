<?php

    include_once 'db.php';
    
    class Noticia extends DB {

        function obtenerNoticias() {
            $query = $this->connect()->query('SELECT * FROM noticias');
            return $query;
        }

        function obtenerNoticia($id) {
            $query = $this->connect()->prepare('SELECT * FROM noticias WHERE id = :id');
            $query->execute(['id' => $id]);
            return $query;
        }

        function nuevaNoticia($noticia) {
            $query = $this->connect()->prepare('INSERT INTO noticias (descripcion, imagen) VALUES (:descripcion, :imagen)');
            $query->execute(['descripcion' => $noticia['descripcion'], 'imagen' => $noticia['imagen']]);
            return $query; 
        }
    }


?>