<?php 

    //Conexion a la base de datos
    include('../ConexionDB/conexion.php');

    if(isset($_POST['guardar'])){
        $nombreImagen = $_FILES['imagen']['name'];
        $tamanoImagen = $_FILES['imagen']['size'];
        
        if($tamanoImagen<=2000000){
            $carpetaDestino = $_SERVER['DOCUMENT_ROOT'].'/AsoRock/ImgPublicaciones/Articulos/';
            move_uploaded_file($_FILES['imagen']['tmp_name'],$carpetaDestino.$nombreImagen);
        }

        $titulo = $_POST['titulo'];
        $slug = $_POST['slug'];
        $fecha = $_POST['fecha'];
        $autor = $_POST['autor'];
        $contenido = $_POST['contenido'];

        $query = "INSERT INTO articulos (Titulo, Slug, Autor, Contenido, Imagen, Fecha) values('$titulo', '$slug', '$autor', '$contenido', '$nombreImagen', '$fecha')";
        $resultado = mysqli_query($conexionDB,$query);

        if(!$resultado){
            die("No se pudo agregar a la base de datos");
        }

        header("Location: ../Admin/Lista_Crear_Articulo.php");

    }



?>