<?php
    $conexion = mysqli_connect('localhost', 'root', '');
    
    if (!$conexion) {
        die("Database connection failed: " . mysqli_error());
    }else

    $my_select = mysqli_select_db($conexion, 'funciones');

    if(!$my_select){
        die("Database selection failed: " . mysqli_error());
    }
?>