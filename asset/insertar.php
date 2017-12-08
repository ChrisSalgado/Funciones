<?php
include 'conexion.php';
        $nombre=$_POST["nombre"];
        $apellido=$_POST["apellido"];
        $DUI=$_POST["DUI"];
        $Fecha=$_POST["Fecha"];
        $pass=$_POST["pass"];
        $correo=$_POST["correo"];
        $conexion=mysqli_connect('localhost', 'root', '');
        
        $f= explode('/', $Fecha);
        //$fecha_sql=$f[2]."-".$f[0]."-".$f[1];
        $consulta="INSERT INTO funciones (Nombre) VALUES ('$nombre')";
        
        $query=mysqli_query($conexion, $consulta);
        if (!$query){
            echo 'Error al registrarse';
        }else {
            echo 'Datos ingresados correctamente';
        }
        
           
        //mysqli_free_result($query);
        mysqli_close($conexion);
?>