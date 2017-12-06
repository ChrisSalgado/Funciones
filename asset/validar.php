<?php
        require("conexion.php");

if(isset($_POST["correo"])){
    $usuario = $_POST['correo'];
}

             $conexion = mysqli_connect('localhost', 'root', '') or die("Database connection failed: " . mysqli_error());
             $my_select = mysqli_select_db($conexion, 'funciones') or die("Database selection failed: " . mysqli_error());
            
             $resultado = mysqli_query($conexion, "SELECT Nombre, Contraseña FROM usuario WHERE Nombre = '$usuario' and Contraseña = '$_POST['pass']' ");
          
        
            $filas = mysqli_num_rows($resultado);

            if ($filas > 0){
                header("location:Bienvenido.php");
            }else{
                echo "Error en la autenticacion";
            }

            mysqli_free_result($resultado);
            mysqli_close($conexion);
            
            
?> 