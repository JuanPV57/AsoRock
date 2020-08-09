<?php

    $conexionDB = mysqli_connect(
        'localhost',
        'root',
        '',
        'AsoRock'
    );

    if (!$conexionDB){
        die("No se puede conectar a la base de datos");
    };
?>
