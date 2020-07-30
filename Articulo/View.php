<?php  
    include("../ConexionDB/conexion.php"); 
    
    

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "SELECT * FROM Articulos WHERE Id = $id";
        $result = mysqli_query($conexion, $query);

        if(mysqli_num_rows($result) == 1)
        {
            $row = mysqli_fetch_array($result);
           
            $titulo = $row['Titulo'];
            $autor = $row['Autor'];
            $contenido = $row['Contenido'];
            $imagen = $row["Foto"];
        }
    }
?>

<div>

    <h1><?php echo $row["Titulo"]?></h1>

      <p> <?php echo $row["Autor"]?></p>

      <?php echo $row["Contenido"]?>

      <img src="../ImgPublicaciones/Articulos/<?php echo $row['Foto']?>" alt=""/>

   

</div>

