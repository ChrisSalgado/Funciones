<?php
include("conexion.php");


         if(isset($_POST['nombre']) && !empty($_POST['apellido']) && !empty($_POST['DUI']) && !empty($_POST['fecha']) && !empty($_POST['pass']) && !empty($_POST['correo']))
     {
         $conexion = mysqli_connect('localhost', 'root', '') or die("Database connection failed: " . mysqli_error());
         $my_select = mysqli_select_db($conexion, 'funciones') or die("Database selection failed: " . mysqli_error());

         mysqli_query("INSERT INTO usuario (Nombre, Apellido, DUI, Fecha, Contraseña, correo) VALUES ('$_POST[nombre]', '$_POST[apellido]','$_POST[DUI]', '$_POST[fecha]','$_POST[pass]','$_POST[correo]' )", $conexion);
             echo "datos insertados";
     }else{
        echo "problemas al insertar datos";
     }

?>