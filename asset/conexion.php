<?php
    $conexion = mysqli_connect('localhost', 'root', '', 'funciones');
    
    if (!$conexion) {
        die("Database connection failed: " . mysqli_error());
    }   
?>