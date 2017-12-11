<?php
error_reporting (0);
include ('conexion.php');
        
        //Recibir los datos a las variables
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $DUI = $_POST["DUI"];
        $Fecha = $_POST["Fecha"];
        $pass = $_POST["pass"];
        $correo = $_POST["correo"];
        
        //Consulta para insertar
        $insertar = "INSERT INTO usuario (Nombre, Apellido, DUI, Fecha, pass, correo) values ('".$nombre."', '".$apellido."', '".$DUI."', '".$Fecha."', '".$pass."', '".$correo."')";
        
        //Ejecutar consulta
        $resultado = mysqli_query($conexion, $insertar);
        
        if(!$resultado){
            echo "error al registrarse";
        }else{
            echo "usuario registrado correctamente";
        }
        
           
        //mysqli_free_result($query);
        mysqli_close($conexion);
?>