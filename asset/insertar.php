<?php
include("conexion.php");
  

         $conexion = mysqli_connect('localhost', 'root', '') or die("Database connection failed: " . mysqli_error());
         $my_select = mysqli_select_db($conexion, 'funciones') or die("Database selection failed: " . mysqli_error());

             $resultado = mysqli_query( $conexion, "INSERT INTO usuario (Nombre, Apellido, DUI, Fecha, Contraseña, correo) VALUES ( '$_POST[nombre]', '$_POST[apellido]', '$_POST[DUI]', '$_POST[Fecha]','$_POST[pass]','$_POST[correo]' )");
             echo "datos insertados";
           
            mysqli_free_result($resultado);
            mysqli_close($conexion);

?>