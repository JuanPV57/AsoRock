
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AsoRock</title>
    
    <!----Mis estilos---->
    <link rel="stylesheet" href="./Assets/Css/Site.css">
    <link rel="stylesheet" href="./Assets/Css/Responsive.css">

     <!--Estilos CSS BOOTSTRAP-->
     <link rel="stylesheet" href="assets/css/bootstrap.css">

    <!--Fuente letra-->
    <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&family=Open+Sans+Condensed:wght@300&display=swap" rel="stylesheet">

    <!--iconos-->
    <script src="https://kit.fontawesome.com/4c3088c2c7.js" crossorigin="anonymous"></script>
</head>
<body>
    
    <?php 
    include('./ConexionDB/conexion.php');

    $query = "SELECT * FROM articulos order by Id";
    $resultado = mysqli_query($conexionDB, $query);

    while($row = mysqli_fetch_array($resultado)){?>
    <a href="Articulo/view.php?id=<?php echo $row['Id']?>">

        <div style="border: solid 3px #000;">
            <img src="./ImgPublicaciones/Articulos/<?php echo $row['Imagen']?>" alt="">
            <h1><?php echo $row['Titulo']?></h1>
        </div>
    </a>
        
    <?php }?>

    <script src="./Assets/Js/jquery.js"></script>
    <script src="./Assets/Js/Scroll.js"></script>
    <script src="./Assets/Js/bootstrap.js"></script>
    <script src="./Assets/Js/bootstrap.min.js"></script>
</body>
</html>

