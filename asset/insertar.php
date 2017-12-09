<?php
include 'conexion.php';
        $Nombre = $_POST["Nombre"];
        $Apellido = $_POST["Apellido"];
        $DUI = $_POST["DUI"];
        $Fecha = $_POST["Fecha"];
        $Pass = $_POST["pass"];
        $Correo = $_POST["correo"];
        $conexion=mysqli_connect('localhost', 'root', '', 'funciones');
        
        //$f= explode('/', $Fecha);
        //$fecha_sql=$f[2]."-".$f[0]."-".$f[1];
        $consulta="INSERT INTO usuario (Nombre, Apellido, DUI, Fecha, Pass, correo) VALUES ('$Nombre', '$Apellido', '$DUI', '$Fecha', '$Pass', '$Correo')";
        
        $query=mysqli_query($conexion, $consulta);
        if (!$query){
            echo 'Error al registrarse';
        }else {
            echo 'Datos ingresados correctamente';
        }
        
           
        //mysqli_free_result($query);
        mysqli_close($conexion);
?>