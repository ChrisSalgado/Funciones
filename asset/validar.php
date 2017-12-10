<?php
session_start();

require("conexion.php");
error_reporting (0);

$usuario = $_POST['correo'];
$clave = $_POST['clave'];

$_SESSION['usuario'] = $usuario;

$conexion = mysqli_connect('localhost', 'root', '', 'funciones');
$consulta = mysqli_query($conexion, "SELECT * FROM usuario WHERE Nombre = '$usuario' and pass = '$clave'");

$filas = mysqli_num_rows($consulta);

if ($filas > 0){
    header("location:Bienvenido.php");
}
else{
    echo '
        <script>
        alert("Error en la autenticacion");
        window.history.go(-1);
        </script>
    ';
}
mysqli_free_result($resultado);
mysqli_close($conexion);

?> 