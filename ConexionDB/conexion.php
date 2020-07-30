<?php

    $conexion = mysqli_connect(
        'localhost',
        'root',
        '',
        'AsoRock'

    );
    if(!$conexion){
        die("ERROR! No se pudo agregar a la DB");
    }
    

?>
