<?php

    include("../ConexionDB/conexion.php");

    if(isset($_POST['guardar'])){
        
        $nombre_Imagen = $_FILES['imagen']['name'];
        $tipo_Imagen = $_FILES['imagen']['type'];
        $tamagno_Imagen = $_FILES['imagen']['size'];

        if($tamagno_Imagen <=2000000){

            $carpeta_destino = $_SERVER["DOCUMENT_ROOT"].'/AsoRock/ImgPublicaciones/Articulos/';

            move_uploaded_file($_FILES["imagen"]["tmp_name"], $carpeta_destino.$nombre_Imagen);
        }

        $titulo = $_POST['titulo'];
        $autor = $_POST['autor'];
        $contenido = $_POST['contenido'];

        $query = "INSERT INTO Articulos (Titulo, Foto, Autor, Contenido) values ('$titulo', '$nombre_Imagen', '$autor', '$contenido')";
        
        $resultado = mysqli_query($conexion, $query);

        if(!$resultado){
            die("ERROR! No se pudo agregar a la DB");
        }
        
        header("Location: ../Admin/Lista_Crear_Articulo.php");

    }



?>