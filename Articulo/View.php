<?php

    include('../ConexionDB/conexion.php');

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "SELECT * FROM articulos WHERE Id = $id";
        $resultado = mysqli_query($conexionDB, $query);

        if(mysqli_num_rows($resultado)==1){
            $row = mysqli_fetch_array($resultado);

            $titulo = $row['Titulo'];
            $imagen = $row['Imagen'];
            $autor = $row['Autor'];
            $contenido = $row['Contenido'];
            $fecha = $row['Fecha'];
        }
    }

?>


<div>
    <h1><?php echo $row['Titulo']?></h1>
    <img src="../ImgPublicaciones/Articulos/<?php echo $row['Imagen']?>" alt="">
    <h2><?php echo $row['Autor']?> - <?php echo $row['Fecha']?></h2>
    <p><?php echo $row['Contenido']?></p>
</div>
