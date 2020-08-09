<?php

    $conexionDB = mysqli_connect(
        'localhost',
        'root',
        '',
        'asorock'
    );

    if (!$conexionDB){
        die("No se puede conectar a la base de datos");
    };
?>
